<?php
// database/migrations/2025_04_06_000001_create_chat_messages_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChatMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
{
    Schema::create('chat_messages', function (Blueprint $table) {
        $table->id();
        $table->text('message');
        $table->enum('sender', ['user', 'admin'])->default('user'); // Храним кто отправил сообщение
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('chat_messages');
}

}
