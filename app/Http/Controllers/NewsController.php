<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class NewsController extends Controller
{
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'text' => 'required',
  
        ]);


        $news = new News;
        $news->title = $request->title;
        $news->text = $request->text;

        $news->save();


        return redirect()->route('home');
    }

    public function destroy(News $news)
{
    $news->delete();

    return redirect()->route('home');
}

}
