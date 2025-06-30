<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CpVille>
 */
class CpVilleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'code_postal' => $this->faker->postcode(),
            'ville' => $this->faker->city(),
        ];
    }
}
