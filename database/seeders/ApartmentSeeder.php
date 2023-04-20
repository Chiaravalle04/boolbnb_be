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
    public function run()
    
    {
        
    

        $apartments = [
            [
                'title' => 'Condo in Montenapoleone',
                'description' => "Beautiful apartment in the center of Milan within the fashion district, just renovated with pieces of art and design.
                                    Ideal for a holiday or for work.
                                    double bedroom with extra comfort mattress and 4 pillows . TV, living room with fully equipped kitchen, TV and sofa.",
                'price' => 50,
                'availability' => true,
                'cover' => 'condo-in-montenapoleone.jpg',
                'type' => 'Hotel',
                'latitude' => '45.468316',
                'longitude' => '9.195161',
                'address' => 'Via Monte Napoleone, Milano',
                'room' => 2,
                'bed' => 4,
                'bathroom' => 1,
                'square_meters' => 100,
                'visibility' => true,
            ],
            [
                'title' => 'Confort apartment Porta Genova',
                'description' => "You will be staying in the heart of Porta Genova, a bohemian neighborhood that stretches along the Naviglio Grande , boasts a rich selection of outdoor restaurants, pubs and aperitif bars. Convenient to get around with all the public transit nearby .",
                'price' => 67,
                'availability' => true,
                'cover' => 'porta-genova-mi.jpg',
                'type' => 'Appartamento',
                'latitude' => '45.453120',
                'longitude' => '9.170197',
                'address' => "Porta Genova, Milano",
                'room' => 2,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 75,
                'visibility' => true,
            ],
            [
                'title' => 'House outside Milan',
                'description' => "Apartment in a dream location for a romantic stay. Located on the top floor, this two-room apartment offers stunning views of the valley. The couple's jacuzzi, located in front of the panoramic window, is ideal for admiring the starry sky at night or to surprise you with the blue shades of the sky, at every hour of the day, while the private balcony is just perfect for a sunset aperitif. The apartment can accommodate up to 2 adults. Children are not allowed",
                'price' => 136,
                'availability' => true,
                'cover' => 'villa-outside-mi.jpg',
                'type' => 'Appartamento',
                'latitude' => '45.518903',
                'longitude' => '9.346972',
                'address' => 'VIa Guido Miglioli, Cernusco sul naviglio',
                'room' => 6,
                'bed' => 9,
                'bathroom' => 4,
                'square_meters' => 320,
                'visibility' => true,
            ],
            [
                'title' => 'Condo in Brera',
                'description' => "Stylish and refined super penthouse Sunrise to Sunset located on the renowned Via Manzoni. Ideal for short stays in the name of luxury and privacy. The space: direct entrance to the sleeping area, extra comfortable sofa bed with 20 cm mattress, folding technology to open and close in one movement.
                From the living/sleeping area you will have access to the kitchen equipped with microwave, coffee maker, kettle as well as a two-burner induction hob and everything you need to prepare your favorite meals. The kitchen connects to a small space with two armchairs. The solution makes the presence of two terraces unique: the main one served by comfortable seats thanks to the presence of several cushioned seats as well as a sofa two outdoor seats and a table with additional two chairs; the secondary one with an enchanting cathedral view is furnished with a two-seater wooden table. Please also contact us for information about the private parking in the area.",
                'price' => 56,
                'availability' => true,
                'cover' => 'brera-condo.jpg',
                'type' => 'Stanza',
                'latitude' => '45.469299',
                'longitude' => '9.186868',
                'address' => 'Via ciovasso, Milano',
                'room' => 2,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 50,
                'visibility' => true,
            ],
            [
                'title' => "House near Piazza Vittorio & Mole Antonelliana",
                'description' => "Splendid penthouse with panoramic terrace at the seventh floor of an elegant building, fully equipped and fully furnished.Idea for short term rent. Welcome in Milan! The apartment has two bedrooms and two bathrooms. The second bedroom is equipped with a sofa bed. The living room is large and bright and the terrace has a splendid view over the city.",
                'price' => 49,
                'availability' => true,
                'cover' => 'apartment-city-life.jpg',
                'type' => 'Villa',
                'latitude' => '45.068812',
                'longitude' => '7.698370',
                'address' => 'Via Giulia di Barolo, Torino',
                'room' => 2,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 100,
                'visibility' => true,
            ],
            [
                'title' => "Dimora Natura-Riserva Naturale Valle di Bondo",
                'description' => "Natura è ciò che siamo. Soggiornare nella Riserva Naturale Valle di Bondo, tra ampi prati e verdi boschi che dominano il lago di Garda, è armonia. Lontani dalla folla, a 600m di altitudine, ma vicini alle sue spiagge, solo 9km, Tremosine sul Garda regala panorami mozzafiato, una cultura contadina e tanto sano sport. Pet-friendly significa che accettiamo gli animali, ma soprattutto che li amiamo.",
                'cover' => 'dimora-natura.jpg',
                'type' => 'Chalet',
                'price' => 77,
                'availability' => true,
                'latitude' => '45.7642',
                'longitude' => '10.7408',
                'address' => 'Piazza Guglielmo Marconi, 1, Tremosine sul Garda, Brescia, Italia',
                'room' => 4,
                'bed' => 4,
                'bathroom' => 2,
                'square_meters' => 60,
                'visibility' => true,
            ],
            [
                'title' => "Masseria del Paradiso",
                'description' => "Il mio alloggio è situato in centro Sicilia, immerso nella campagna dell'entroterra Siciliano.
                Se cerchi un alloggio dove rilassarti, lontano dal frastuono della città, intimo, dove respirare aria pulita e goderti i colori e i profumi della nostra bella isola, allora il mio alloggio è perfetto per te!
                E' adatto a coppie, avventurieri solitari e famiglie con bambini ed essendo situato al centro dell'isola, offre una comoda soluzione per chi vuole raggiungere tutte le parti della Sicilia.",
                'price' => 110,
                'availability' => true,
                'cover' => 'masseria-del-paradiso.jpg',
                'type' => 'Chalet',
                'latitude' => '37.4368',
                'longitude' => '14.0769',
                'address' => 'Contrada Roccella, SS122, Roccella, Caltanissetta, Italia',
                'room' => 5,
                'bed' => 3,
                'bathroom' => 2,
                'square_meters' => 80,
                'visibility' => true,
            ],
            [
                'title' => 'Classy downtown apartment, Milan',
                'description' => "Bright, completely renovated 100 m2 apartment, furnished in a modern style and equipped with every comfort.
                It is located in a quiet area just a few minutes walk from the historic centre. The large living room is elegantly furnished and has
                of a comfortable sofa, a flat screen TV and a dining area with a solid wood table. The modern and fully equipped kitchen
                it is equipped with a fridge, freezer, oven, hob and dishwasher. The two bedrooms are spacious and comfortable,
                both equipped with double beds with high quality mattresses and spacious wardrobes. The bathroom has been recently remodeled
                and is equipped with a large shower, a modern sink and a WC. Furthermore, the apartment has a washing machine, a hair dryer,
                an iron and a high-speed Wi-Fi connection. Ideal for a family or a group of friends who want to spend a
                unforgettable holiday in the beautiful city of Milan.",
                'price' => 115,
                'availability' => true,
                'cover' => 'appartamento-elegante-vicino-al-centro.jpg',
                'type' => 'Appartamento',
                'latitude' => '45.4789',
                'longitude' => '9.2254',
                'address' => 'Via Verdi 12, Milano',
                'room' => 5,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 100,
                'visibility' => true
            ],
            [
                'title' => 'Apartment gorgeous view',
                'description' => "Large 150 m2 apartment with a spectacular view of the city and the surrounding mountains. It has a large equipped terrace and private parking. Located in a quiet and well served residential area, the apartment has been recently renovated and furnished in a modern and elegant style. The large living room is bright and welcoming, with a large window offering a breathtaking view of the city. The dining area features a large solid wood table and comfortable upholstered chairs. The modern and fully equipped kitchen comes with all necessary appliances including a fridge, freezer, oven, hob and dishwasher. The three bedrooms are spacious and comfortable, all featuring double beds with high quality mattresses and large wardrobes. The two bathrooms have been recently refurbished and are equipped with a shower, modern sink and WC. Furthermore, the apartment has a washing machine, a hair dryer, an iron and a high-speed Wi-Fi connection. Ideal for a family or a group of friends who want to spend an unforgettable holiday in the splendid city of Trento.",
                'cover' => 'appartamento-panoramico-con-terrazza.jpg',
                'type' => 'Appartamento',
                'price' => 125,
                'availability' => true,
                'latitude' => '46.0663',
                'longitude' => '11.1166',
                'address' => 'Via dei Tigli 22, Trento',
                'room' => 6,
                'bed' => 3,
                'bathroom' => 2,
                'square_meters' => 150,
                'visibility' => true
            ],
            [
                'title' => 'Cozy tiny apartment',
                'description' => "Spacious and bright 80m2 apartment with 2 bedrooms and 2 bathrooms. Ideal for families or groups of friends who wish to stay in a quiet but well-served area. The apartment is located on the second floor of a modern building and consists of a large living room with dining area and fully equipped kitchenette, 2 double bedrooms with built-in wardrobes, 2 modern bathrooms with shower and a balcony overlooking the city . The apartment is tastefully furnished and equipped with every comfort, including air conditioning, flat screen TV, washing machine, dryer, iron, ironing board, hair dryer and high speed Wi-Fi connection. The location of the apartment is ideal for reaching the historic center of the city in just a few minutes, as well as the main shopping centers and green areas. An excellent choice for those who want a comfortable and relaxing stay.",
                'price' => 35,
                'availability' => true,
                'cover' => 'monolocale-accogliente-in-centro.jpg',
                'type' => 'Appartamento',
                'latitude' => '41.9028',
                'longitude' => '12.4964',
                'address' => 'Via del Corso 10, Roma',
                'room' => 2,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 30,
                'visibility' => true
            ],
            [
                'title' => 'Sea view apartment',
                'description' => "Delightful 50m2 one bedroom apartment with private terrace and panoramic view of the city. The apartment is located on the fourth floor of a historic building in the heart of the historic centre, a few steps from the main monuments and museums of the city. The apartment has been recently renovated and tastefully furnished, maintaining the original features of the building, such as the exposed wooden beams and the terracotta floor. The apartment consists of a living room with fully equipped kitchenette, a double bedroom and a modern bathroom with shower. The living room leads directly to the private terrace, equipped with table, chairs and deck chairs, ideal for enjoying the view over the city and relaxing in the sun. The apartment is equipped with air conditioning, flat screen TV, washing machine, hairdryer and high speed Wi-Fi connection. The location of the apartment is ideal for discovering the charm of the city on foot, strolling through the narrow streets of the historic center and savoring the local cuisine in the numerous restaurants and trattorias in the area. An unforgettable experience for those who want to experience the city in an authentic and romantic way.",
                'price' => 63,
                'availability' => true,
                'cover' => 'appartamento-con-vista-sul-mare.jpg',
                'type' => 'Stanza',
                'latitude' => '43.7384',
                'longitude' => '10.4514',
                'address' => 'Via della Spiaggia 8, Livorno',
                'room' => 4,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 80,
                'visibility' => true
            ],
            [
                'title' => 'Elegant house in Tortona area',
                'description' => "Elegant and refined apartment in the heart of Via Savona, one of the most fashionable and trendy areas of Milan, characterized by stores, trendy clubs, art galleries and restaurants with Italian and international cuisine. Opposite Mudec, a stone's throw from the Navigli and a few minutes from the Duomo, you'll be staying in a typical Milanese house, you'll be in the heart of the city, in one of the most served, vibrant and cosmopolitan areas of all Milan.",
                'price' => 132,
                'availability' => true,
                'cover' => 'appartamento-tortona.jpg',
                'type' => 'Villa',
                'latitude' => '45.452076',
                'longitude' => '9.163807',
                'address' => 'Via Tortona 27, Milano',
                'room' => 5,
                'bed' => 4,
                'bathroom' => 2,
                'square_meters' => 95,
                'visibility' => true
            ],
            [
                'title' => 'PoP Studio,tiny and cute-few minutes by Navigli',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 132,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Stanza',
                'latitude' => '45.4448622',
                'longitude' => '9.143070',
                'address' => 'Via Lodovico il Moro, Milano',
                'room' => 5,
                'bed' => 4,
                'bathroom' => 2,
                'square_meters' => 95,
                'visibility' => true
            ],

            [
                'title' => 'Casa test Roma 2',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 48,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Stanza',
                'latitude' => '41.88634980451772',
                'longitude' => '12.474584130570012',
                'address' => 'Via Anicia, 23, 00153 Roma RM',
                'room' => 2,
                'bed' => 4,
                'bathroom' => 1,
                'square_meters' => 50,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Firenze',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 110,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Villa',
                'latitude' => '43.77182301189951',
                'longitude' => '11.256586539272428',
                'address' => 'Via del Corso, 50122 Firenze FI',
                'room' => 5,
                'bed' => 8,
                'bathroom' => 3,
                'square_meters' => 247,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Firenze 2',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 290,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Hotel',
                'latitude' => '43.774780762663625',
                'longitude' => '11.252080025776955',
                'address' => 'Via del Giglio, 53R, 50123 Firenze FI',
                'room' => 7,
                'bed' => 14,
                'bathroom' => 7,
                'square_meters' => 561,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Palermo',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 33,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Stanza',
                'latitude' => '38.11691600901651',
                'longitude' => '13.360878723719031',
                'address' => 'Via Maqueda, 90133 Palermo PA',
                'room' => 1,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 45,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Palermo2',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 374,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Villa',
                'latitude' => '38.144860338581296',
                'longitude' => '13.369420104398435',
                'address' => 'Salita Belmonte, 43, 90142 Palermo PA',
                'room' => 30,
                'bed' => 30,
                'bathroom' => 30,
                'square_meters' => 1369,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Aosta',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 550,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Chalet',
                'latitude' => '45.735064412557435',
                'longitude' => '7.309165260534418',
                'address' => 'Via Rue Liconi, 1, 11100 Aosta AO',
                'room' => 6,
                'bed' => 10,
                'bathroom' => 4,
                'square_meters' => 341,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Courmayeur',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 400,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Chalet',
                'latitude' => '45.79719565438114',
                'longitude' => '6.968934497025371',
                'address' => 'Via dei Bagni, 7VIA DEI BAGNI, 11013 Courmayeur AO',
                'room' => 12,
                'bed' => 8,
                'bathroom' => 3,
                'square_meters' => 670,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Venezia',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 1300,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Hotel',
                'latitude' => '45.43435580607328',
                'longitude' => '12.33197108196531',
                'address' => 'Calle de la Mandola, 30100 Venezia VE',
                'room' => 15,
                'bed' => 15,
                'bathroom' => 15,
                'square_meters' => 820,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Trieste',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 72,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Appartamento',
                'latitude' => '45.64648737793609',
                'longitude' => '13.778264968184233',
                'address' => 'Via della Madonnina, 12, 34131 Trieste TS',
                'room' => 3,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 65,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Foggia',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 29,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Stanza',
                'latitude' => '41.461542655779844',
                'longitude' => '15.547627125685985',
                'address' => 'Via Graticola, 36, 71121 Foggia FG',
                'room' => 1,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 21,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Gallipoli',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 93,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Appartamento',
                'latitude' => '40.054920951234685',
                'longitude' => '17.988127567963254',
                'address' => 'Via Matteo Calò, 73014 Gallipoli LE',
                'room' => 4,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 99,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Cagliari',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 330,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Villa',
                'latitude' => '39.21730931592477',
                'longitude' => '9.259195996767332',
                'address' => 'Via S\'Oru e Mari, 102, 09045 Quartu Sant\'Elena CA',
                'room' => 13,
                'bed' => 7,
                'bathroom' => 4,
                'square_meters' => 450,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Bologna',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 120,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Appartamento',
                'latitude' => '44.494603923371805',
                'longitude' => '11.347321427964431',
                'address' => 'Via S. Vitale, 2, 40125 Bologna BO',
                'room' => 5,
                'bed' => 2,
                'bathroom' => 2,
                'square_meters' => 85,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Tropea',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 861,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Villa',
                'latitude' => '38.678694',
                'longitude' => '15.895619',
                'address' => 'Via Lungomare, 89861 Tropea VV',
                'room' => 9,
                'bed' => 5,
                'bathroom' => 4,
                'square_meters' => 620,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Aquila',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 225,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Chalet',
                'latitude' => '42.350105323577694',
                'longitude' => '13.398547610381145',
                'address' => 'Via Patini, 67100 L\'Aquila AQ',
                'room' => 12,
                'bed' => 7,
                'bathroom' => 5,
                'square_meters' => 286,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Sanremo',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 148,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Appartamento',
                'latitude' => '43.81761147068769',
                'longitude' => '7.777505652498528',
                'address' => 'Via Giacomo Matteotti, 210/A, 18038 Sanremo IM',
                'room' => 3,
                'bed' => 2,
                'bathroom' => 2,
                'square_meters' => 110,
                'visibility' => true
            ],
            [
                'title' => 'Casa test Napoli',
                'description' => "Tiny but cozy and joyful flat studio facing the Naviglio Canal,only few minutes of tram by the heart of Naviglia/Darsena. Small but cozy Flat Studio in front of Naviglio(canal)in Via Lodovico il Moro,10 minutes by tram from the hear of city mondanity,Navigli,and the new renovated old port of Milan,'Darsena',that became again the favourite area of tourists and citizen for taking a walk outside,cause of many events,all the nice bar and restaurants happening there. The flat is full of colours to transfer you some more joyness and good vibrations.It's pretty small(30mq),but you got everything you will need you in short stay,from kitchen to waching machine ecc.",
                'price' => 63,
                'availability' => true,
                'cover' => 'appartamento-navigli.jpg',
                'type' => 'Appartamento',
                'latitude' => '40.84299067955602',
                'longitude' => '14.247808588128752',
                'address' => 'Via Concezione a Monte Calvario, 55, 80134 Napoli NA',
                'room' => 2,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 71,
                'visibility' => true
            ],

    
        ];

        foreach ($apartments as $apartment) {

            $user_id = User::inRandomOrder()->first()->id;

            $newApartment = new Apartment();
            $newApartment->title = $apartment['title'];
            $newApartment->user_id = $user_id;
            $newApartment->slug = Str::slug($newApartment->title);
            $newApartment->description = $apartment['description'];
            $newApartment->cover = $apartment['cover'];
            $newApartment->type = $apartment['type'];
            $newApartment->latitude = $apartment['latitude'];
            $newApartment->longitude = $apartment['longitude'];
            $newApartment->address = $apartment['address'];
            $newApartment->room = $apartment['room'];
            $newApartment->bed = $apartment['bed'];
            $newApartment->bathroom = $apartment['bathroom'];
            $newApartment->square_meters = $apartment['square_meters'];
            $newApartment->visibility = $apartment['visibility'];
            $newApartment->price = $apartment['price'];
            $newApartment->availability = $apartment['availability'];

            $newApartment->save();
            $newApartment->slug = $newApartment->slug . "-$newApartment->id";
            $newApartment->update();
        }
    }
}

