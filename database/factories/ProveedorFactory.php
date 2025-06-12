<?php

namespace Database\Factories;

use App\Models\Items;
use App\Models\Sales;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\ItemSales>
 */
class ProveedorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => $this->faker->unique()->words(3,true),
            'telefono' => $this->faker->numerify('#########'),
            'email' => $this->faker->safeEmail,
            'cp' => $this->faker->numerify('#####'),
            'sitio_web' => $this->faker->sentence(),
            'notas' => $this->faker->text(100),
        ];
    }
}
