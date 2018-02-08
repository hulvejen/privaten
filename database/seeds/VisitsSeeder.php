<?php

use Illuminate\Database\Seeder;

class VisitsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('visits')->insert([
			'handymen_id' => '1',
            'user_id' => '1',
            'handy_id' => '1',
            'visitdate' => '2018_12_01',
            'done' => 1,
		]);

        DB::table('visits')->insert([
            'handymen_id' => '1',
            'user_id' => '1',
            'handy_id' => '1',
            'visitdate' => '2017_12_02',
            'done' => 1,
        ]);

        DB::table('visits')->insert([
            'handymen_id' => '1',
            'user_id' => '2',
            'handy_id' => '1',
            'visitdate' => '2017_12_03',
            'done' => 1,
        ]);

        DB::table('visits')->insert([
            'handymen_id' => '1',
            'user_id' => '1',
            'handy_id' => '1',
            'visitdate' => '2017_12_04',
            'done' => 0,
        ]);
    }
}
