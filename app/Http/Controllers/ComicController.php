<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller {
    // per il rest, functione view vanno per forza chiamati index
    public function index() {
        $data = Comic::all();
        return view("comics.index", ["comics" => $data]);
    }

    public function show($id) {
        $comic = Comic::find($id);
        return view("comics.show", ["comics" => $comic]);
    }
}
