<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class HandymenSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('handymen')->insert([
			'name' => 'John Doe',
		]);
    }
}
