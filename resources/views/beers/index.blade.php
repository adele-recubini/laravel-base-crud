<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">

        <title>Birre</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <h1>BIRRE</h1>

      {{-- creo la tabella e riporto tutte le proprietà della tabella, faccio diventare un link il name in modo tale che se clicco mi reindirizza nella route dove ho il singolo prodotto passandogli l id--}}

      <table class="table">
  <thead class="thead-dark">
    <tr>

      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">image</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($beers as $beer)


    <tr>
       <th scope="row">{{$beer->id}}</th>
       <td><a href="{{route('beers.show', ['beer' => $beer->id])}}">{{$beer->name}}</a></td>
       <td{{$beer->type}}></td>
       <td>{{$beer->price}}</td>
       <td><img src="{{$beer->image}}" width="100"></td>
     </tr>
    @endforeach

  </tbody>
</table>





    </body>
</html>
