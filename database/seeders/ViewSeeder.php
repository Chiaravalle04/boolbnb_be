<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\View;
use App\Models\Apartment;

// Helpers
use Faker\Generator as Faker;
class ViewSeeder extends Seeder
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

            View::create([
                'apartment_id' => $apartmentId,
                'user_ip' => $faker->ipv4(),
                'viewed_at' => $faker->dateTime($max = 'now', $timezone = null),
            ]);

        }
    }
}
