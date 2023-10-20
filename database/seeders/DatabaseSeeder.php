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
            // Agrega más registros según sea necesario
        ]);

        DB::table('sales')->insert([
            [
                'client_id' => '1',
                'sale_type' => 'Producto',
                'description' => 'Compra Mouse + Teclado',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'client_id' => '2',
                'sale_type' => 'Servicio',
                'description' => 'Formateo de Computadora sin limpieza de hardware. Precio total 15.00. Abona 10 y queda de saldo 5.00. Se entregará el producto el 21 de Octubre',
                'created_at' => now(),
                'updated_at' => now(),
            ]
            // Agrega más registros según sea necesario
        ]);
    }
}
