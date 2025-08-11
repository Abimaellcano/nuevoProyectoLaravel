<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido_producto extends Model
{
    protected $fillable = ['cantidad', 'total', 'pedido_id', 'producto_id'];

   public function pedido()
   {
    return $this->belongsTo(Pedidos::class);
   }

   public function producto(){
    return $this->belongsTo(Productos2::class);
   }
}