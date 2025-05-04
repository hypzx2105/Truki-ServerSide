<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Portfolio;

class PortfolioSeeder extends Seeder
{
    public function run(): void
    {
        Portfolio::insert([
            [
                'title' => 'Creative Writing Showcase',
                'content' => 'A collection of short stories and poems I wrote over the last year. Feedback is welcome!',
                'media_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Web Design Samples',
                'content' => 'Some examples of responsive websites I built using HTML, CSS, and Tailwind.',
                'media_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '3D Art Portfolio',
                'content' => 'Blender projects and renders I created as part of my digital art practice.',
                'media_url' => null,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
