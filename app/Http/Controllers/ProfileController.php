<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $user = Auth::user();
        
        Log::debug('Profile edit accessed', [
            'user_id' => $user->id,
            'ip' => request()->ip()
        ]);
    
        return view('profile.edit', [
            'user' => $user
        ]);
    }
    public function updateAvatar(Request $request)
    {
        $request->validate([
            'avatar' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        try {
            $user = Auth::user();
            $path = $request->file('avatar')->store('profile-photos', 'public');
            
            // Удаляем старое фото если есть
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
            }
            
            $user->update(['profile_photo_path' => $path]);
    
            return response()->json([
                'success' => true,
                'message' => 'Аватар успешно обновлён',
                'avatar_url' => asset('storage/'.$path)
            ]);
    
        } catch (\Exception $e) {
            Log::error('Avatar upload error: '.$e->getMessage());
            return response()->json([
                'success' => false,
                'message' => 'Ошибка при загрузке аватара'
            ], 500);
        }
    }
    public function update(Request $request)
    {
        $user = Auth::user();

        $validator = Validator::make($request->all(), [
            'name' => ['required', 'string', 'max:255'],
            'email' => [
                'required',
                'email',
                'max:255',
                Rule::unique('users')->ignore($user->id)
            ],
            'profile_photo' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048'],
            'current_password' => ['required_with:password'],
            'password' => ['nullable', 'confirmed', 'min:12', 'different:current_password'],
        ], [
            'current_password.required_with' => 'Текущий пароль обязателен при изменении пароля',
            'password.different' => 'Новый пароль должен отличаться от текущего',
        ]);

        if ($validator->fails()) {
            return redirect()
                ->route('profile.edit')
                ->withErrors($validator)
                ->withInput();
        }

        try {
            $data = $request->only(['name', 'email']);

            // Проверка и обновление пароля
            if ($request->filled('password')) {
                if (!Hash::check($request->current_password, $user->password)) {
                    return back()->withErrors(['current_password' => 'Неверный текущий пароль']);
                }
                $data['password'] = Hash::make($request->password);
            }

            // Обновление фото профиля
            if ($request->hasFile('profile_photo')) {
                $path = $request->file('profile_photo')->store('profile-photos', 'public');
                
                // Удаляем старое фото
                if ($user->profile_photo_path) {
                    Storage::disk('public')->delete($user->profile_photo_path);
                }
                
                $data['profile_photo_path'] = $path;
            }

            $user->update($data);

            return redirect()
                ->route('profile.edit')
                ->with('status', 'Профиль успешно обновлен!');

        } catch (\Exception $e) {
            Log::error('Profile update error: ' . $e->getMessage());
            
            return redirect()
                ->route('profile.edit')
                ->with('error', 'Произошла ошибка при обновлении профиля');
        }
    }

    public function removeAvatar()
    {
        $user = Auth::user();

        try {
            if ($user->profile_photo_path) {
                Storage::disk('public')->delete($user->profile_photo_path);
                $user->update(['profile_photo_path' => null]);
            }

            return response()->json(['success' => true]);

        } catch (\Exception $e) {
            Log::error('Avatar remove error: ' . $e->getMessage());
            return response()->json(['error' => 'Ошибка при удалении аватара'], 500);
        }
    }
}