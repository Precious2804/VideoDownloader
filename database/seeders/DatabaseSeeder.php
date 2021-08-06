<?php

namespace Database\Seeders;

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
        // \App\Models\User::factory(10)->create();
        $user1 = \App\Models\User::create([
            'unique_id'=>'123456',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '08100000000',
            'isAdmin'=>'1',
            'password' => Hash::make('123456'),
        ]);
    }
}