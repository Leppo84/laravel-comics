<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $arrComics = config('comics');
    return view('home', [
        'arrComics' => $arrComics,
    ]);
})->name('home');

Route::get('/character', function () {
    return view('character', [
    ]);
})->name('character');

Route::get('/comics', function () {
    $arrComics = config('comics');
    return view('comics', [
        'arrComics' => $arrComics,
    ]);
})->name('comics');

Route::get('/movies', function () {
    return view('movies', [
    ]);
})->name('movies');

Route::get('/tv', function () {
    return view('tv', [
    ]);
})->name('tv');

Route::get('/games', function () {
    return view('games', [
    ]);
})->name('games');

Route::get('/collectibles', function () {
    return view('collectibles', [
    ]);
})->name('collectibles');

Route::get('/videos', function () {
    return view('videos', [
    ]);
})->name('videos');

Route::get('/fans', function () {
    return view('fans', [
    ]);
})->name('fans');

Route::get('/news', function () {
    return view('news', [
    ]);
})->name('news');

Route::get('/shop', function () {
    return view('shop', [
    ]);
})->name('shop');

Route::get('/comic/{id}', function ($id) {
    $comics = null;
    foreach (config('comics') as $value) {
        if ($value['id'] == $id) {
            $comics = $value;
            break;
        }
    }
    if ($comics) {
        return view ('comic', [
            'comics' => $comics,
        ]);
    } else {
        abort(404);
    }
})->name('comic');

/*

Route::get('/prodotti/{id}', function ($id) {
    $pasta = null;
    foreach (config('pasta') as $value) {
        if ($value['id'] == $id) {
            $pasta = $value;
            break;
        }
    }
    if ($pasta) {
        return view ('prodotto', [
            'pageTitle' => 'Prodotto - La Molisana',
            'pasta'     => $pasta,
        ]);
    } else {
        abort(404);
    }
})->name('prodotto');

*/

