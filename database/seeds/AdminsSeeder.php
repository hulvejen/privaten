<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\db;
use Illuminate\Support\Facades\Hash;

class AdminsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('admins')->insert([
			'name' => 'admin',
            'email' => 'admin@admin.dk',
            'password' => Hash::make('password'),
		]);
    }
}
