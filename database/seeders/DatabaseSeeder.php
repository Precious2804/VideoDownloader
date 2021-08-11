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
            'unique_id'=>'1a2b3c4d5e6',
            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'phone' => '08100000000',
            'isAdmin'=>'1',
            'user_type'=>'Super Admin',
            'password' => Hash::make('123456'),
        ]);

        $setting1 = \App\Models\Settings::create([
            'isAdmin'=>'1',
            'whatsapp_promotion'=>'https://web.whatsapp.com',
            'telegram_promotion'=>'https://telegram.com',
            'facebook'=>'https://facebook.com',
            'whatsapp'=>'https://web.whatsapp.com',
            'instagram'=>'https://instagram.com',
            'email'=>'https://email.com',
            'telegram'=>'https://telegram.com',
            'uploader_note'=>"Uploader's Note: All Movies and Series must be Watched from the latest version of VLC Media player or any advanced player, else it would be blank video with just sound."
        ]);
    }
}
