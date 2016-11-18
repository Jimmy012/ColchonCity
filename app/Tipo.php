<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tipo extends Model
{
    protected $table = 'tipo';

	protected $fillable = ['nombre'];

	public $timestamps = false;

	public function products()
    {
        return $this->hasMany('App\Product');
    }

    public function scopeSearch($query, $name)
	{
		return $query->where('name', 'LIKE', "%$name%");
	}


	public function scopeSearchTipo($query, $nombre)
	{
		return $query->where('nombre', '=', $nombre);
	}
}
