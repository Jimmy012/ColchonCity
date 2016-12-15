<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mail;
use Session;
use Redirect;
use App\Http\Requests;
use App\Http\Controllers\Controller;


class AsesorController extends Controller
{
    public function index()
    {
    	return view('store.asesor');
    }

    public function asesor()
    {
        return view('store.asesor');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pregunta1 = ($request->get("pregunta1"));
        $pregunta2 = ($request->get("pregunta2"));
        $pregunta3 = ($request->get("pregunta3"));
        $pregunta4 = ($request->get("pregunta4"));
        $pregunta5 = ($request->get("pregunta5"));
        $pregunta6 = ($request->get("pregunta6"));
        $pregunta7 = ($request->get("pregunta7"));
       
        return view('store.asesordetalle',compact('pregunta1','pregunta2','pregunta3','pregunta4',
            'pregunta5','pregunta6','pregunta7'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
   
}
