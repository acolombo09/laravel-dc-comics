<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('characters', function () {
  return view('characters');
});

Route::get('movies', function () {


  return view('movies');
});

Route::get('tv', function () {


  return view('tv');
});

Route::get('games', function () {


  return view('games');
});

Route::get('collectibles', function () {

  return view('collectibles');
});

Route::get('videos', function () {


  return view('videos');
});

Route::get('fans', function () {


  return view('fans');
});

Route::get('news', function () {


  return view('news');
});

Route::get('shop', function () {

  return view('shop');
});

// ROTTE READ CRUD
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get("/pasta/{pasta}", [PastaController::class, "show"])->name("pasta.show");
?>
