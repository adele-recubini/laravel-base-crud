<?php

namespace App\Http\Controllers;
//atom non lo completa da solo ricordati di inserire lo use
use App\Beer;
//
use Illuminate\Http\Request;

class BeerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $beers = Beer::all();

      return view('beers.index', compact('beers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('beers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
      //validazione
      $request->validate([

        'name' =>'required|max:255',
        'type' =>'required',
        'price' => 'required|numeric|between:0,9999.99',
        'image'=>'required',
      ]);

      $data = $request->all();

      $beer = new Beer();
      $beer->fill($data);
      //il fill crea dei parametri e bisogna compilare il model in Beer.php con $fillable
      $beer->save();


      $beerStored = Beer::orderBy('id', 'desc')->first();

      return redirect()->route('beers.show', $beerStored);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $beer
     * @return \Illuminate\Http\Response
     */
    public function show(Beer $beer)
    {

      //praticamente nell altro template gli passo un id che corrisponde ad una singola birra
      //mettendo il tipo Book andra a prendere un intero che ha una primary key che di fatto è l id e quindi mi mostrerà il singolo libro
      //$beer = Beer::find($beer);

        return view('beers.show', compact('beer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
