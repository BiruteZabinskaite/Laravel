<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Product;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    function showProduct(Request $request){
        $products=Product::all();
        return view('products',['products'=>$products]);
    }

    function insertProduct(Request $request) {
        $product=new Product();
        $product->name->$request->name;
        $product->price->$request->price;
        $product->save();

        return redirect()->route('showProducts');
    }
}
