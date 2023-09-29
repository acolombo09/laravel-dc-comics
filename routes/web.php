<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function () {
  return view('home');
});

Route::get('comics', function () {

  return view('comics');
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
?>
