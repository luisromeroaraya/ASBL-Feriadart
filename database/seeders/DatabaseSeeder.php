<?php

namespace Database\Seeders;

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
        $admin = User::create([
            'name'=> 'Admin',
            'username'=> 'admin',
            'email' => 'admin@mail.com',
            'password' => Hash::make('password')
        ]);
        
        User::factory(10)->create();
    }
}
