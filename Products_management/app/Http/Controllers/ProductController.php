<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{

    public function show(){
        return view('products');
    } 
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
$pro=DB::table('Products')->insert([
            'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['quantity'],
            'images' =>$imageName,
]);
if($pro){
    return back()->with('success', 'Product Added successfully.');

}
    }

    public function index()
    {
        $products = Product::simplePaginate(15);
        return view('All_product', ['products' => $products]);
    }
    public function edit($id){
        $product= Product::where('id',$id)->first();
        return view('edit',['product'=>$product]);
    }
    public function update(Request $request,$id){
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric',
            'quantity' => 'required|integer',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if(isset($request->image)){
        $imageName = time() . '.' . $request->image->extension();
        $request->image->move(public_path('images'), $imageName);
        }
        $product=DB::table('Products')->where('id',$id)->update([
                  'name' => $validatedData['name'],
            'description' => $validatedData['description'],
            'price' => $validatedData['price'],
            'quantity' => $validatedData['quantity'],
            'images' =>$imageName,
        ]);
        if($product){
        return back()->with('success', 'Product Updated  successfully.');
        }
    }
    public function delete($id){
      $product=Product::where('id',$id)->first();
      $product->delete();
      return back()->with('success', 'Product deleted successfully.');
    }

public function dash(){
    $product=DB::table('products')->get();
    return view('dashboard',['images'=>$product]);
}
}
