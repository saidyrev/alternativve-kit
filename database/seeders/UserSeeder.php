<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
                // Membuat superadmin
                User::create([
                    'name' => 'Super Admin',
                    'email' => 'superadmin@example.com',
                    'password' => Hash::make('password123'), // Gantilah dengan password yang aman
                    'role' => 'superadmin', // Pastikan kolom role ada di tabel users
                ]);
        
                // Anda bisa menambahkan pengguna lain di sini jika diperlukan
                User::create([
                    'name' => 'Admin User',
                    'email' => 'admin@example.com',
                    'password' => Hash::make('password123'),
                    'role' => 'admin',
                ]);
        
                User::create([
                    'name' => 'Regular User',
                    'email' => 'user@example.com',
                    'password' => Hash::make('password123'),
                    'role' => 'user',
                ]);
    }
}
