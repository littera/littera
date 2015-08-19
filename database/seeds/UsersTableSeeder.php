<?php

use App\Models\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the users table seed
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'login' => 'admin',
            'email' => 'mail@getlittera.com',
            'role_id' => 1,
            'password' => bcrypt('adminPassword'),
        ]);
    }
}
