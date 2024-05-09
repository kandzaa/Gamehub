<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Game;

class GameController extends Controller
{
    public function browse()
    {
        $games = Game::all(); 

        return view('games.browse', ['games' => $games]); 
    }

    public function show(Game $game)
    {
        return view('games.show', ['game' => $game]);
    }
}

