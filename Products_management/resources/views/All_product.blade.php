
    @include('header')
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

</body>
</html>