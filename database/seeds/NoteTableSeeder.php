<?php

use Illuminate\Database\Seeder;

class NoteTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('notes')->insert([
            'class_id' => 1,
            'text' => str_random(50),
        ]);
    }
}
