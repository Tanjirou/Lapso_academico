<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MentionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('subjects')->insert([
            'subjectid' => 1,
            'academic_curriculaid' => 1,
            'name' => '',
            'pre_req' => '',
            'post_req' => '',
            'status' => 'A',
        ]);

    }
}
