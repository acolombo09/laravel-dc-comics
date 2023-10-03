<?php

namespace App\Http\Controllers;

use App\Models\Comic;
use Illuminate\Http\Request;

class ComicController extends Controller {
    // per il rest, functione view vanno per forza chiamati index
    public function index() {
        $comic = Comic::all();
        return view("comics.index", ["comics" => $comic]);
    }

    public function show($id) {
        $comic = Comic::findOrFail($id);

        // aggiungo un controllo in caso di id inesistente, suggerito da Florian
        // versione completa qui sotto, ma userò findOrFail
        // if(!$comic) {
        //     abort(404);
        // }

        return view("comics.show", ["comic" => $comic]);
    }
}
