<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('estado');
            $table->integer('cliente');
            $table->string('celular');
            $table->date('fecha_entrega');
            $table->string('vendedor');
            $table->integer('macho');
            $table->integer('potentisimo');
            $table->integer('spray');
            $table->integer('xoxo');
            $table->integer('lovin');
            $table->integer('anillos');
            $table->integer('pulseras');
            $table->integer('macho50');
            $table->integer('broja');
            $table->integer('bazul');
            $table->integer('bnegra');
            $table->integer('quitavicio');
            $table->integer('litoku');
            $table->integer('hepadol');
            $table->integer('xoxoretardante');
            $table->integer('comprobante')->nullable();
            $table->decimal('carrera', 4, 2);
            $table->decimal('total', 6, 2);
            $table->string('stock');
            $table->text('novedades');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
};
