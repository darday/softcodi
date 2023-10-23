<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        DB::table('clients')->insert([
            [
                'ci' => '1234567',
                'name' => 'Juan',
                'last_name' => 'Pérez',
                'phone' => '555-1234',
                'address' => '123 Main St',
                'email' => 'juan@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ci' => '0603935008',
                'name' => 'Dario',
                'last_name' => 'Janeta',
                'phone' => '50961119670',
                'address' => 'Riobamba',
                'email' => 'darday@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'ci' => '0803935007',
                'name' => 'Auki Gabriel',
                'last_name' => 'Janeta Paca',
                'phone' => '50961119670',
                'address' => 'Riobamba Esteban Mara;on',
                'email' => 'darday@example.com',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);

        DB::table('sales')->insert([
            [
                'client_id' => '1',
                'sale_type' => 'Producto',
                'description' => 'Compra Mouse + Teclado',
                'price' => '17.50',
                'status'=> '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => '2',
                'sale_type' => 'Servicio',
                'description' => 'Formateo de Computadora sin limpieza de hardware. Precio total 15.00. Abona 10 y queda de saldo 5.00. Se entregará el producto el 21 de Octubre',
                'price' => '15',
                'status'=> '1',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => '1',
                'sale_type' => 'Servicio',
                'description' => 'Limpieza de CPU',
                'price' => '10',
                'status'=> '0',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // Agrega más registros según sea necesario
        ]);

        DB::table('gift_softcodis')->insert([
            [
                'draw_date' => '2023-08-15',
                'gift_name' => 'Mouse + Teclado',
                'gift_description' => 'TENEMOS ESTE EXCELENTE PRODUCTO PARA SORTEAR ESTE FIN',
                'img_gift_draw' => 'nombre_de_imagen1.jpg',
                'gift_winner' => 'Ganador 1',
                'img_gift_winner' => 'imagen_ganador1.jpg',
                'claim_gift' => true,
                'date_claim_gift' => '2023-10-20',
            ],
            [
                'draw_date' => '2023-10-22',
                'gift_name' => 'Camping',
                'gift_description' => 'TENEMOS ESTE EXCELENTE PRODUCTO PARA SORTEAR ESTE FIN',
                'img_gift_draw' => 'nombre_de_imagen2.jpg',
                'gift_winner' => 'Ganador 2',
                'img_gift_winner' => 'imagen_ganador2.jpg',
                'claim_gift' => false,
                'date_claim_gift' =>  '2023-10-27',
            ],
            // Agrega más registros si es necesario
        ]);
    }
}
