<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;


class PagoController extends Controller
{
    public function pago()
    {
    	//dd($products);
    	return view('store.pago');
    }


   
}
