<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
use Faker\Generator as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        for ($i = 0; $i < 10; $i++) {

            $apartmentId = Apartment::inRandomOrder()->first()->id;

            Message::create([
                'apartment_id' => $apartmentId,
                'name' => $faker->firstNameFemale(),
                'email' => $faker->email(),
                'message' => $faker->paragraph(),
            ]);

        }
    }
}
