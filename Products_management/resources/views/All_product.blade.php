
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
    @include('header');
    <table class="table table-hover mt-4">
        <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Product_Name</th>
              <th scope="col">Description</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">image</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($products as $product)
            <tr>
              <th scope="row">{{ $loop->index+1}}</th>
              <td>{{ $product->name }}</td>
              <td>{{ $product->description }}</td>
              <td>{{ $product->price }}</td>
              <td>{{ $product->quantity }}</td>
              <td><img src="images/{{ $product->images}}" width="50px" height="50px" ></td>
              <td><a href="images/{{$product->id}}/edit" class="btn btn-dark btn-sm">Update</a></td>
              <td><a href="products/{{$product->id}}/delete" class="btn btn-danger btn-sm">Delete</a></td>
            </tr>
            @endforeach
          </tbody>
      </table>
      {{ $products->links() }}
    
      <!-- Display each product details as needed -->
    

</body>
</html>