<?php

use Illuminate\Database\Seeder;

class TaskSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tasks')->insert([
            'user_id' => '1',
            'visit_id' => '1',
            'task' => 'Rense tagrende',
            'handy_id' => '1',
        ]);

        DB::table('tasks')->insert([
            'user_id' => '1',
            'visit_id' => '1',
            'task' => 'Klippe græs',
            'handy_id' => '1',
        ]);

        DB::table('tasks')->insert([
            'user_id' => '2',
            'visit_id' => '3',
            'task' => 'Checke tag',
            'handy_id' => '1',
        ]);

        DB::table('tasks')->insert([
            'user_id' => '3',
            'visit_id' => '1',
            'task' => 'Rense tagrende',
            'handy_id' => '1',
        ]);

        DB::table('tasks')->insert([
            'user_id' => '3',
            'visit_id' => '1',
            'task' => 'Klippe græs',
            'handy_id' => '1',
        ]);

        DB::table('tasks')->insert([
            'user_id' => '4',
            'visit_id' => '3',
            'task' => 'Checke tag',
            'handy_id' => '1',
        ]);
    }
}

