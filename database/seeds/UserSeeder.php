<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Steen Hansen',
            'email' => 'sh@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Tommy Gregersen',
            'email' => 'tg@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Jette Johansen',
            'email' => 'jj@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Mina Olsen',
            'email' => 'mo@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Lisette Klein',
            'email' => 'lk@gmail.dk',
            'password' => Hash::make('password'),
        ]);
        DB::table('users')->insert([
            'name' => 'Tue Hansen',
            'email' => 'th@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rikke Gregersen',
            'email' => 'rg@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ole Johansen',
            'email' => 'oj@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'John Olsen',
            'email' => 'jo@gmail.dk',
            'password' => Hash::make('password'),
        ]);

        DB::table('users')->insert([
            'name' => 'Ann Klein',
            'email' => 'ak@gmail.dk',
            'password' => Hash::make('password'),
        ]);
    }
}
