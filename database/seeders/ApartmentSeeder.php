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
                'price' => 49,
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
                'title' => 'Casa Montebello con bel panorama',
                'description' => "Piccolo appartamento a due passi dal lungomare e dal centro situato in  zona residenziale molto tranquilla e silenziosa, ciò che fa la differenza è una bella vista e la mia disponibilità a fornirvi tutte le informazioni necessarie per trascorrere un buon soggiorno nella città.
                Comodo anche per chi deve imbarcarsi (5 minuti dal porto)",
                'price' => 63,
                'availability' => true,
                'cover' => 'apartments/livorno-casa.jpg',
                'type' => 'Stanza',
                'latitude' => '43.7384',
                'longitude' => '10.4514',
                'address' => 'Via della Spiaggia 8, Livorno',
                'room' => 2,
                'bed' => 2,
                'bathroom' => 1,
                'square_meters' => 60,
                'visibility' => true
            ],
            [
                'title' => 'Design District- Navigli',
                'description' => "Apartment Milano Via Tortona, è un mini appartamento per due persone con letto matrimoniale , cucina attrezzata a vista.
                                    E' situata all'interno di un palazzo in Via Tortona, con accesso anche da Via Savona tramite il giardino condominiale.
                                    La camera, dotata di Smart TV a schermo piatto , wi-FI gratuito, bagno privato completo di doccia, set di asciugamani e asciugacapelli, offre in cucina una macchina da caffè ,snack per la colazione , piatti e bicchieri.",
                'price' => 132,
                'availability' => true,
                'cover' => 'apartments/tortona-milano.jpg',
                'type' => 'Villa',
                'latitude' => '45.452076',
                'longitude' => '9.163807',
                'address' => 'Via Tortona 27, Milano',
                'room' => 2,
                'bed' => 1,
                'bathroom' => 2,
                'square_meters' => 30,
                'visibility' => true
            ],
            [
                'title' => 'Moro Canal Grande - Navigli',
                'description' => "Meraviglioso monolocale di circa 40Mq appena ristrutturato, con wifi e aria condizionata, posto al terzo piano di uno stabile di ringhiera della vecchia Milano a due passi della fermata del Bus 90. Si compone di:
                                    - un luminoso soggiorno con cucina a vista completamente accessoriata, dotata di piano cottura ad induzione, frigorifero con congelatore, lavastoviglie, forno elettrico, Macchina del Caffè e bollitore Thé. Presente tavolo da pranzo per quattro persone, una zona Notte con comodo letto matrimoniale e Smart Tv da 43, un Bagno dotato di tutti i servizi essenziali, box doccia, Bidet, Wc e phon",
                'price' => 132,
                'availability' => true,
                'cover' => 'apartments/canal-grande.jpeg',
                'type' => 'Stanza',
                'latitude' => '45.4448622',
                'longitude' => '9.143070',
                'address' => 'Via Lodovico il Moro, Milano',
                'room' => 2,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 40,
                'visibility' => true
            ],

            [
                'title' => 'Arancio Apartments N° 9',
                'description' => "Situato sulla cima di un edificio che si trova in Via Anicia, questo accogliente appartamento ha una vista unica sui tetti di Roma. L'appartamento dispone di: angolo cottura, bagno con vasca, zona giorno con tv, a/c, riscaldamento e wi-fi. La terrazza di 20 mq offre l'ambiente ideale per una colazione o un pranzo all'aperto.
                L'edificio dispone di un piccolo ascensore che porta al 4 piano, di qui una scala a chiocciola conduce all'ultimo piano dove si trova l'appartamento.",
                'price' => 48,
                'availability' => true,
                'cover' => 'apartments/arancio-roma.jpg',
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
                'title' => 'Casa di campagna in Mugello',
                'description' => "Entrata indipendente, posto auto. Il cucinotto è dotato di tutto il necessario per cucinare.. olio sale e pepe
                                    Questo alloggio è una casa non un albergo...
                                    
                                    Giardino con gazebo e barbecue per deliziosi pranzi all'aperto. Nel periodo estivo frutta e verdura di stagione nell'orto riservato alla casa.
                                    
                                    Sempre a disposizione per qualsiasi informazione e consiglio.
                                    
                                    Tanta tranquillità e tanta natura a 360 gradi.
                                    
                                    In soli 35 minuti col treno si raggiunge Firenze con la possibilità di portarsi dietro le bici e girare la città in piena libertà.
                                    Via degli Dei: possibilità di navetta.
                                    Nel Mugello potete sbizzarrirvi a girovagare con le bici o a piedi lungo la pista ciclabile o nei sentieri trekking anche la frequentata Via degli Dei
                                    Visitare fattorie e acquistare prodotti tipici.
                                    Autodromo del Mugello a pochissimi km e il lago di Bilancino dove è possibile fare il bagno.
                                    Accesso per gli ospiti
                                    Gli ospiti potranno usufruire del giardino, del gazebo, del barbecue.",
                'price' => 110,
                'availability' => true,
                'cover' => 'apartments/firenze-villa.jpg',
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
                'title' => 'Residenza Quartieri Storici - 4 guests suite',
                'description' => "5 eleganti e spaziose suites appena realizzate all interno di un grande appartamento situato al primo piano di un palazzo storico fiorentino, a pochi passi dal Duomo
                                    le suites dispongono di bagno privato tv frigobar bollitore guardaroba cassaforte linea cortesia bagno biancheria wifi e un innovativo sistema domotico che controlla luce riscaldamento accesso in struttura e ingresso in camera
                                    possibilità di self check in attraverso codici e applicazione Bluetooth
                                    colazione su richiesta",
                'price' => 290,
                'availability' => true,
                'cover' => 'apartments/Residenza-Quartieri-Storici-Suites-Florence-Exterior.jpeg',
                'type' => 'Hotel',
                'latitude' => '43.774780762663625',
                'longitude' => '11.252080025776955',
                'address' => 'Via del Giglio, 53R, 50123 Firenze FI',
                'room' => 5,
                'bed' => 5,
                'bathroom' => 7,
                'square_meters' => 561,
                'visibility' => true
            ],
            [
                'title' => 'Kantuni b&b nel cuore del centro storico',
                'description' => "Il Kantuni è una piccola struttura a conduzione familiare che può ospitare un numero massimo di tre persone, quindi ideale per famiglie o gruppi di amici, ma anche per coppie o persone che viaggiano da sole.
                                    L'appartamento è composto da una camera da letto, (singola/doppia/tripla), da una sala breakfast/living e da un bagno.
                                    La camera è dotata di tutti i comfort: riscaldamento centralizzato, climatizzatore, smart TV 32'' e connessione internet free-wifi.
                                    La sala breakfast è dotata di macchina per espresso, bollitore, distributore di acqua fresca, e frigorifero.",
                'price' => 33,
                'availability' => true,
                'cover' => 'apartments/casa-palermo.jpeg',
                'type' => 'Stanza',
                'latitude' => '38.11691600901651',
                'longitude' => '13.360878723719031',
                'address' => 'Via Maqueda, 90133 Palermo PA',
                'room' => 3,
                'bed' => 4,
                'bathroom' => 4,
                'square_meters' => 45,
                'visibility' => true
            ],
            [
                'title' => 'Agriturismo Case Tabarani Ginestra',
                'description' => "Il mio alloggio è vicino al Parco delle Madonie. Ti piacerà il mio alloggio per questi motivi: la luce, la cucina, i soffitti alti, il panorama, il silenzio. Il mio alloggio è adatto a coppie, chi viaggia per lavoro, famiglie (con bambini) e amici pelosi (animali domestici).
                                    Le Case Tabarani sono quasi in cima a una collina, da esse si gode una vista panoramica amplissima dal mar Tirreno alle cime montane delle Madonie. Per la particolare posizione rispetto al mare e ai monti circostanti, il sorgere del sole e il tramonto sono spettacolarmente suggestivi.",
                'price' => 374,
                'availability' => true,
                'cover' => 'apartments/villa-palermo.jpg',
                'type' => 'Villa',
                'latitude' => '38.144860338581296',
                'longitude' => '13.369420104398435',
                'address' => 'Salita Belmonte, 43, 90142 Palermo PA',
                'room' => 5,
                'bed' => 5,
                'bathroom' => 5,
                'square_meters' => 1369,
                'visibility' => true
            ],
            [
                'title' => 'Bed and breakfast "La Pive" e tavolo d\'hôtes',
                'description' => "Colazione inclusa, B&B di 25 m2 (incollato alla nostra casa), in Vaux et Chantegrue, ingresso indipendente, tranquillo, con terrazza con vista sul Mont D'or, a 10 minuti dalla stazione di Métabief, a 15 minuti da Pontarlier, a 20 minuti dalla Svizzera. Questa incantevole camera è attrezzata per 2 persone. (Possibilità di aggiungere un letto supplementare per un bambino) . Offriamo anche soluzioni pasti che possono essere prese in loco.",
                'price' => 550,
                'availability' => true,
                'cover' => 'apartments/chalet-aosta.jpg',
                'type' => 'Chalet',
                'latitude' => '45.735064412557435',
                'longitude' => '7.309165260534418',
                'address' => 'Via Rue Liconi, 1, 11100 Aosta AO',
                'room' => 1,
                'bed' => 1,
                'bathroom' => 1,
                'square_meters' => 25,
                'visibility' => true
            ],
            [
                'title' => 'Bed & breakfast in tipico chalet savoiardo',
                'description' => "Confortevole camera in un piccolo villaggio a 800 metri di altitudine, a 10 minuti da Grand-Bornand, La Clusaz resort, a 20 minuti dal lago di Annecy, a 45 minuti da Ginevra.
                                    Ampio salotto con 1 letto 140 in alcova , 1 letto 90 in salotto, divano,
                                    Ampio bagno: vasca da bagno, cabina doccia, ingresso indipendente,
                                    soleggiato balcone privato, spazio per bici drop-off, sci, ecc.....
                                    La nostra pensione apre le sue porte a voi, per godere dei benefici della montagna.",
                'price' => 400,
                'availability' => true,
                'cover' => 'apartments/chalet-courma.jpg',
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
                'title' => 'Aparthotel Studio Staycity Serviced',
                'description' => "Staycity Venice Mestre è anche idealmente situato. È solo una breve passeggiata (0,3 km) dalla stazione di Venezia Mestre, dove i treni partono per Venezia ogni 10-15 minuti e impiegano solo 10-12 minuti. Gli ospiti possono anche facilmente raggiungere Venezia con autobus e taxi. Inoltre, l'aeroporto Marco Polo di Venezia e quello di Treviso distano rispettivamente 8,1 km e 19,4 km.",
                'price' => 1300,
                'availability' => true,
                'cover' => 'apartments/casa-venezia.jpg',
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
                'title' => 'Le Residenze dei Serravallo',
                'description' => "L'alloggio si trova a Barcola, vicino al mare, a due passi dai trasporti pubblici, a 5 minuti dalla stazione dei treni ed il centro città. L'appartamento è adatto a coppie, a chi viaggia per lavoro e a famiglie con bambini. E' composto da soggiorno con caminetto, bagno, cucina abitabile completamente attrezzata e camera da letto matrimoniale. È compresa la pulizia nei giorni feriali ed il cambio di biancheria settimanale.
                                    Sono richiesti i documenti e la tassa di soggiorno a tutti gli ospiti.",
                'price' => 72,
                'availability' => true,
                'cover' => 'apartments/casa-trieste.jpeg',
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
                'title' => 'RESIDENZA DEL SELE APPARTAMENTO',
                'description' => "Monolocale di nuovissima costruzione, moderno e di classe situato nel centro di Foggia, ideale per lunghi soggiorni, quando si cerca il comfort e il lusso di un albergo ma la quiete di una casa!! Al check-in non saremo fisicamente presenti (c’è check-in automatico, quindi l'accesso sarà in piena autonomia) ma resteremo a disposizione per indicarvi dove ci troviamo, i punti di interesse nei dintorni e come raggiungere le principali attrazioni della città. Suggeriamo buoni ristoranti dove gustare piatti tipici. Abbiamo pensato a tutto ma saremo al vostro fianco qualora aveste qualsiasi curiosità, necessità.",
                'price' => 29,
                'availability' => true,
                'cover' => 'apartments/casa-foggia.jpg',
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
                'title' => 'T B&B venti e Mari -Gallipoli Camera Tramontana',
                'description' => "B&B familiare nel cuore della città.. tra il centro storico e la città nuova.. vicino a porto, castello, cinema e teatro..non lontano dalla splendida spiaggia della Purità.. Colazione, biancheria e riordino giornaliero inclusi. La camera Tramontana dispone di bagno privato, condizionatore, tv, phon, minifrigo ed una splendida vista sul golfo di Gallipoli.",
                'price' => 93,
                'availability' => true,
                'cover' => 'apartments/casa-gallipoli.jpg',
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
                'title' => 'La terrazza di S’oru ‘e Mari',
                'description' => "bellissimo appartamento indipendente, appena ristrutturato e con terrazza situato al 1° piano di una signorile villa che si affaccia direttamente sul mare. L’appartamento presenta ingresso separato dal resto della villa ed è composto da: 1 luminosa camera matrimoniale dotata di condizionatore e 2 balconi; 1 soggiorno con sala da pranzo dotato di 2 comodi divani/letti, TV hd, condizionatore, un ampia terrazza sul mare dotata di barbecue e tavolo all’aperto; infine 1 cucina ben attrezzata ed un confortevole bagno.",
                'price' => 330,
                'availability' => true,
                'cover' => 'apartments/casa-sardegna.jpg',
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
                'title' => 'P. Santo Stefano Loft',
                'description' => "In pieno centro storico, dietro a Piazza Santo Stefano, a 5min. da Piazza Maggiore e dalle mete più suggestive di questa città medievale, potrete alloggiare in un appartamento nuovo di 50mq, sito all’interno di una corte silenziosa, completo di camera matrimoniale, Cavedio, sala con cucina, divano letto,Wi-Fi, TV4K HD e un bagno con tutti i comfort. L'appartamento dista 10min di autobus dalla Stazione Centrale dei treni, inoltre è affiancato da numerosi negozi e ristoranti prelibati.",
                'price' => 120,
                'availability' => true,
                'cover' => 'apartments/casa-bologna.jpg',
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
                'title' => 'Casa Zuleika Panoramic Hideaway',
                'description' => "Una tipica casa siciliana con panorami mozzafiato sul mare delle Eolie e sulle isole di Alicudi, Filicudi e Salina. Situata in uno dei punti più alti dell'isola di Lipari, Casa Zuleika è un luogo per rigenerare corpo e mente lontano dalla folla e dallo stress della vita normale, tra la brezza dolce e il suono degli uccelli. Fate una passeggiata tra gli aranci e i fichi d'India in giardino o godetevi un aperitivo sulla terrazza mentre guardate uno degli spettacolari tramonti che riceviamo tutto l'anno.",
                'price' => 861,
                'availability' => true,
                'cover' => 'apartments/casa-tropea.jpg',
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
                'title' => 'Tognazzi Casa Vacanze',
                'description' => "La villa si trova in una posizione panoramica, nel cuore dell'Abruzzo, a pochi Km dalle maggiori attrattive turistiche della Toscana.
                                    La villa, completamente indipendente, si sviluppa su due piani e può accogliere fino a 9 persone.
                                    Al piano terra si trovano la cucina con camino per grigliare, il salone con camino, divano letto e bagno di servizio/lavanderia.
                                    Al piano superiore 1 camera tripla, 1 camera doppia, 1 camera matrimoniale e 2 bagni. Piscina ed idromassaggio riscaldato privati.",
                'price' => 225,
                'availability' => true,
                'cover' => 'apartments/casa-aquila.jpg',
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
                'title' => 'Sanremo Amazing Apartment w/ Private Parking',
                'description' => "Accogliente monolocale con soppalco di 70 mq, in grado di ospitare fino a 6 persone, ubicato al terzo piano di uno stabile senza ascensore nel cuore di Sanremo. La proprietà è dotata di ogni comfort e un plus è sicuramente il terrazzo arredato al quinto piano, da cui è possibile intravedere il mare. La posizione è eccezionale! Siamo in via Corradi, una delle vie più belle della Città dei Fiori, con le sue piccole botteghe, caffetterie e ristoranti.",
                'price' => 148,
                'availability' => true,
                'cover' => 'apartments/casa-sanremo.jpg',
                'type' => 'Appartamento',
                'latitude' => '43.81761147068769',
                'longitude' => '7.777505652498528',
                'address' => 'Via Giacomo Matteotti, 210/A, 18038 Sanremo IM',
                'room' => 3,
                'bed' => 2,
                'bathroom' => 2,
                'square_meters' => 70,
                'visibility' => true
            ],
            [
                'title' => 'Grazioso Appartamento nel Cuore di Napoli',
                'description' => "Situato nel cuore di Napoli, in una posizione che permette di raggiungere facilmente tutti i luoghi di interesse. La metropolitana di Via Toledo dista 3 minuti a piedi dalla struttura, 15 minuti a piedi per arrivare al Museo Archeologico Nazionale e al centro storico di Napoli. Inoltre nelle vicinanze ci sono numerosi negozi, ristoranti, pizzerie e bar. Accogliente e funzionale, vi trasporterà nella vera Napoli potrete raggiungere facilmente la movida notturna della città e le sue attrazioni.",
                'price' => 63,
                'availability' => true,
                'cover' => 'apartments/casa-napule.jpg',
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

