<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Sponsorship;
use Carbon\Carbon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class ApartmentSponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $apartments = Apartment::all();

        $sponsorships = Sponsorship::all()->pluck('id');

        foreach ($faker->randomElements($apartments, 8) as $apartment) {
            $apartment->sponsorships()->attach($faker->randomElement($sponsorships));
        }
    }
}
