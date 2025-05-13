<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaction;
use App\Models\User;
use App\Models\CaseItem;
use App\Models\UserGame;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;

class BalanceController extends Controller
{
    // Константы для типов транзакций
    const TYPE_DEPOSIT = 'deposit';
    const TYPE_WITHDRAWAL = 'withdrawal';
    const TYPE_CASE_PURCHASE = 'case_purchase';
    const TYPE_CASE_REWARD = 'case_reward';

    // Константы статусов
    const STATUS_PENDING = 'pending';
    const STATUS_COMPLETED = 'completed';
    const STATUS_FAILED = 'failed';

    /**
     * Основная форма пополнения баланса
     */
    public function showForm()
    {
        return view('balance.topup', [
            'user' => Auth::user(),
            'min_amount' => config('balance.min_topup', 10),
            'max_amount' => config('balance.max_topup', 100000),
            'payment_methods' => $this->getAvailablePaymentMethods()
        ]);
    }

    /**
     * Обработка пополнения баланса
     */
    public function processPayment(Request $request)
    {
        $validated = $request->validate([
            'amount' => 'required|numeric|min:' . config('balance.min_topup', 10) . 
                       '|max:' . config('balance.max_topup', 100000),
            'payment_method' => 'required|in:' . implode(',', array_keys($this->getAvailablePaymentMethods()))
        ]);

        $user = Auth::user();
        
        $transaction = Transaction::create([
            'user_id' => $user->id,
            'amount' => $validated['amount'],
            'payment_method' => $validated['payment_method'],
            'type' => self::TYPE_DEPOSIT,
            'status' => self::STATUS_PENDING,
            'balance_before' => $user->balance,
            'balance_after' => $user->balance + $validated['amount'],
            'transaction_id' => Str::uuid()
        ]);

        return redirect()->route('payment.gateway', $transaction->id);
    }

    /**
     * Платежный шлюз
     */
    public function paymentGateway($transactionId)
    {
        $transaction = Transaction::with('user')
                        ->findOrFail($transactionId);
        
        $this->authorize('view', $transaction);

        if ($transaction->status === self::STATUS_PENDING) {
            $this->confirmPayment($transaction);
            $transaction->refresh();
        }

        return view('balance.gateway', [
            'transaction' => $transaction,
            'payment_method_name' => $this->getPaymentMethodName($transaction->payment_method)
        ]);
    }

    /**
     * Подтверждение платежа
     */
    protected function confirmPayment(Transaction $transaction)
    {
        DB::transaction(function () use ($transaction) {
            $user = $transaction->user;
            $user->balance += $transaction->amount;
            $user->save();

            $transaction->update([
                'status' => self::STATUS_COMPLETED,
                'completed_at' => now(),
                'balance_after' => $user->balance
            ]);
        });
    }

    /**
     * Проверка баланса для API
     */
    public function checkBalance(Request $request)
    {
        $request->validate([
            'amount' => 'required|numeric|min:0.01'
        ]);

        $user = Auth::user();
        $hasEnough = $user->balance >= $request->amount;

        return response()->json([
            'success' => $hasEnough,
            'current_balance' => $user->balance,
            'required_amount' => $request->amount,
            'message' => $hasEnough ? 'Достаточно средств' : 'Недостаточно средств'
        ], $hasEnough ? 200 : 402);
    }

    /**
     * Покупка кейса
     */
    public function purchaseCase(Request $request)
    {
        $request->validate([
            'case_id' => 'required|exists:case_items,id'
        ]);

        $user = Auth::user();
        $case = CaseItem::find($request->case_id);
        $casePrice = $case->price;

        if ($user->balance < $casePrice) {
            return response()->json([
                'success' => false,
                'message' => 'Недостаточно средств для покупки кейса'
            ], 402);
        }

        try {
            DB::beginTransaction();

            // Списание средств
            $user->balance -= $casePrice;
            $user->save();

            // Создаем транзакцию
            $transaction = Transaction::create([
                'user_id' => $user->id,
                'amount' => $casePrice,
                'type' => self::TYPE_CASE_PURCHASE,
                'status' => self::STATUS_COMPLETED,
                'description' => 'Покупка кейса: ' . $case->name,
                'balance_before' => $user->balance + $casePrice,
                'balance_after' => $user->balance,
                'completed_at' => now(),
                'metadata' => [
                    'case_id' => $case->id,
                    'case_name' => $case->name
                ]
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'new_balance' => $user->balance,
                'transaction_id' => $transaction->id,
                'message' => 'Кейс успешно приобретен',
                'case' => $case
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Ошибка при покупке кейса: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Открытие кейса
     */
    public function openCase(Request $request)
    {
        $request->validate([
            'case_id' => 'required|exists:case_items,id'
        ]);

        $user = Auth::user();
        $case = CaseItem::with('possibleRewards')->find($request->case_id);

        try {
            DB::beginTransaction();

            // Определяем выигрыш
            $reward = $this->determineReward($case);
            
            // Записываем игру пользователю
            UserGame::create([
                'user_id' => $user->id,
                'game_id' => $reward->id,
                'case_id' => $case->id,
                'acquired_at' => now()
            ]);

            // Создаем транзакцию для награды
            $transaction = Transaction::create([
                'user_id' => $user->id,
                'amount' => $reward->value,
                'type' => self::TYPE_CASE_REWARD,
                'status' => self::STATUS_COMPLETED,
                'description' => 'Выигрыш из кейса: ' . $reward->name,
                'balance_before' => $user->balance,
                'balance_after' => $user->balance,
                'completed_at' => now(),
                'metadata' => [
                    'case_id' => $case->id,
                    'reward_id' => $reward->id,
                    'reward_name' => $reward->name,
                    'reward_value' => $reward->value
                ]
            ]);

            DB::commit();

            return response()->json([
                'success' => true,
                'reward' => $reward,
                'transaction_id' => $transaction->id,
                'message' => 'Поздравляем с выигрышем!'
            ]);

        } catch (\Exception $e) {
            DB::rollBack();
            return response()->json([
                'success' => false,
                'message' => 'Ошибка при открытии кейса: ' . $e->getMessage()
            ], 500);
        }
    }

    /**
     * Определение награды из кейса
     */
    protected function determineReward(CaseItem $case)
    {
        $rewards = $case->possibleRewards;
        $totalWeight = $rewards->sum('probability');
        $random = mt_rand(1, $totalWeight);
        $current = 0;

        foreach ($rewards as $reward) {
            $current += $reward->probability;
            if ($random <= $current) {
                return $reward;
            }
        }

        return $rewards->first(); // fallback
    }

    /**
     * История транзакций
     */
    public function getTransactionHistory(Request $request)
    {
        $transactions = Transaction::where('user_id', Auth::id())
            ->orderBy('created_at', 'desc')
            ->paginate($request->get('per_page', 10));

        return response()->json([
            'success' => true,
            'data' => $transactions
        ]);
    }

    /**
     * Доступные методы оплаты
     */
    protected function getAvailablePaymentMethods()
    {
        return [
            'sbp' => 'СБП',
            'card' => 'Банковская карта',
            'crypto' => 'Криптовалюта',
            'qiwi' => 'QIWI',
            'yoomoney' => 'ЮMoney'
        ];
    }

    /**
     * Название платежного метода
     */
    protected function getPaymentMethodName($method)
    {
        return $this->getAvailablePaymentMethods()[$method] ?? $method;
    }
}