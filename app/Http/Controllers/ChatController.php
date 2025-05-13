<?php

namespace App\Http\Controllers;

use App\Models\ChatMessage;
use Illuminate\Http\Request;

class ChatController extends Controller
{
    // Метод для отправки сообщения от пользователя
    public function sendMessage(Request $request)
    {
        // Валидация
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        // Создание нового сообщения
        ChatMessage::create([
            'message' => $request->message,
            'sender' => 'user', // Сообщение от пользователя
        ]);

        return response()->json(['status' => 'success']);
    }

    // Метод для получения всех сообщений для пользователя
    public function getMessages(Request $request)
    {
        $messages = ChatMessage::orderBy('created_at', 'desc')->take(20)->get(); // Получаем последние 20 сообщений

        return response()->json($messages); // Отправляем сообщения в формате JSON
    }

    // Метод для получения всех сообщений для администратора
    public function getAdminMessages()
    {
        $messages = ChatMessage::orderBy('created_at', 'asc')->get(); // Получаем все сообщения
        return view('admin.chat', compact('messages')); // Отправляем в админский вид
    }

    // Метод для отправки сообщения администратора
    public function sendAdminMessage(Request $request)
    {
        $request->validate([
            'message' => 'required|string|max:500',
        ]);

        ChatMessage::create([
            'message' => $request->message,
            'sender' => 'admin', // Сообщение от администратора
        ]);

        return response()->json(['status' => 'success']);
    }
}
