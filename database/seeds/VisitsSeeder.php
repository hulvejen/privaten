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
		]);
    }
}
