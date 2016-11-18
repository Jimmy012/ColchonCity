<?php

namespace App\Http\ViewComposers;

use Illuminate\Contracts\View\View;
use App\Category;
use App\Tipo;
use App\Slider;

class AsideComposer {

	public function compose(View $view)
	{	
		$sliders = Slider::all();
		$categories = Category::orderBy('name','DESC')->get();
		$tipo = Tipo::orderBy('nombre','DESC')->get();
		//orderBy('name', 'asc')->get();
		//$tags = Tag::orderBy('name', 'asc')->get();
		$view->with('categories', $categories)->with('tipo', $tipo)->with('sliders', $sliders);

        
	}

}