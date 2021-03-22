@php
//edit
if(isset($edit) && !empty($edit)){
  $method = 'PUT';
  $url = route('beers.update', compact('beer'));
//create
}else{
 $method = 'POST';
 $url = route('beers.store');

}


@endphp

<form action="{{$url}}" method="post">


@csrf
@method($method)

<div class="form-group">
  <label for="title">Name</label>
  <input class="form-control {{$errors->has('name') ? 'is-invalid' : ''}}" type="text" name="name" placeholder="Nome" value="{{ isset($beer) ? $beer->name : '' }}">
  <div class="invalid-feedback">

    {{$errors->first('name')}}

  </div>
</div>


 <div class="form-group">
  <label for="type">Type</label>
  <input class="form-control {{$errors->has('type') ? 'is-invalid' : ''}}" type="text" name="type" placeholder="Type" value="{{ isset($beer) ? $beer->type : '' }}">
 <div class="invalid-feedback">
  {{$errors->first('type')}}
  </div>
 </div>

  <div class="form-group">
   <label for="type">Price</label>
   <input class="form-control {{$errors->has('price') ? 'is-invalid' : ''}}" type="text" name="price" placeholder="Price" value="{{ isset($beer) ? $beer->price : '' }}">
  <div class="invalid-feedback">
   {{$errors->first('price')}}
   </div>
  </div>

  <div class="form-group">
   <label for="type">Image</label>
   <input class="form-control {{$errors->has('image') ? 'is-invalid' : ''}}" type="text" name="image" placeholder="Image url" value="{{ isset($beer) ? $beer->image : '' }}">
  <div class="invalid-feedback">
   {{$errors->first('image')}}
   </div>
  </div>






<input type="submit" value="Invia">
</form>
