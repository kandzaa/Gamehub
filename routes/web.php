<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/about', function () {
    return view('about');
})
->middleware(['auth', 'verified'])
->name('about');

Route::get('/browse', [GameController::class, 'browse'])
    ->middleware(['auth', 'verified'])
    ->name('games.browse');

    Route::get('/games/{game}', [GameController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('games.show');

Route::post('/comments', [CommentController::class, 
'store'])->name('comments.store');

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
