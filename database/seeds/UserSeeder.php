<?php

use Illuminate\Database\Seeder;

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
            'email' => 'hulvejen76@gmail.com',
            'password' => '$10$kcjnEgo9hbczAqBmxjZz3O8dmkZm3cVcdp.DWEaxZ3j5/UAKHwjZm',
        ]);
    }
}
