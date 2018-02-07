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

        DB::table('abbinfos')->insert([
            'phone' => '30555555',
            'address' => 'Fjerretslevgade 34',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '2',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '0',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30555555',
            'address' => 'Runden 4',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '3',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '0',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30555555',
            'address' => 'Algade 95',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '4',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '1',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30444444',
            'address' => 'Fjordvej 3',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '5',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '1',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30650001',
            'address' => 'Hulvejen 21',
            'zipcode' => '9530',
            'city' => 'Støvring',
            'customerType' => 'private',
            'user_id' => '6',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '0',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30555522',
            'address' => 'Fjerretslevgade 22',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '7',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '0',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30550012',
            'address' => 'Runden 23',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '8',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '1',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '30551133',
            'address' => 'Algade 924',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '9',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '1',
        ]);

        DB::table('abbinfos')->insert([
            'phone' => '3044463',
            'address' => 'Fjordvej 325',
            'zipcode' => '9460',
            'city' => 'Brovst',
            'customerType' => 'private',
            'user_id' => '10',
            'abb_date' => '2018_01_01',
            'time' => '00:00:00',
            'next_scheduled_date' => '2001_01_01',
            'payed' => '1',
        ]);
    }
}
