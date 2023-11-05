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

        user::factory(5)->create();

        user::create([

            'name' => 'Iqbal',
            'email' => 'jetman@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('1sampai8'),
        ]);
    }
}
