<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Faker\Generator as Faker;
use Illuminate\Support\Str;

class ApartmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 25; $i++) {

            $title = $faker->unique()->sentence(4);

            $userId = User::inRandomOrder()->first()->id;

            Apartment::create([
                'title' => $title,
                'user_id' => $userId,
                'slug' => Str::slug($title),
                'description' => $faker->paragraph(),
                'cover' => $faker->imageUrl(360, 360, 'animals', true),
                'type' => $faker->randomElement(['Appartamento', 'Villa', 'Stanza', 'Chalet', 'Hotel']),
                'address' => $faker->address(),
                'city' => $faker->city(), 
                'longitude' => $faker->latitude($min = -90, $max = 90),
                'latitude' => $faker->longitude($min = -180, $max = 180),
                'price' => $faker->randomFloat(2, 50, 500),
                'availability' => $faker->boolean(),
                'room' => $faker->numberBetween(0, 7),
                'bed' => $faker->numberBetween(0, 14),
                'bathroom' => $faker->numberBetween(0, 14),
                'square_meters' => $faker->numberBetween(10, 500),
                'visibility' => $faker->boolean(),
                'visibility' => $faker->boolean(),
            ]);
        }
    }
}
