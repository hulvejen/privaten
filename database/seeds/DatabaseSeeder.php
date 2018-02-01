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
             AbbinfoSeeder::class,
             AdminsSeeder::class,
			 HandysSeeder::class,
			 HandymenSeeder::class,
             VisitsSeeder::class,

			 ]);		 
    }
}
