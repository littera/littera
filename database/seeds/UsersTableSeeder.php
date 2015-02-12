<?php

use App\Models\User;

class UsersTableSeeder extends Seeder
{

    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'username' => 'root',
            'email' => 'mail@pektop.net',
            'password' => Hash::make('admin123'),
            'active' => 1,
        ]);
    }

}
