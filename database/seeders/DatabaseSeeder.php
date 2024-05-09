<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
       // Call the User factory to create 50 users
    \App\Models\User::factory(5)->create();

    // Call the Game factory to create 50 games
    \App\Models\Game::factory(5)->create();

    // Call the Comment factory to create 50 comments
    \App\Models\Comment::factory(5)->create();

    // Call the GameSeeder
    $this->call([
        GameSeeder::class,
    ]);

    // Call the NewsSeeder
    $this->call([
        NewsSeeder::class,
    ]);
    }
}
