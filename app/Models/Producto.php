<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //Permitir asignación masiva
    protected $fillable = ['nombre', 'precio', 'stock'];

    protected $table='productos';

    // Relación: Un producto pertenece a un Pedido
    public function pedidos()
    {
        return $this->hasMany(Pedido_producto::class);
    }
}
