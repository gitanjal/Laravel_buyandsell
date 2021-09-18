<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class ProductsController extends Controller
{
    //Fetch all products
    public function index()
    {
        /*
        ***ASSIGNMENT***
        Task 1: Which function of an eloquent model fetches all the items from the corresponding database table?
                Call that function below.
        */
        $products=Product::????;
        return view('products')->with('products',$products);
    }

    //Funtion to store product information on the database
    public function store(Request $request){

      //validate the inputs
      $request->validate([
        'title'=>'required',
        'desc-sm'=>'required',
        'desc-full'=>'required',
        'price'=>'required|numeric',
        'img'=>'required'
      ],[
        'title.required'=>'Please enter a title',
        'desc-sm.required'=>'Please enter a short description',
        'desc-full.required'=>'Please enter a full description',
        'price.required'=>'Please enter the product price',
        'price.numeric'=>'The price should be a number',
        'img.required'=>'Please upload an image'
      ],[
        'desc-sm'=>'short description',
        'desc-full'=>'full description',
        'img'=>'product image'
      ]);

      //Upload the image
      $path=$request->file('img')->store('product_images');

      //Insert data into the products table
      $product=new Product();
      $product->title=$request->input('title');
      $product->short_desc=$request->input('desc-sm');
      $product->long_desc=$request->input('desc-full');
      $product->price=$request->input('price');
      $product->image_url=$path;
      $product->user_id=Auth::id();

      $product->save();

      return redirect('/product/'.$product->id);
    }
}
