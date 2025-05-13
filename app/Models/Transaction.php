<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Transaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'user_id',
        'amount',
        'type',
        'status',
        'payment_method',
        'description',
        'balance_before',
        'balance_after',
        'completed_at'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'balance_before' => 'decimal:2',
        'balance_after' => 'decimal:2',
        'completed_at' => 'datetime'
    ];

    // Отношения
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    // Статусы транзакций
    public const STATUS_PENDING = 'pending';
    public const STATUS_COMPLETED = 'completed';
    public const STATUS_FAILED = 'failed';
    public const STATUS_CANCELLED = 'cancelled';

    // Типы транзакций
    public const TYPE_DEPOSIT = 'deposit';
    public const TYPE_WITHDRAWAL = 'withdrawal';
    public const TYPE_PAYMENT = 'payment';
    public const TYPE_REFUND = 'refund';

    // Методы оплаты
    public const METHOD_SBP = 'sbp';
    public const METHOD_CARD = 'card';
    public const METHOD_CRYPTO = 'crypto';
    public const METHOD_QIWI = 'qiwi';
    public const METHOD_YOOMONEY = 'yoomoney';

    // Скоуп для фильтрации транзакций по пользователю
    public function scopeForUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }
}
