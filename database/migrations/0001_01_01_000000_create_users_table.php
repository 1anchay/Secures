<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        // Создание таблицы users
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('role')->default('user'); // Роль пользователя
            $table->boolean('is_active')->default(true); // Активность пользователя
            $table->decimal('balance', 8, 2)->default(0); // Баланс пользователя
            $table->string('email_verification_token', 40)->nullable()->unique(); // Токен для подтверждения email
            $table->string('phone')->nullable()->unique(); // Номер телефона (если хотите уникальность)
            $table->string('avatar')->nullable(); // Ссылка на аватар
            $table->rememberToken();
            $table->timestamps();
        });

        // Создание таблицы password_reset_tokens
        Schema::create('password_reset_tokens', function (Blueprint $table) {
            $table->string('email')->primary();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
        });

        // Создание таблицы sessions
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->constrained()->onDelete('set null'); // Добавление внешнего ключа
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
