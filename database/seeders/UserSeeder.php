<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        $users = [
            ['username' => 'admin',    'full_name' => 'System Administrator'],
            ['username' => 'cashier1', 'full_name' => 'Liza Ramirez'],
            ['username' => 'cashier2', 'full_name' => 'Miguel Torres'],
            ['username' => 'manager',  'full_name' => 'Patricia Lim'],
            ['username' => 'stockman', 'full_name' => 'Rafael Bautista'],
            ['username' => 'auditor',  'full_name' => 'Elena Aquino'],
        ];

        foreach ($users as $user) {
            User::create($user);
        }
    }
}
