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

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'description' => 'required',
        ]);

        $imageName = time().'.'.$request->image->extension();  
        $request->image->move(public_path('images'), $imageName);

        $game = new Game;
        $game->name = $request->name;
        $game->image = '/images/'.$imageName;
        $game->description = $request->description;
        $game->save();

        return redirect()->route('games.browse');
    }

    public function destroy(Game $game)
    {
    $game->delete();

    return redirect()->route('games.browse');
    }

}
