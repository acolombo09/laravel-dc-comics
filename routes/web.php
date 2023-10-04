<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ComicController;
use Illuminate\Support\Facades\Route;


// HOMEPAGE
Route::get('/', [HomeController::class, 'index'])->name('homepage');

// SIDE PAGES
Route::get('/characters', [HomeController::class, 'characters'])->name('characters');
// pagina comics inserita nel progetto iniziale, non la elimino per ora
// NON confonderla con la pagina comics.index
Route::get('/comics', [HomeController::class, 'comics'])->name('comics');
Route::get('/movies', [HomeController::class, 'movies'])->name('movies');
Route::get('/tv', [HomeController::class, 'tv'])->name('tv');
Route::get('/games', [HomeController::class, 'games'])->name('games');
Route::get('/collectibles', [HomeController::class, 'collectibles'])->name('collectibles');
Route::get('/videos', [HomeController::class, 'videos'])->name('videos');
Route::get('/fans', [HomeController::class, 'fans'])->name('fans');
Route::get('/news', [HomeController::class, 'news'])->name('news');
Route::get('/shop', [HomeController::class, 'shop'])->name('shop');

// ROTTE CRUD CREATE & STORE
Route::get("/comics/create", [ComicController::class, "create"])->name("comics.create");
Route::post("/comics", [ComicController::class, "store"])->name("comics.store");

// ROTTE CRUD READ, le ho spostate in fondo per conflitto di uri causa parametro dinamico {comic}
Route::get('/comics', [ComicController::class, 'index'])->name('comics.index');
Route::get("/comics/{comic}", [ComicController::class, "show"])->name("comics.show");

// ROTTE CRUD UPDATE
Route::get("/comics/{id}/edit", [ComicController::class, "edit"])->name("comics.edit");
Route::put("/comics/{id}", [ComicController::class, "update"])->name("comics.update");

// ROTTA CRUD DESTROY
Route::delete("/comics/{id}", [ComicController::class, "destroy"])->name("comics.destroy");