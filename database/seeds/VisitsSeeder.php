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
            'agreement' => 'checke undertag',
            'visitdate' => '2018_12_01',
            'visittime' => '07:30',
            'done' => 1,
		]);

        DB::table('visits')->insert([
            'handymen_id' => '1',
            'user_id' => '1',
            'handy_id' => '1',
            'agreement' => 'klippe græs',
            'visitdate' => '2017_12_02',
            'visittime' => '07:30',
            'done' => 1,
        ]);

        DB::table('visits')->insert([
            'handymen_id' => '1',
            'user_id' => '2',
            'handy_id' => '1',
            'agreement' => 'Rense tagrende',
            'visitdate' => '2017_12_03',
            'visittime' => '07:30',
            'done' => 1,
        ]);

        DB::table('visits')->insert([
            'handymen_id' => '2',
            'user_id' => '1',
            'handy_id' => '2',
            'agreement' => 'Støvsuge',
            'visitdate' => '2017_12_04',
            'visittime' => '07:30',
            'done' => 0,
        ]);
    }
}
