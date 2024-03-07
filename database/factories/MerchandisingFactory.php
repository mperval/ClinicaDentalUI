<?php

namespace Database\Factories;

use App\Models\Merchandising;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Merchandising>
 */
class MerchandisingFactory extends Factory
{
    protected $model = Merchandising::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'tipo_producto' => $this->faker->word,
            'talla' => 42,
            'precio' => 50.00,
        ];
    }
}
