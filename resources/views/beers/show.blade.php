<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css') }}" type="text/css">
        <script src="{{ asset('js/app.js') }}"></script>

        <title>dettaglio birra</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

      <h1>DETTAGLIO BIRRA</h1>




<div class="card" style="width: 18rem;">
  <img class="card-img-top" src="{{$beer->image}}" alt="Card image cap">
  <div class="card-body">
    <h4 class="card-title">{{$beer->name}}</h4>
    <h3 class="card-title">{{$beer->type}}</h3>
    <h2 class="card-title">{{$beer->price}}</h2>

    <a href="/beers" class="btn btn-primary">edit</a>
  </div>
</div>

    </body>
</html>
