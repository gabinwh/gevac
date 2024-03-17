<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::firstOrCreate([
             'name' => 'Adm',
             'email' => 'adm@test.com',
             'is_admin' => true,
             'password' => Hash::make('password')
         ]);
    }
}
