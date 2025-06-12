<?php

namespace Database\Seeders;

use App\Models\Detalle_venta;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Detalle_ventaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         //Llamo al factory
         Detalle_venta::factory(15)->create();
    }
}
