<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = [
            [
                'name' => 'Admin',
                'email' => 'admin@example.com',
                'password' => bcrypt('password'),
                'is_admin' => true
            ],
            [
                'name' => 'User',
                'email' => 'user@example.com',
                'password' => bcrypt('password'),
                'is_admin' => false
            ]
        ];
        foreach($users as $user)
        {
            User::create($user);
        }
    }
}
