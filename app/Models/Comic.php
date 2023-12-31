<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comic extends Model {
    use HasFactory;

    protected $table = "comics";

    protected $casts = [
        // così creo istanza di Carbon 
        // e posso utilizzare la funzione format nello show
        "sale_date" => "date",
        
        // per facilitare la lettura (grafica) dell'array nello show
        // senza visualizzare le quadre dell'array.
        "artists" => "array",
        "writers" => "array",
    ];
    
    // serve per il fill() o update()
    protected $fillable = [
        "title",
        "description",
        "thumb",
        "price",
        "sale_date",
        "series",
        "type",
        "artists",
        "writers",
    ];
}
