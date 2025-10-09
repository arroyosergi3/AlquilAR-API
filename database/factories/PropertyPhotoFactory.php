<?php

namespace Database\Factories;

use App\Models\Property;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PropertyPhoto>
 */
class PropertyPhotoFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
           'property_id' => Property::factory(),
            'url' => $this->faker->imageUrl(640, 480, 'city'),
            'is_cover' => $this->faker->boolean(30), // 30% de probabilidad de ser portada
        ];
    }
}
