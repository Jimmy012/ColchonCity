<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Requests\SaveProductRequest;
use App\Http\Controllers\Controller;
use App\Product;
use App\Category;
use App\Tipo;
class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $products = Product::orderBy('id', 'desc')->paginate(10);
        //dd($products);
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        $categories = Category::orderBy('id', 'desc')->lists('name', 'id');
        //dd($categories);
        //return view('admin.product.create', compact('categories'));

        $tipo = Tipo::orderBy('id', 'desc')->lists('nombre', 'id');
        //dd($tipo);
        return view('admin.product.create', compact('tipo','categories'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(SaveProductRequest $request)
    {

            $file = $request->file('image');
            $name = 'imagen_' . time() . '_' . $file->getClientOriginalName();
            $path =  public_path() . '/tienda/productos/';
            $file->move($path, $name);
 
        
        $data = [
            'name'          => $request->get('name'),
            'slug'          => str_slug($request->get('name')),
            'description'   => $request->get('description'),
            'extract'       => $request->get('extract'),
            'price'         => $request->get('price'),
            'precioMatri'   => $request->get('precioMatri'),
            'precioQueen'   => $request->get('precioQueen'),
            'precioKing'    => $request->get('precioKing'),
            'image'         => $name = 'imagen_' . time() . '_' . $file->getClientOriginalName(),
            'visible'       => $request->has('visible') ? 1 : 0,
            'category_id'   => $request->get('category_id'),
            'tipo_id'       => $request->get('tipo_id')
        ];

        $product = Product::create($data);

        $message = $product ? 'Producto agregado correctamente!' : 'El producto NO pudo agregarse!';
        //Product::create($request->all());   
        
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Product $product)
    {
        return $product;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Product $product)

    {
        $tipo = Tipo::orderBy('id', 'desc')->lists('nombre', 'id');

        //return view('admin.product.edit', compact('tipo', 'product'));

        $categories = Category::orderBy('id', 'desc')->lists('name', 'id');

        return view('admin.product.edit', compact('categories','tipo', 'product'));

         
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(SaveProductRequest $request, Product $product)
    {
            //$file = $request->get('image');
            //$name = 'imagen_' . time() . '_' . ($request->get('image'));
            //$path =  public_path() . '/tienda/productos/';
           
            //$file = $request->get('image')->move(public_path() . '/tienda/productos/');
            
            

        $product->fill($request->all());
        $product->slug = str_slug($request->get('name'));
        $product->visible = $request->has('visible') ? 1 : 0;
       // $product->image = $name = 'imagen_' . time() . '_' . ($request->get('image'));
        //$product=$file->move($path, $name);
        
        $updated = $product->save();
        
        $message = $updated ? 'Producto actualizado correctamente!' : 'El Producto NO pudo actualizarse!';
        
        return redirect()->route('admin.product.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Product $product)
    {
        $deleted = $product->delete();
        
        $message = $deleted ? 'Producto eliminado correctamente!' : 'El producto NO pudo eliminarse!';
        
        return redirect()->route('admin.product.index')->with('message', $message);
    }
}
