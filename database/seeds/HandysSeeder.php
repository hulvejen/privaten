<?php

use Illuminate\Database\Seeder;

class HandysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handys')->insert([
            'name' => 'handy',
            'email' => 'handy@handy.dk',
            'password' => Hash::make('password'),
        ]);
    }
}
