<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserBalanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        \App\Models\User::all()->each(function ($user) {
            $user->update([
                'balance' => rand(1000, 100000) / 100 // Случайные значения от 10.00 до 1000.00
            ]);
        });
    }
}
