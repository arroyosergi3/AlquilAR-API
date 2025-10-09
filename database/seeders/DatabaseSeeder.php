<?php

namespace Database\Seeders;

use App\Models\Availability;
use App\Models\Booking;
use App\Models\Property;
use App\Models\PropertyPhoto;
use App\Models\Review;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use PhpParser\Node\PropertyItem;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(10)->create();
        Property::factory()->count(10)->create();
        Availability::factory()->count(10)->create();
        Booking::factory()->count(10)->create();
        PropertyPhoto::factory()->count(10)->create();
        Review::factory()->count(10)->create();
    }
}
