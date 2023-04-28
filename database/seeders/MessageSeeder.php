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
                'phone_number' => null
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'Quanti bagni ci sono nella casa?',
                'phone_number' => null
            ],
            [
                'name' => 'Piero',
                'email' => 'piero@gmail.com',
                'message' => 'C\'è un posto auto incluso nell\'affitto?',
                'phone_number' => null
            ],
            [
                'name' => 'Francesca',
                'email' => 'francesca@gmail.com',
                'message' => 'La casa è completamente arredata?',
                'phone_number' => null
            ],
            [
                'name' => 'Marco',
                'email' => 'marco@gmail.com',
                'message' => 'Qual è la durata minima dell\'affitto?',
                'phone_number' => null
            ],
            [
                'name' => 'Maddalena',
                'email' => 'maddalena@gmail.com',
                'message' => 'Ci sono animali domestici ammessi?',
                'phone_number' => null
            ],
            [
                'name' => 'Esteban',
                'email' => 'esteban@gmail.com',
                'message' => 'Ci sono restrizioni sull\'uso di determinati elettrodomestici?',
                'phone_number' => null
            ],
            [
                'name' => 'Mariachiara',
                'email' => 'maryclaire@gmail.com',
                'message' => 'C\'è un deposito cauzionale richiesto?',
                'phone_number' => null
            ],
            [
                'name' => 'Fulvio',
                'email' => 'fulvio@gmail.com',
                'message' => 'Qual è il costo mensile tutt\'incluso?',
                'phone_number' => null
            ],
            [
                'name' => 'Sara',
                'email' => 'sara@gmail.com',
                'message' => 'La casa è in una zona residenziale tranquilla?',
                'phone_number' => null
            ],
            [
                'name' => 'Lorenzo',
                'email' => 'lorenzo@gmail.com',
                'message' => 'Qual è il preavviso richiesto per la cancellazione dell\'affitto?',
                'phone_number' => null
            ],
            [
                'name' => 'Giuseppina',
                'email' => 'giuseppina@gmail.com',
                'message' => 'È possibile avere ospiti in casa?',
                'phone_number' => null
            ],
            [
                'name' => 'Hector',
                'email' => 'hector@gmail.com',
                'message' => 'Quali servizi pubblici si trovano nelle vicinanze?',
                'phone_number' => null
            ],
            [
                'name' => 'Federica',
                'email' => 'federica@gmail.com',
                'message' => 'Quanto è vicina la casa alle principali zone di svago della città?',
                'phone_number' => null
            ],
            [
                'name' => 'Roberto',
                'email' => 'roberto@gmail.com',
                'message' => 'C\'è una lavatrice e/o asciugatrice disponibile?',
                'phone_number' => null
            ],
            [
                'name' => 'Enza',
                'email' => 'enza@gmail.com',
                'message' => 'C\'è una terrazza o un giardino attiguo alla casa?',
                'phone_number' => null
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'È possibile affittare la casa anche per brevi periodi?',
                'phone_number' => null
            ],
            [
                'name' => 'Giovanni',
                'email' => 'giovanni@gmail.com',
                'message' => 'Ci sono regole specifiche per l\'uso della cucina?',
                'phone_number' => null
            ],
            [
                'name' => 'Anna',
                'email' => 'anna@gmail.com',
                'message' => 'Quali servizi di trasporto pubblico sono disponibili nelle vicinanze?',
                'phone_number' => null
            ],
            [
                'name' => 'Carla',
                'email' => 'carla@gmail.com',
                'message' => 'L\'affitto include le utenze?',
                'phone_number' => null
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
