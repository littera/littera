<?php

use App\Models\User;
use Carbon\Carbon;
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
            'email' => 'mail@pektop.net',
            'password' => bcrypt('adminPassword'),
            'is_active' => 1,
            'is_admin' => 1,
            'activated_at' => new Carbon,
        ]);
    }
}
