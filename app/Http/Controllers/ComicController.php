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

        $data["artists"] = explode(", ", $data["artists"]);
        $data["writers"] = explode(", ", $data["writers"]);

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
        $newComic->artists = $data["artists"];
        $newComic->writers = $data["writers"];

        $newComic->save();

        // una volta inserito i dati e salvati nel db, reindirizzo nella pagina index
        // evito di ricreare lo stesso elemento nel db per colpa del post
        return redirect()->route('comics.index');
    }  

    // ritorna una view con all'interno un form identico a quello del create
    // serve per modificare i dati di un comic aggiunto che corrisponde
    // all' id che ho utilizzato per aggiungerlo precedentemente
    public function edit($id) {
        $comic = Comic::findOrFail($id);

        return view("comics.edit", compact("comic"));
    }

    // riceve i dati inviati dal form edit e aggiorna il comic che
    // corrisponde all'id indicato nell'argomento della function
    public function update(Request $request, $id) {
        $comic = Comic::findOrFail($id);

        $newData = $request->all();

        // aggiorna i dati del comic tramite fill e save
        $comic->update($newData);

        return redirect()->route('comics.show', $comic->id);
    }

    // rimuove il comic che corrisponde all'id ricevuto come argomento
    public function destroy($id) {
        $comic = Comic::findOrFail($id);

        $comic->delete();

        return redirect()->route("comics.index");
    }
}
