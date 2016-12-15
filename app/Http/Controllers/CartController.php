<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Tipo;
class CartController extends Controller
{
    public function __construct()
    {
        if(!\Session::has('cart')) \Session::put('cart', array());
        if(!\Session::has('cart')) \Session::put('cart', array());
    }
    // Show cart
    public function show(Request $request)
    {
        //dd($request->all());
        $cart = \Session::get('cart');
        $total=$this->total();
        return view('store.cart', compact('cart','total'));
    }
    // Add item
    public function add(Product $product)
    {
        $cart = \Session::get('cart');
        $product->quantity = 1;
        $product->tipo_precio = 1;
        $cart[$product->slug] = $product;
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    // Delete item
    public function delete(Product $product)
    {
        $cart = \Session::get('cart');
        unset($cart[$product->slug]);
        \Session::put('cart', $cart);
        return redirect()->route('cart-show');
    }
    public function Actualizar(Request $request)
    {
        $cart = \Session::get('cart');
        $cart[$request->slug]->quantity = $request->cantidad;
        $cart[$request->slug]->tipo_precio = $request->tipo_precio;
        $cart[$request->slug]->price = $request->precio;

        \Session::put('cart', $cart);
        //return redirect()->route('cart-show');
        //dd($request->all());
    }
    // Update item
    public function update(Product $product, $quantity, Request $request)
    {
        $cart = \Session::get('cart');
        $cart[$product->slug]->quantity = $quantity;

        \Session::put('cart', $cart);

        return redirect()->route('cart-show');
    }
    // Trash cart
    public function trash()
    {
        \Session::forget('cart');
        return redirect()->route('cart-show');
    }
    // Total
    private function total()
    {
        $cart = \Session::get('cart');
        $total = 0;
        foreach($cart as $item){
            $total += $item->price * $item->quantity;
        }
        return $total;
    }
    // Detalle del pedido
    public function orderDetail()
    {
        if(count(\Session::get('cart')) <= 0) return redirect()->route('home');
        $cart = \Session::get('cart');
        $total = $this->total();

        return view('store.order-detail', compact('cart', 'total'));
    }
}