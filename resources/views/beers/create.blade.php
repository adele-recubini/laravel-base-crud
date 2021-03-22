<form action="{{route('beers.store')}}" method="post">
@csrf
@method('POST')

<div class="form-group">
  <label for="title">Name</label>
  <input class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" placeholder="Nome">
  <div class="invalid-feedback">

    {{$errors->first('name')}}

  </div>
</div>


 <div class="form-group">
  <label for="type">Type</label>
  <input class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" type="text" name="type" placeholder="Type">
 <div class="invalid-feedback">
  {{$errors->first('type')}}
  </div>
 </div>

  <div class="form-group">
   <label for="type">Price</label>
   <input class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" type="text" name="price" placeholder="Price">
  <div class="invalid-feedback">
   {{$errors->first('price')}}
   </div>
  </div>

  <div class="form-group">
   <label for="type">Image</label>
   <input class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" type="text" name="image" placeholder="Image url">
  <div class="invalid-feedback">
   {{$errors->first('image')}}
   </div>
  </div>






<input type="submit" value="Invia">
</form>
