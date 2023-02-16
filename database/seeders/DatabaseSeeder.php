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
        ]);

        DB::table('orders')->insert([
            'estado' => 'PENDIENTE',
            'cliente' => 1,
            'celular' => '+593 123 456 7890',
            'fecha_entrega' => '2023-02-11',
            'vendedor' => 'MARCOS',
            'macho' => 1,
            'potentisimo' => 2,
            'spray' => 3,
            'xoxo' => 4,
            'lovin' => 5,
            'anillos' => 6,
            'pulseras' => 7,
            'macho50' => 8,
            'broja' => 9,
            'bazul' => 10,
            'bnegra' => 11,
            'quitavicio' => 12,
            'litoku' => 13,
            'hepadol' => 14,
            'xoxoretardante' => 15,
            'comprobante' => 1234567890,
            'carrera' => 2.50,
            'total' => 252.50,
            'stock' => 'ALEJANDRO',
            'novedades' => 'NUNCA CONTESTO',
        ]);

        DB::table('orders')->insert([
            'estado' => 'PENDIENTE',
            'cliente' => 2,
            'celular' => '+593 123 456 7890',
            'fecha_entrega' => '2022-08-11',
            'vendedor' => 'KLENDER',
            'macho' => 1,
            'potentisimo' => 2,
            'spray' => 3,
            'xoxo' => 4,
            'lovin' => 5,
            'anillos' => 6,
            'pulseras' => 7,
            'macho50' => 8,
            'broja' => 9,
            'bazul' => 10,
            'bnegra' => 11,
            'quitavicio' => 12,
            'litoku' => 13,
            'hepadol' => 14,
            'xoxoretardante' => 15,
            'comprobante' => 1234567890,
            'carrera' => 2.50,
            'total' => 130.50,
            'stock' => 'JENNY',
            'novedades' => '',
        ]);

        DB::table('orders')->insert([
            'estado' => 'ENTREGADO',
            'cliente' => 3,
            'celular' => '+593 123 456 7890',
            'fecha_entrega' => '2023-01-05',
            'vendedor' => 'NATALY',
            'macho' => 1,
            'potentisimo' => 2,
            'spray' => 3,
            'xoxo' => 4,
            'lovin' => 5,
            'anillos' => 6,
            'pulseras' => 7,
            'macho50' => 8,
            'broja' => 9,
            'bazul' => 10,
            'bnegra' => 11,
            'quitavicio' => 12,
            'litoku' => 13,
            'hepadol' => 14,
            'xoxoretardante' => 15,
            'comprobante' => 1234567890,
            'carrera' => 2.50,
            'total' => 768.50,
            'stock' => 'RODOLFO',
            'novedades' => 'NO ESTUVO EN SU CASA',
        ]);

        DB::table('orders')->insert([
            'estado' => 'ENTREGADO',
            'cliente' => 4,
            'celular' => '+593 123 456 7890',
            'fecha_entrega' => '2023-02-11',
            'vendedor' => 'GISSELA',
            'macho' => 1,
            'potentisimo' => 2,
            'spray' => 3,
            'xoxo' => 4,
            'lovin' => 5,
            'anillos' => 6,
            'pulseras' => 7,
            'macho50' => 8,
            'broja' => 9,
            'bazul' => 10,
            'bnegra' => 11,
            'quitavicio' => 12,
            'litoku' => 13,
            'hepadol' => 14,
            'xoxoretardante' => 15,
            'comprobante' => 1234567890,
            'carrera' => 2.50,
            'total' => 252.50,
            'stock' => 'JENNY',
            'novedades' => '',
        ]);
    }
}
