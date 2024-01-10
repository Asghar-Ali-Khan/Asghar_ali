<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Product Form</title>
</head>
<body>
@include('header');
<div class="container mt-5">

    @if ($message=Session::get('success'))
        <div class="alert alert-success alert-back">
            <strong>{{$message}}</strong>
        </div>
    @endif
    <h2>Add Product</h2>
    <form action="{{ route('save')}}" method="POST" enctype="multipart/form-data">
        @csrf
        
        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" id="name" name="name" value="{{old('name')}}" required>
            <span class="text-danger">@error('name')
{{$message}}                
            @enderror
            </span>
        </div>

        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" id="description" name="description" rows="3" value="{{old('description')}}" required></textarea>
            <span class="text-danger">@error('description')
                {{$message}}                
                            @enderror
                            </span>
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" name="price" step="0.01" value="{{old('price')}}" required>
            <span class="text-danger">@error('price')
                {{$message}}                
                            @enderror
                            </span>
        </div>
        <div class="form-group">
            <label for="quantity">Quantity:</label>
            <input type="number" class="form-control" id="quantity" name="quantity" value="{{old('quatity')}}" required>
            <span class="text-danger">@error('quantity')
                {{$message}}                
                            @enderror
                            </span>
        </div>

        <div class="form-group">
            <label for="image">Image:</label>
            <input type="file" class="form-control" id="image" name="image" value="{{old('image')}}" required>
         
            <span class="text-danger">@error('image')
                {{$message}}                
                            @enderror
                            </span>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        <button type="reset" class="btn btn-danger">Cancle</button>
    </form>
</div>
</body>
</html>
