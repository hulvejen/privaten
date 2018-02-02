<?php

use Illuminate\Database\Seeder;

class HandiesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handies')->insert([
            'name' => 'handy',
            'email' => 'handy@handy.dk',
            'password' => Hash::make('password'),
        ]);
    }
}
