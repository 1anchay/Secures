@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h4>История транзакций</h4>
                    <div class="float-right">
                        <span class="badge badge-primary">Текущий баланс: {{ Auth::user()->balance }} ₽</span>
                    </div>
                </div>

                <div class="card-body">
                    @if($transactions->isEmpty())
                        <div class="alert alert-info">У вас пока нет транзакций</div>
                    @else
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>Дата</th>
                                        <th>Тип</th>
                                        <th>Сумма</th>
                                        <th>Статус</th>
                                        <th>Описание</th>
                                        <th>Баланс</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($transactions as $transaction)
                                    <tr>
                                        <td>{{ $transaction->created_at->format('d.m.Y H:i') }}</td>
                                        <td>
                                            @if($transaction->type === 'deposit')
                                                <span class="badge badge-success">Пополнение</span>
                                            @else
                                                <span class="badge badge-warning">Списание</span>
                                            @endif
                                        </td>
                                        <td class="{{ $transaction->type === 'deposit' ? 'text-success' : 'text-danger' }}">
                                            {{ $transaction->type === 'deposit' ? '+' : '-' }}{{ $transaction->amount }} ₽
                                        </td>
                                        <td>
                                            @if($transaction->status === 'completed')
                                                <span class="badge badge-success">Завершено</span>
                                            @elseif($transaction->status === 'pending')
                                                <span class="badge badge-secondary">В обработке</span>
                                            @else
                                                <span class="badge badge-danger">{{ $transaction->status }}</span>
                                            @endif
                                        </td>
                                        <td>{{ $transaction->description ?? '—' }}</td>
                                        <td>{{ $transaction->balance_after }} ₽</td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        <div class="d-flex justify-content-center">
                            {{ $transactions->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection