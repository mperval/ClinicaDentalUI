<?php

namespace Database\Factories;

use App\Models\Instrumento;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Instrumento>
 */
class InstrumentoFactory extends Factory
{
    protected $model = Instrumento::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'nombre' => $this->faker->word,
            'material' => $this->faker->word,
            'tamano' => $this->faker->randomFloat(2, 1, 100),
        ];
    }
}
