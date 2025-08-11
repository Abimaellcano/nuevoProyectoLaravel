<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('pedido_productos', function (Blueprint $table) {
            $table->id();
            $table->integer('cantidad');
            $table->decimal('total', 10, 2);
            $table->foreignID('pedido_id')->constrained('pedidos')->onDelete('cascade');
            $table->foreignId('producto_id')->contrained('productos2')->onDelete('cascada');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedido_producto');
    }
};