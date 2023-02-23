<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// for characters
Route::get('/characters', function () {
    return view('characters');
})->name('characters');

// for comics
Route::get('/', function () {
   $comics = config('comics');
   $links = config('links');
   $linksfooter = config('linksfooter');

    return view('comics', compact('comics', 'links', 'linksfooter'));
})->name('comics');

// for comics details
Route::get('/comics/{index}', function ($index) {
    $comics = config('comics');
 
     return view('comic', ['comic' => $comics[$index]]);
 })->name('comic');

// for movies
Route::get('/movies', function () {
    return view('movies');
})->name('movies');

// for tv
Route::get('/tv', function () {
    return view('tv');
})->name('tv');

// for games
Route::get('/games', function () {
    return view('games');
})->name('games');

// for collectibles
Route::get('/collectibles', function () {
    return view('collectibles');
})->name('collectibles');

// for videos
Route::get('/videos', function () {
    return view('videos');
})->name('videos');

// for fans
Route::get('/fans', function () {
    return view('fans');
})->name('fans');

// for news
Route::get('/news', function () {
    return view('news');
})->name('news');

// for shop
Route::get('/shop', function () {
    return view('shop');
})->name('shop');
