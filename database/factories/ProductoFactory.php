<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Products>
 */
class ProductoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'categoria_id' => $this->faker->numberBetween(1,\App\Models\Categoria::count()),
            'proveedor_id' => $this->faker->numberBetween(1,\App\Models\Proveedor::count()),
            'codigo' => $this->faker->ean13(),
            'nombre' => $this->faker->text(50),
            'descripcion' => $this->faker->text(100),
            'cantidad' => $this->faker->randomNumber(3,true),
            'precio_compra' => $this->faker->randomFloat(2, 1, 100),
            'precio_venta' => $this->faker->randomFloat(2, 1, 100),
            'activo' => $this->faker->boolean(),
        ];
        
    }
}
