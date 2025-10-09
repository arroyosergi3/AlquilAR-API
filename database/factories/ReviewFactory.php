<?php

namespace Database\Factories;

use App\Models\Booking;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Review>
 */
class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $booking = Booking::factory()->create();

        return [
            'booking_id' => $booking->id,
            'user_id' => $booking->user_id,
            'rating' => $this->faker->numberBetween(3,5),
            'comment' => $this->faker->sentence(),
        ];
    }
}
