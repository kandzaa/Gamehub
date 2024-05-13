<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GameController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::delete('/news/{news}', [NewsController::class, 'destroy'])
    ->middleware(['auth', 'verified'])
    ->name('news.destroy');

Route::post('/news', [NewsController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('news.store');

Route::get('/admin', function () {
    return view('admin');
    })->middleware(['auth', 'verified'])
    ->name('admin');

Route::post('/about', [AboutController::class, 'update'])
    ->middleware(['auth', 'verified'])
    ->name('about.update');

Route::get('/about', [AboutController::class, 'show'])
    ->middleware(['auth', 'verified'])
    ->name('about');


Route::get('/addnews', function () {
    return view('addnews');
    })->middleware(['auth', 'verified'])
    ->name('addnews');

Route::get('/addgame', function () {
    return view('addgame');
    })->middleware(['auth', 'verified'])
    ->name('addgame');

Route::get('/games/{game}', [GameController::class, 'show'])
    ->name('games.show');

Route::delete('/games/{game}', [GameController::class, 'destroy'])
    ->middleware(['auth', 'verified', 'can:admin'])
    ->name('games.destroy');


Route::get('/changeabout', function () {
    return view('changeabout');
    })->middleware(['auth', 'verified'])
    ->name('changeabout');

Route::get('/browse', [GameController::class, 'browse'])
    ->middleware(['auth', 'verified'])
    ->name('games.browse');

Route::post('/games', [GameController::class, 'store'])
    ->middleware(['auth', 'verified'])
    ->name('games.store');

Route::post('/comments', [CommentController::class, 'store'])->name('comments.store');

Route::get('/home', [HomeController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('home');

Route::post('/home', [HomeController::class, 'store'])
    ->middleware(['auth', 'verified']);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
