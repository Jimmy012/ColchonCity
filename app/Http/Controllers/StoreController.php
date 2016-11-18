<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Tipo;
use App\Slider;
use Carbon\Carbon;

class StoreController extends Controller
{
    public function __construct()
    {
        Carbon::setlocale('es');
    }

    public function index()
    {
        
    	$products = Product::orderBy('id','DESC')->paginate(9);
        
        $products->each(function($products){
            $products->category;
        });
    	return view('store.index', compact('products'));
        //dd(return);
    }


    public function show($slug)
    {
    	$product = Product::where('slug', $slug)->first();
        $products = Product::orderBy('id','DESC')->paginate(3);
    	$categories = Category::all();
        $tipo = Tipo::all();
        

    	return view('store.show', compact('product','categories','tipo', 'products'));
    }

    public function searchTipo($nombre)
    {
        $tipo = Tipo::SearchTipo($nombre)->first();
        $products = $tipo->products()->paginate(9);

        $products->each(function($products){
                $products->category;
                //$products->images;
        
        });

        return view('store.index')->with('products', $products);

    }

    public function searchCategory($name)
    {
        $category = Category::SearchCategory($name)->first();
        $products = $category->products()->paginate(9);
         $products->each(function($products){
            $products->category;
        });

        return view('store.index')->with('products', $products);
    }

//----------------------------------------------------------------------//
  
   public function searchTipoProduct($nombre)
    {
        $tipo = Tipo::SearchTipo($nombre)->first();
        $products = $tipo->products()->paginate(15);

        $products->each(function($products){
                $products->category;
                //$products->images;
        
        });

        return view('store.productos')->with('products', $products);

    }

    public function searchCategoryProduct($name)
    {
        $category = Category::SearchCategory($name)->first();
        $products = $category->products()->paginate(15);
         $products->each(function($products){
            $products->category;
        });

        return view('store.productos')->with('products', $products);
    }

}
