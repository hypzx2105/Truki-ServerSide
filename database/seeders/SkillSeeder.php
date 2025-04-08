<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
    public function run()
    {
        DB::table('skills')->insert([
            ['name' => 'Guitar'],
            ['name' => 'Painting'],
            ['name' => 'Coding'],
            ['name' => 'Photography'],
            ['name' => 'Public Speaking'],
            ['name' => 'UI Design'],
        ]);
    }
}

