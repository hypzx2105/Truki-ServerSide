<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SkillSeeder extends Seeder
{
   // database/seeders/SkillSeeder.php
public function run()
{
    $skills = [
        'Guitar', 
        'Painting', 
        'Coding', 
        'Photography', 
        'Public Speaking', 
        'UI Design'
    ];

    foreach ($skills as $skill) {
        \App\Models\Skill::firstOrCreate(['name' => $skill]);
    }
}
}
