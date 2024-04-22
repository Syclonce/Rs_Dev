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
        $superadmin = User::create(
            [
                'name' => 'superadmin',
                'username' => 'superadmin',
                'email' => 'superadmin@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $superadmin->assignRole('Super-Admin');

        $admin = User::create(
            [
                'name' => 'admin',
                'username' => 'admin',
                'email' => 'admin@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $admin->assignRole('Admin');

        $user = User::create(
            [
                'name' => 'user',
                'username' => 'user',
                'email' => 'user@tes.tes',
                'password' => bcrypt('123123123')
            ]
        );
        $user->assignRole('User');
    }
}
