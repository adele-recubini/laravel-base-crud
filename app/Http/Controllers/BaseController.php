<?php

namespace App\Http\Controllers;
//aggiungiamo questo
use App\Beer;
//
use Illuminate\Http\Request;

class BaseController extends Controller
{
    public function test(){

      $beers = Beer::all();
      return view('test', compact('beers'));
    }
}
// all interno del mio controller posso inserire i where cioe dei filtri che mi vanno a filtrare il mio dtabase per esempio dicendogli che voglio solo i libri con un determinato prezzo //
