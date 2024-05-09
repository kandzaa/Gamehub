<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create dummy news articles
        News::create([
            'title' => 'Sample News 1',
            'text' => 'This is the first sample news article.',
            'image' => 'sample1.jpg',
        ]);

        News::create([
            'title' => 'Sample News 2',
            'text' => 'This is the second sample news article.',
            'image' => 'sample2.jpg',
        ]);

        // Add more news articles as needed
    }
}
