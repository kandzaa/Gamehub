<?php

namespace Database\Seeders;

use App\Models\Game;
use App\Models\Comment;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
{
    Game::factory()
        ->count(10)
        ->has(Comment::factory()->count(3))
        ->create();
}
}
