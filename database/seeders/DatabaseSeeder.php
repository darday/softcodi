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
                'service_product' => 'Adquiere Servicio',
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
                'service_product' => 'Adquiere Producto',
                
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Agrega más registros según sea necesario
        ]);
    }
}
