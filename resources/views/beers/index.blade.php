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

      <table class="table">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Type</th>
      <th scope="col">Price</th>
      <th scope="col">Cover</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($beers as $beer)


    <tr>
       <th scope="row">1</th>
       <td></td>
       <td></td>
       <td></td>
     </tr>
    @endforeach

  </tbody>
</table>





    </body>
</html>
