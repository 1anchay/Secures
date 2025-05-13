<!-- resources/views/admin/chat.blade.php -->

@extends('layouts.app')

@section('content')
  <div class="container mx-auto py-8">
    <h2 class="text-3xl font-semibold text-center mb-6">Чат с пользователями</h2>

    <div class="bg-white p-6 rounded-lg shadow-lg">
      <div id="chatMessages" class="h-80 overflow-y-scroll mb-4 border border-gray-300 p-4 rounded-lg bg-gray-50">
        @foreach($messages as $message)
          <div class="mb-2">
            <strong>{{ ucfirst($message->sender) }}:</strong>
            <p>{{ $message->message }}</p>
            <small class="text-gray-500">{{ $message->created_at }}</small>
          </div>
        @endforeach
      </div>

      <form action="{{ route('admin.chat.send') }}" method="POST">
        @csrf
        <textarea name="message" class="w-full p-2 border border-gray-300 rounded-md" placeholder="Ваш ответ..." rows="3"></textarea>
        <button type="submit" class="mt-2 w-full bg-yellow-400 text-white p-2 rounded-md hover:bg-yellow-500">Отправить</button>
      </form>
    </div>
  </div>
@endsection
