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
            $table->integer('macho')->nullable();
            $table->integer('potentisimo')->nullable();
            $table->integer('spray')->nullable();
            $table->integer('xoxo')->nullable();
            $table->integer('lovin')->nullable();
            $table->integer('anillos')->nullable();
            $table->integer('pulseras')->nullable();
            $table->integer('macho50')->nullable();
            $table->integer('broja')->nullable();
            $table->integer('bazul')->nullable();
            $table->integer('bnegra')->nullable();
            $table->integer('quitavicio')->nullable();
            $table->integer('litoku')->nullable();
            $table->integer('hepadol')->nullable();
            $table->integer('xoxoretardante')->nullable();
            $table->integer('comprobante')->nullable();
            $table->decimal('carrera', 4, 2);
            $table->decimal('total', 6, 2);
            $table->string('stock');
            $table->text('novedades')->nullable();
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
