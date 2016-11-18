<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Slider;

class SliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $sliders = Slider::all();
        //dd($sliders);
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  Request  $request
     * @return Response
     */
    public function store(Request $request)
    {
            $file = $request->file('image');
            $name = 'imagen_' . time() . '_' . $file->getClientOriginalName();
            $path =  public_path() . '/tienda/slider/';
            $file->move($path, $name);

        $this->validate($request, [
          'titulo' => 'required|unique:slider|max:255',
          //'imagen' => 'required',
          'orden' => 'required',
          'estado' => 'required',
        ]);
        
        $slider = Slider::create([
            'titulo' => $request->get('titulo'),
            'slug'   => str_slug($request->get('titulo')),
            'imagen' => $name = 'imagen_' . time() . '_' . $file->getClientOriginalName(),
            'noticia'=> $request->get('noticia'),
            'orden'  => $request->get('orden'),
            'estado' => $request->has('estado') ? 1 : 0
        ]);
        
        $message = $slider ? 'Slider agregado correctamente!' : 'El Slider NO pudo agregarse!';
        
        return redirect()->route('admin.slider.index')->with('message', $message);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show(Slider $slider)
    {
        return $slider;
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit(Slider $slider)
    {
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  Request  $request
     * @param  int  $id
     * @return Response
     */
    public function update(Request $request, Slider $slider)
    {
        //dd($request->file('image'));
        $file = $request->file('image');          
        $name = 'imagen_' . time() . '_' . ($request->get('image'));
        $path =  public_path() . '/tienda/slider/';
        $file->move($path, $name);
        dd($request->all());
        $slider = Slider($slider);
        dd($slider);
        $slider->fill($request->all());
        $slider->slug = str_slug($request->get('name'));
        $slider->imagen = $name;
        $slider->estado = $request->has('estado') ? 1 : 0;
        
        $updated = $slider->save();
        
        $message = $updated ? 'Slider actualizado correctamente!' : 'El Slider NO pudo actualizarse!';
        
        return redirect()->route('admin.slider.index')->with('message', $message);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy(Slider $slider)
    {
        $deleted = $slider->delete();
        
        $message = $deleted ? 'Slider eliminado correctamente!' : 'El slider NO pudo eliminarse!';
        
        return redirect()->route('admin.slider.index')->with('message', $message);
    }
}
