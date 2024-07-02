<?php
//creato PageController da terminale 
namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//importo la classe Movies
use App\Models\Movie;

class PageController extends Controller
{
    //vado a recuperare la tabella movies tramite function 
    public function home()
    {
        //assegno alla variabile $film la tabella movies
        $film = Movie::all();
        //riporto la variabile nell'array $dati 
        $dati = [
            "film" => $film,
        ];
        //la funzione restituisce il nome della pagina home conl'array $dati
        return view('home', $dati);
    }

    //creo l'importazione dei dati per movies 
    public function movies(){
        $film = Movie::all();
        //riporto la variabile nell'array $dati 
        $dati = [
            "film" => $film,
        ];
        //la funzione restituisce il nome della pagina home conl'array $dati
        return view('movies', $dati);
    }
}
