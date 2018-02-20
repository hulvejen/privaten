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

        DB::table('handies')->insert([
            'name' => 'handy 1',
            'email' => 'handy1@handy.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('handies')->insert([
            'name' => 'handy 2',
            'email' => 'handy2@handy.dk',
            'password' => Hash::make('password'),
        ]);
    }
}
