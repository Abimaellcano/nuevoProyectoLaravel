<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido_producto extends Model
{
    protected $fillable = ['cantidad', 'total', 'pedido_id', 'producto_id'];

   public function pedido()
   {
    return $this->belongsTo(Pedido::class);
   }

   public function producto(){
    return $this->belongsTo(Producto::class);
   }
}