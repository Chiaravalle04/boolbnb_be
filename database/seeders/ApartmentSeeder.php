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
                'title' => 'Casa Petra',
                'description' => "  Casa Petra è una casa del XVII secolo recuperata nel bel mezzo del quartiere storico di Milano, Baggio.
                                    L'appartamento degli ospiti, al piano terra, è composto da uno spazio aperto con salotto, cucina e un comodo divano letto per due persone e una camera matrimoniale separata. È possibile completare l'alloggio con un lettino aggiuntivo per bambini o un lettino per bambini. Il cortile unico di Casa Petra, incorniciato dalle antiche mura della Chiesa di Sant'Apollinare Vecchia costruita nell'anno 1000, è aperto ai nostri ospiti.",
                'price' => 50,
                'availability' => true,
                'cover' => 'apartments/casa-petra.jpg',
                'type' => 'Appartamento',
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
                'title' => 'Modern Design Loft',
                'description' => "Questo loft ti accoglie con un ingresso che vanta un corridoio fiancheggiato da pannelli fonoassorbenti e luci a LED, creando un'atmosfera stimolante mentre sei guidato verso la sala principale.
                                    La sala principale è uno spazio aperto luminoso e ampio con due grandi lucernari e due finestre, con una cucina di design completamente attrezzata con elettrodomestici moderni.
                                    Sul lato destro del corridoio d'ingresso ti aspetta una capiente cabina armadio, completa di lavatrice e asciugatrice per una maggiore comodità.
                                    Il bagno, altrettanto elegante e completamente attrezzato, aggiunge alle lussuose caratteristiche del loft.",
                'price' => 67,
                'availability' => true,
                'cover' => 'apartments/modern-loft-milano.jpg',
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
                'title' => 'Casa Telù',
                'description' => "Bilocale composto da salotto con divano letto matrimoniale, tv, Wifi, tavolo e balcone. Cucinotto con terrazzino, frigo e freezer (no lavastoviglie), forno e microonde; disimpegno, bagno finestrato con comoda doccia e cromoterapia, ampia e silenziosa camera matrimoniale.
                                    A disposizione box singolo.
                                    Aria condizionata.",
                'price' => 136,
                'availability' => true,
                'cover' => 'apartments/casa-telu.jpg',
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
                'title' => 'Soggiorno e Camera letto incantevoli a Brera',
                'description' => "Vi aspettiamo al primo piano di una palazzina della vecchia Brera che fino a pochi mesi fa era la nostra abitazione, per questo ogni ambiente è comodo, accogliente e perfettamente funzionale
                                - il soggiorno ha due ampie finestre sulla caratteristica via che conduce a Brera, un comodo divano letto e un tavolino da lavoro
                                - la cucina è disposta lungo la parete laterale e perfettamente attrezzata
                                - la camera da letto è matrimoniale e separata dal soggiorno
                                - il bagno ha un disimpegno con lavatrice",
                'availability' => true,
                'cover' => 'apartments/casa-brera.jpeg',
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
                'title' => "Happy Place Vanchiglia (Centro di Torino)",
                'description' => "Trascorri la tua vacanza in totale relax grazie al confort che garantiamo per farvi sentire come a casa. Un soggiorno che vi rimarrà nel cuore,grazie alla cura dei dettagli e alla sua ottima posizione. L’appartamento si trova in una della zone più suggestiva del centro situata in un punto strategico a 2 passi da Piazza Vittorio e la
                                    Mole Antonelliana fino a raggiungere a piedi la Torino Barocca. Zona caratterizzata per i noti locali dove poter prendere un tranquillo aperitivo e ristoranti tipici",
                'price' => 49,
                'availability' => true,
                'cover' => 'apartments/casa-piazza-vitto.jpg',
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
                'cover' => 'apartments/riserva-naturale.jpg',
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
                'cover' => 'apartments/masseria-paradiso.jpg',
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
                'title' => 'Suite Reali di Milano - Brera Bilocale',
                'description' => "Bilocale di 50 mq (per 2, 3 e 4 persone) con interni moderni e raffinati è composto da soggiorno con cucina , camera matrimoniale e bagno.
                                    La cucina è dotata di frigorifero, piano cottura, forno, lavastoviglie, tostapane, bollitore elettrico e macchina da caffè.
                                    Nell’ampio soggiorno troviamo un divano letto matrimoniale e nel bagno privato con doccia, prodotti da bagno e asciugacapelli.
                                    Dotazioni: aria condizionata, 2 televisori LCD/plasma, Wi Fi , cassaforte, lavatrice, ferro e asse da stiro.",
                'price' => 115,
                'availability' => true,
                'cover' => 'apartments/suite-reali.jpg',
                'type' => 'Appartamento',
                'latitude' => '45.4789',
                'longitude' => '9.2254',
                'address' => 'Via Verdi 12, Milano',
                'room' => 2,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 50,
                'visibility' => true
            ],
            [
                'title' => 'Villa vista lago con terrazza e piscina',
                'description' => "Villa Le Muse è un luogo meraviglioso situato sulle prime colline di Torri del Benaco, dove potrete ammirare una splendida vista lago e raggiungere il paese in pochi minuti di macchina o a piedi facendo una bella passeggiata, (circa una ventina di minuti) per godere del porticciolo e delle altre attrazioni della cittadina.",
                'cover' => 'apartments/villa-lago.jpg',
                'type' => 'Villa',
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
                'title' => 'Piazza di Spagna nice and comfy apartment',
                'description' => "Appartamento di 50 mq, con travi a vista, dotato di soggiorno con divano, angolo cottura accessoriato, bagno con doccia e una camera da letto matrimoniale. L'intero appartamento ha la connessione wi fi gratuita e l'aria condizionata e si trova in un primo piano a pochissimi passi da Piazza di Spagna, famosa per l'affascinante scalinata di Trinita' dei Monti e per le numerose vie dello shopping intorno.",
                'price' => 35,
                'availability' => true,
                'cover' => 'apartments/casa-roma.jpg',
                'type' => 'Appartamento',
                'latitude' => '41.9028',
                'longitude' => '12.4964',
                'address' => 'Via del Corso 10, Roma',
                'room' => 2,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 50,
                'visibility' => true
            ],
            [
                'title' => 'Sea view apartment',
                'description' => "Delightful 50m2 one bedroom apartment with private terrace and panoramic view of the city. The apartment is located on the fourth floor of a historic building in the heart of the historic centre, a few steps from the main monuments and museums of the city. The apartment has been recently renovated and tastefully furnished, maintaining the original features of the building, such as the exposed wooden beams and the terracotta floor. The apartment consists of a living room with fully equipped kitchenette, a double bedroom and a modern bathroom with shower. The living room leads directly to the private terrace, equipped with table, chairs and deck chairs, ideal for enjoying the view over the city and relaxing in the sun. The apartment is equipped with air conditioning, flat screen TV, washing machine, hairdryer and high speed Wi-Fi connection. The location of the apartment is ideal for discovering the charm of the city on foot, strolling through the narrow streets of the historic center and savoring the local cuisine in the numerous restaurants and trattorias in the area. An unforgettable experience for those who want to experience the city in an authentic and romantic way.",
                'price' => 63,
                'availability' => true,
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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
                'cover' => 'apartments/app.milano.webp',
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

