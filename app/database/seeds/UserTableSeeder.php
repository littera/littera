<?php

class UserTableSeeder extends Seeder
{
	public function run()
	{
		DB::table('users')->truncate();

		User::create([
			'username' => 'root',
			'email' => 'mail@pektop.net',
			'password' => Hash::make('admin'),
			'active' => 1,
		]);
	}
}