<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class VerifySeller
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        //Get the product id
        $product_id=$request->route()->parameter('id');
        $product=Product::find($product_id);

        if(Auth::id() != $product->user_id)
        {
          return redirect("/product/$product_id");
        }

        return $next($request);
    }
}
