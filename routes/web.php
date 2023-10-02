<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('homepage');

Route::get('/characters', [HomeController::class, 'characters'])->name('characters');
Route::get('/comics', [HomeController::class, 'comics'])->name('comics');
Route::get('/movies', [HomeController::class, 'movies'])->name('movies');
Route::get('/tv', [HomeController::class, 'tv'])->name('tv');
Route::get('/games', [HomeController::class, 'games'])->name('games');
Route::get('/collectibles', [HomeController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');
Route::get('/fans', [HomeController::class, 'fans'])->name('fans');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

// ROTTE READ CRUD
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
// Route::get("/pasta/{pasta}", [PastaController::class, "show"])->name("pasta.show");
?>
