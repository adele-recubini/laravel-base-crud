<form action="{{route('beers.store')}}" method="post">
@csrf
@method('POST')

<label for="title">Name</label>
<input type="text" name="name" placeholder="Nome">

<label for="type">Type</label>
<input type="text" name="type" placeholder="Type">

<label for="price">Price</label>
<input type="text" name="price" placeholder="price">

<label for="image">Image</label>
<input type="text" name="image" placeholder="image url">

<input type="submit" value="Invia">
</form>
