<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;


class Slider extends Model
{
    protected $table = 'slider';

	protected $fillable = ['titulo', 'slug', 'imagen', 'noticia', 'orden', 'estado'];

    public $timestamps = false;

    

}
