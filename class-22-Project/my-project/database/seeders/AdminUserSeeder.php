<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name'     => 'User',
                'email'    => 'user@gmail.com',
                'password' => Hash::make('12345'),
            ],
        ];

        foreach ($users as $user) {
            User::query()->create($user);
        }
    }
}
