@include('header')
<link rel="stylesheet" href="style.css">
<div class="con">
@foreach ($images as $img )
<div class="card mx-auto mt-5 " style="width: 20rem; height: -webkit-fill-available;">
    <img src="images/{{$img->images}}" class="card-img-top" height="200px" width="400px">
    <div class="card-body">
      <h5 class="card-title">{{$img->name}}</h5>
      <h5 class="card-title">Rs:{{$img->price}}</h5>
      <a href="#" class="btn btn-primary">Add To Card</a>
    </div>
  </div>
  <br><br><br>
  @endforeach
</div>