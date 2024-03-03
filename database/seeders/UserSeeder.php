<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'role_id' => 1,
            'is_system_admin' => 1,
            'name' => 'Nasrin',
            'email' => 'nasrin@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make(1234),
            'remember_token' => Str::random(),
        ]);
    }
}
