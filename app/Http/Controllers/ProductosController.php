<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Tipo;

class ProductosController extends Controller
{
    public function productos()
    {
    	$products = Product::orderBy('id','DESC')->paginate(16);
        //$categories = Category::all();
        //$tipo = Tipo::all();
    	//dd($products);
    	return view('store.productos', compact('products'));
    }


    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
    	return view('store.show', compact('product'));
    }
}
