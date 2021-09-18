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

      /*
      ***ASSIGNMENT***
      Task 1: $request->file('img') gives us the file selected by the user,
            Now call the appropiate function to store this file on the server.
      */
      //Upload the image
      $path=$request->file('img')->???  ;

      //Insert data into the products table

    }
}
