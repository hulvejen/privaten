<?php

use Illuminate\Database\Seeder;

class AbbinfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('abbinfos')->insert([
            'phone' => '30656565',
            'address' => 'Hulvejen 76',
            'zipcode' => '9530',
            'city' => 'Støvring',
            'customerType' => 'private',
            'user_id' => '1',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '0',
        ]);
    }
}
