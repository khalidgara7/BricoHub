<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Reservation>
 */
class OfferFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Offer::class;

    public function definition()
    {
        return [
            'date_reservation' => $this->faker->dateTimeBetween('-1 year', '+1 month'),
            'status' => $this->faker->randomElement(['rejected', 'cancelled', 'pending', 'accepted']),
            'price' => $this->faker->randomFloat(2, 100, 1000), // Example for price between 100 and 1000
            'description' => $this->faker->text,
            'title' => $this->faker->sentence,
        ];
    }
}
