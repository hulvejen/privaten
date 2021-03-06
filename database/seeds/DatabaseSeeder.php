<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         $this->call([
             UserSeeder::class,
             HandiesSeeder::class,
             AbbinfoSeeder::class,
             AdminsSeeder::class,
			 HandymenSeeder::class,
             VisitsSeeder::class,
             TaskSeeder::class,
			 ]);		 
    }
}
