<?php

namespace Database\Seeders;

use App\Models\Alumni;
use App\Models\Hapalan;
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
        User::create([
            'nama' => 'Admin',
            'username' => 'admin',
            'role' => 'Admin',
            'status' => '1',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('password')
        ]);

        $alumni = User::create([
            'nama' => 'Dede Revanza',
            'username' => '123456',
            'role' => 'Alumni',
            'status' => '0',
            'email' => 'dederevanza@gmail.com',
            'password' => Hash::make('password')
        ]);

        Alumni::create([
            'user_id' => $alumni->id,
            'nisn' => '123456'
        ]);

        Hapalan::create([
            'nisn' => '123456'
        ]);
    }
}
