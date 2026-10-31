<?php

namespace Database\Seeders;

use App\Models\Customer;
use Illuminate\Database\Seeder;

class CustomerSeeder extends Seeder
{
    public function run(): void
    {
        $customers = [
            ['full_name' => 'Juan Dela Cruz',     'email' => 'juan.delacruz@example.com',   'phone' => '0917-123-4567'],
            ['full_name' => 'Maria Santos',       'email' => 'maria.santos@example.com',    'phone' => '0918-234-5678'],
            ['full_name' => 'Jose Reyes',         'email' => 'jose.reyes@example.com',      'phone' => '0920-345-6789'],
            ['full_name' => 'Ana Villanueva',     'email' => 'ana.villanueva@example.com',  'phone' => '0921-456-7890'],
            ['full_name' => 'Carlo Mendoza',      'email' => 'carlo.mendoza@example.com',   'phone' => '0922-567-8901'],
            ['full_name' => 'Isabel Garcia',      'email' => 'isabel.garcia@example.com',   'phone' => '0923-678-9012'],
        ];

        foreach ($customers as $customer) {
            Customer::create($customer);
        }
    }
}
