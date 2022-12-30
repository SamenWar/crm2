<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\CompanyClient>
 */
class CompanyClientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'company_id' => fake()->numberBetween(1, 100),
            'client_id' => fake()->numberBetween(1, 100),
        ];
    }
}
