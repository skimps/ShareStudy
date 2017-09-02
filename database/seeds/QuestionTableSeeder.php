<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('questions')->insert([
            'note_id' => 1,
            'user_id' => 1,
            'context' => str_random(50)
        ]);
    }
}
