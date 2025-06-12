<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            

            CategoriasSeeder::class,
            UsersSeeder::class,

            ProveedoresSeeder::class,
            VentasSeeder::class,
            ProductosSeeder::class,
            ComprasSeeder::class,

            Detalle_ventaSeeder::class,
            ImagenesSeeder::class,
            
        ]);
    }
}
