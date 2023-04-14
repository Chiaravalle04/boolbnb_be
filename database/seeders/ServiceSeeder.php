<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Service;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $services = [
            'Wi-Fi',
            'Parcheggio',
            'Aria condizionata',
            'Riscaldamento',
            'Letto singolo',
            'Letto matrimoniale',
            'Cucina',
            'Tv',
            'Lavatrice',
            'Balcone',
            'Ascensore',
            'Vasca da bagno',
            'Piscina'
        ];
        
        foreach ($services as $service) {

            Service::create([
                'name' => $service
            ]);

        }
    }
}
