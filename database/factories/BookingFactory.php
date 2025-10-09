<?php

namespace Database\Factories;

use App\Models\Property;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Booking>
 */
class BookingFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
       $property = Property::factory()->create();
        $check_in = $this->faker->dateTimeBetween('now', '+1 month');
        $check_out = (clone $check_in)->modify('+'.rand(1,5).' days');

        return [
            'user_id' => User::factory()->create(['role'=>'guest'])->id,
            'property_id' => $property->id,
            'check_in' => $check_in->format('Y-m-d'),
            'check_out' => $check_out->format('Y-m-d'),
            'total_price' => $property->price_per_night * ($check_out->diff($check_in)->days),
            'status' => $this->faker->randomElement(['pending','confirmed','cancelled']),
        ];
    }
}
