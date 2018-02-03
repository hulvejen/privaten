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
            'handy_id' => '1',
            'phone' => '30656565',
            'address' => 'Håndværkervej 10',
            'zipcode' => '9760',
            'city' => 'Brovst',
		]);
    }
}
