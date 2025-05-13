<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChatMessage extends Model
{
    use HasFactory;

    // Защищаем атрибуты от массового присваивания
    protected $fillable = ['message', 'sender'];

    // Определяем, что таблица должна использовать стандартные временные метки (timestamps)
    public $timestamps = true;

    // Убедимся, что атрибуты sender могут быть только 'user' или 'admin'
    const SENDER_USER = 'user';
    const SENDER_ADMIN = 'admin';

    /**
     * Устанавливаем значение для отправителя
     *
     * @param string $sender
     */
    public function setSenderAttribute($sender)
    {
        if (in_array($sender, [self::SENDER_USER, self::SENDER_ADMIN])) {
            $this->attributes['sender'] = $sender;
        } else {
            $this->attributes['sender'] = self::SENDER_USER; // По умолчанию, если не указано
        }
    }

    /**
     * Получаем сообщения от пользователя или администратора.
     * 
     * @param string $sender
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeBySender($query, $sender)
    {
        return $query->where('sender', $sender);
    }
}
