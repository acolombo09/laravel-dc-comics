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

    public function create() {
        return view("comics.create");
    }

    public function store(Request $request) {
        // dd($request->all());
        $data = $request->all();

        // creo nuova istanza
        $newComic = new Comic();

        // specifico la tipologia dei dati come nel seeder tranne che per il data
        $newComic->title = $data["title"];
        $newComic->description = $data["description"];
        $newComic->thumb = $data["thumb"];
        $newComic->price = str_replace("$", "", $data["price"]);
        $newComic->sale_date = $data["sale_date"];
        $newComic->series = $data["series"];
        $newComic->type = $data["type"];
        // lo sistemo a monte altrimenti mi restituisce errore nello show
        $newComic->artists = json_encode([$data["artists"]]);
        $newComic->writers = json_encode([$data["writers"]]);

        

        $newComic->save();

        // una volta inserito i dati e salvati nel db, reindirizzo nella pagina index
        // evito di ricreare lo stesso elemento nel db per colpa del post
        return redirect()->route('comics.index');
    }
}
