<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutController extends Controller
{
    public function show()
    {
        $about = About::first();
    
        if ($about === null) {
            $about = new About;
            $about->title = 'In progress...';
        }
    
        return view('about', ['about' => $about]);
    }
    

    public function update(Request $request)
    {
        $request->validate([
            'title' => 'required',
        ]);

        $about = About::first();

        if ($about === null) {
            $about = new About;
        }

        $about->title = $request->title;
        $about->save();

        return redirect()->route('about');
    }
}
