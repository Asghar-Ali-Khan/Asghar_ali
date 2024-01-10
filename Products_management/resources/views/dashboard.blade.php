@include('header');
<link rel="stylesheet" href="style.css">
<div class="con">
@foreach ($images as $img )
<div class="card" style="width: 18rem;">
    <img src="images/{{$img->images}}" class="card-img-top" alt="...">
    <div class="card-body">
      <h5 class="card-title">{{$img->name}}</h5>
      <h5 class="card-title">Rs:{{$img->price}}</h5>
      <p class="card-text">{{$img->description}}</p>
      <a href="#" class="btn btn-primary">Add To Card</a>
    </div>
  </div>
  <br><br><br>
  @endforeach
</div>