<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Product extends Model
{
    protected $table = 'products';

	protected $fillable = ['name', 'slug', 'description', 'extract', 'image', 'visible', 'price', 'precioMatri', 'precioQueen', 'precioKing', 'category_id', 'tipo_id'];


    // Relación con Categorias
    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    // Relación con Tipo
    public function tipo()
    {
        return $this->belongsTo('App\Tipo');
    }

    // Relación con OrderItem
    public function order_item()
    {
        return $this->hasOne('App\OrderItem');
    }

    public function scopeSearch($query, $name)
    {
        return $query->where('name', 'LIKE', "%$name%");
    }
}
