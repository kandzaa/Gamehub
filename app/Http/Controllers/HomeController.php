<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;

class HomeController extends Controller
{
    public function index()
    {
        // Fetch news articles in descending order of creation
        $news = News::latest()->get();
        
        // Pass the $news variable to the view
        return view('home', compact('news'));
    }
}
