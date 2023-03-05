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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string('name');
            $table->decimal('price', 6, 2);
            $table->integer('stock1');
            $table->integer('stock2');
            $table->integer('stock3');
            $table->integer('stock4');
            $table->integer('stock5');
            $table->integer('stock6');
            $table->integer('existencias');
            $table->integer('lunes');
            $table->integer('martes');
            $table->integer('miercoles');
            $table->integer('jueves');
            $table->integer('viernes');
            $table->integer('sabado');
            $table->integer('domingo');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
};
