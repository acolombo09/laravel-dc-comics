<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller {
  public function index() {
    return view('home');
  }

  public function characters() {
    return view('characters');
  }

  public function comics() {
    return view('comics');
  }

  public function movies() {
    return view('movies');
  }

  public function tv() {
    return view('tv');
  }

  public function games() {
    return view('games');
  }
  
  public function collectibles() {
    return view('collectibles');
  }

  public function videos() {
    return view('videos');
  }

  public function fans() {
    return view('fans');
  }

  public function news() {
    return view('news');
  }
  
  public function shop() {
    return view('shop');
  }

}