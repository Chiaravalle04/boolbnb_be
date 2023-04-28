<?php

namespace Database\Seeders;

use App\Models\Apartment;
use App\Models\Message;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Helpers
// use Faker\Generator as Faker;

class MessageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $messages = [
            [
                'name' => 'Paolo',
                'email' => 'paolo@gmail.com',
                'message' => 'Qual è il periodo di disponibilità per l\'affitto?',
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'Quanti bagni ci sono nella casa?',
            ],
            [
                'name' => 'Piero',
                'email' => 'piero@gmail.com',
                'message' => 'C\'è un posto auto incluso nell\'affitto?',
            ],
            [
                'name' => 'Francesca',
                'email' => 'francesca@gmail.com',
                'message' => 'La casa è completamente arredata?',
            ],
            [
                'name' => 'Marco',
                'email' => 'marco@gmail.com',
                'message' => 'Qual è la durata minima dell\'affitto?',
            ],
            [
                'name' => 'Maddalena',
                'email' => 'maddalena@gmail.com',
                'message' => 'Ci sono animali domestici ammessi?',
            ],
            [
                'name' => 'Esteban',
                'email' => 'esteban@gmail.com',
                'message' => 'Ci sono restrizioni sull\'uso di determinati elettrodomestici?',
            ],
            [
                'name' => 'Mariachiara',
                'email' => 'maryclaire@gmail.com',
                'message' => 'C\'è un deposito cauzionale richiesto?',
            ],
            [
                'name' => 'Fulvio',
                'email' => 'fulvio@gmail.com',
                'message' => 'Qual è il costo mensile tutt\'incluso?',
            ],
            [
                'name' => 'Sara',
                'email' => 'sara@gmail.com',
                'message' => 'La casa è in una zona residenziale tranquilla?',
            ],
            [
                'name' => 'Lorenzo',
                'email' => 'lorenzo@gmail.com',
                'message' => 'Qual è il preavviso richiesto per la cancellazione dell\'affitto?',
            ],
            [
                'name' => 'Giuseppina',
                'email' => 'giuseppina@gmail.com',
                'message' => 'È possibile avere ospiti in casa?',
            ],
            [
                'name' => 'Hector',
                'email' => 'hector@gmail.com',
                'message' => 'Quali servizi pubblici si trovano nelle vicinanze?',
            ],
            [
                'name' => 'Federica',
                'email' => 'federica@gmail.com',
                'message' => 'Quanto è vicina la casa alle principali zone di svago della città?',
            ],
            [
                'name' => 'Roberto',
                'email' => 'roberto@gmail.com',
                'message' => 'C\'è una lavatrice e/o asciugatrice disponibile?',
            ],
            [
                'name' => 'Enza',
                'email' => 'enza@gmail.com',
                'message' => 'C\'è una terrazza o un giardino attiguo alla casa?',
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'È possibile affittare la casa anche per brevi periodi?',
            ],
            [
                'name' => 'Giovanni',
                'email' => 'giovanni@gmail.com',
                'message' => 'Ci sono regole specifiche per l\'uso della cucina?',
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'Quali servizi di trasporto pubblico sono disponibili nelle vicinanze?',
            ],
            [
                'name' => 'Carla',
                'email' => 'carla@gmail.com',
                'message' => 'L\'affitto include le utenze?',
            ],

        ];

        foreach ($messages as $message) {
            $newMessage = new Message();
            $newMessage->apartment_id = Apartment::inRandomOrder()->first()->id;
            $newMessage->name = $message['name'];
            $newMessage->email = $message['email'];
            $newMessage->message = $message['message'];
            $newMessage->phone_number = $message['phone_number'];
            $newMessage->save();
        }
    }
}
