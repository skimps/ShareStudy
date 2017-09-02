<?php

use Illuminate\Database\Seeder;

class TimetableTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('timetables')->insert([
            'class_id' => 1,
            'day' => 1,
            'one' => str_random(6),
            'two' => str_random(6),
            'three' => str_random(6),
            'four' => str_random(6),
            'five' => str_random(6),
            'six' => str_random(6),
        ]);
    }
}
