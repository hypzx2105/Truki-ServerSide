<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BadgeSeeder extends Seeder
{
    public function run()
    {
        DB::table('badges')->insert([
            ['name' => 'First Trade', 'description' => 'Completed your first skill swap!'],
            ['name' => 'Portfolio Pro', 'description' => 'Posted 5 portfolios.'],
            ['name' => 'Helpful Mentor', 'description' => 'Helped someone learn a skill.'],
        ]);
    }
}

