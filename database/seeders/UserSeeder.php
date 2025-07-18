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
                'name' => 'Test SuperAdmin', 'username' => 'SuperAdmin', 'role' => 'superadmin', 'email' => 'superadmintest@ncs.test', 'password' => bcrypt('SuperAdmin@1234567')
            ],

            [
                'name' => 'Test Admin', 'username' => 'Admin', 'role' => 'admin', 'email' => 'admintest@ncs.test', 'password' => bcrypt('Admin@1234567')
            ],

            [
                'name' => 'Test Staff', 'username' => 'Staff', 'role' => 'staff', 'email' => 'stafftest@ncs.test', 'password' => bcrypt('Staff@1234567')
            ],
        ]);
    }
}
