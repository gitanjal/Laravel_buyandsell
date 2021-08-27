<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductsController extends Controller
{
    //

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
      
    }
}
