<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = User::insert([
            [
                'name' => 'SuperAdmin', 'username' => 'superadmin', 'role' => 'superadmin', 'email' => 'superadmin@ncs.test', 'password' => bcrypt('SuperAdmin@1234567')
            ],

            [
                'name' => 'Admin', 'username' => 'admin', 'role' => 'admin', 'email' => 'admin@ncs.test', 'password' => bcrypt('Admin@1234567')
            ],

            [
                'name' => 'Manager', 'username' => 'manager', 'role' => 'manager', 'email' => 'manager@ncs.test', 'password' => bcrypt('Manager@1234567')
            ],

            [
                'name' => 'Staff', 'username' => 'staff', 'role' => 'staff', 'email' => 'staff@ncs.test', 'password' => bcrypt('Staff@1234567')
            ],
        ]);
    }
}
