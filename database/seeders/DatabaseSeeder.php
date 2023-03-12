<?php

namespace Database\Seeders;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Julisa Moreira',
            'email' => 'serviciosalexsd@gmail.com',
            'password' => bcrypt('WpasswordW'),
        ]);

        DB::table('stocks')->insert([
            'stock1_name' => 'Jenny',
            'stock2_name' => 'Alejandro',
            'stock3_name' => 'Cristhian',
            'stock4_name' => 'Kevin',
            'stock5_name' => 'Lenin',
            'stock6_name' => 'Hector',
        ]);

        DB::table('products')->insert([
            'name' => 'Macho Alfa',
            'price' => 25,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Potentisimo',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Spray Retardante',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'XOXO',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'LovinFem',
            'price' => 25,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Anillos',
            'price' => 15,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Pulseras',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Macho Alfa 50',
            'price' => 30,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Baraja Roja',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Baraja Azul',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Baraja Negra',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Quitavicio',
            'price' => 30,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Litoku',
            'price' => 15,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'Hepadol',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);

        DB::table('products')->insert([
            'name' => 'XOXO Retardante',
            'price' => 20,
            'stock1' => 0,
            'stock2' => 0,
            'stock3' => 0,
            'stock4' => 0,
            'stock5' => 0,
            'stock6' => 0,
            'existencias' => 0,
            'lunes' => 0,
            'martes' => 0,
            'miercoles' => 0,
            'jueves' => 0,
            'viernes' => 0,
            'sabado' => 0,
            'domingo' => 0,
        ]);
    }
}
