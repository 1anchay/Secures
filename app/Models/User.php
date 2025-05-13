<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable implements MustVerifyEmail
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role',
        'is_active',
        'balance',
        'last_login_at',
        'last_login_ip',
        'email_verification_token',
        'phone',
        'avatar',
    'profile_photo_path'
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'email_verification_token',  // Хорошо скрыто, так как токен подтверждения должен быть скрыт
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'last_login_at' => 'datetime',
        'is_active' => 'boolean',
        'balance' => 'decimal:2',  // Если у тебя есть дробные значения для баланса, это ок
    ];

    /**
     * Default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'is_active' => true,  // По умолчанию пользователь активен
        'balance' => 0,       // Баланс по умолчанию 0
        'role' => 'user',     // Роль по умолчанию — "user"
    ];

    /**
     * Check if user has admin role.
     */
    public function isAdmin(): bool
    {
        return $this->role === 'admin';
    }

    /**
     * Check if user is active.
     */
    public function isActive(): bool
    {
        return $this->is_active;
    }

    /**
     * Get the user's avatar URL.
     */
    public function getAvatarUrlAttribute(): string
    {
        return $this->avatar 
            ? asset('storage/avatars/'.$this->avatar)
            : asset('images/default-avatar.png');
    }

    /**
     * Scope for active users.
     */
    public function scopeActive($query)
    {
        return $query->where('is_active', true);
    }

    /**
     * Scope for admins.
     */
    public function scopeAdmins($query)
    {
        return $query->where('role', 'admin');
    }

    /**
     * Encrypt password when setting it.
     */
    public function setPasswordAttribute($value): void
    {
        // Проверим, если переданное значение пароля не пустое
        if (!empty($value)) {
            $this->attributes['password'] = bcrypt($value);
        }
    }

  
    
}
