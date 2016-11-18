<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class SucursalesController extends Controller
{
    public function sucursales()
    {
    	//dd($products);
    	return view('store.sucursales');
    }


   
}
