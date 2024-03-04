<?php

namespace Database\Factories;

use App\Models\Employeur;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employeur>
 */
class EmployeurFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Employeur::class;

    public function definition()
    {
        return [
            'cin' => $this->faker->unique()->numerify('########'),
            // Add other fields with fake data as needed
        ];
    }
}
