<?php

namespace Database\Seeders;

use App\Models\Sponsorship;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SponsorshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sponsorships = [
            [
                'name' => 'Standard',
                'price' => 2.99,
                'duration' => 24,
            ],
            [
                'name' => 'Plus',
                'price' => 5.99,
                'duration' => 72,
            ],
            [
                'name' => 'Premium',
                'price' => 9.99,
                'duration' => 144,
            ],
        ];

        foreach ($sponsorships as $sponsorship) {

            Sponsorship::create([
                'name' => $sponsorship['name'],
                'price' => $sponsorship['price'],
                'duration' => $sponsorship['duration']
            ]);

        }

    }
}
