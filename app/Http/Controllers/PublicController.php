<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index(){
        $services = [
            ['id' => 1, 'name' => 'Impianti Domotici', 'icon' => '/img/icon/house-lock.svg', 'description' => "Realizziamo impianti domotici, al fine di poter gestire e controllare la nostra casa in maniera intelligente."],
            ['id' => 2, 'name' => 'Impianti Fotovoltaici e Eolici', 'icon' => '/img/icon/sun.svg', 'description' => "Realizziamo impianti alimentati da fonti rinnovabili per produrre energia elettrica evitando immissione in atmosfera di sostanze inquinanti."],
            ['id' => 3, 'name' => 'Impianti industriali', 'icon' => '/img/icon/buildings.svg', 'description' => "Progettiamo e realizziamo impianti e automazioni industriali all’interno di nuove costruzioni e messa a norma di edifici esistenti."]
        ];
        $works = [
            [
                'id' => 1, 
                'title' => 'Impianto fotovoltaico 6.70kw, Torre a Mare (Bari)', 
                'alt' => 'Impianto fotovoltaico', 
                'img' => 'img/projects/progetto1.jpeg'
            ],
            [
                'id' => 2, 
                'title' => 'da definire', 
                'alt' => 'da definire', 
                'img' => 'img/projects/progetto6.jpeg'
            ],
            [
                'id' => 3, 
                'title' => 'da definire', 
                'alt' => 'da definire', 
                'img' => '/img/projects/progetto1.jpeg'
            ],
            [
                'id' => 4, 
                'title' => 'da definire', 
                'alt' => 'da definire', 
                'img' => 'img/projects/progetto4.jpeg'
            ],
            [
                'id' => 5, 
                'alt' => 'da definire', 
                'title' => "da definire", 
                'img' => 'img/projects/progetto5.jpeg'
            ],
            [
                'id' => 6, 
                'alt' => 'da definire', 
                'title' => 'da definire', 
                'img' => 'img/projects/progetto6.jpeg'
            ],
        ];

        return view('index', ['services' => $services], ['works' => $works]);
    }

    public function about() {
        return view ('about');
    }

    public function contact() {
        return view ('contact');
    }

    public function cookies() {
        return view ('cookies');
    }

    public function services() {
        return view('service');
    }

    // public function serviceDetail($id) {
    //     $services = [
    //         [
    //             'id' => 1, 
    //             'name' => 'Antincendio', 
    //             'description' => 'Per proteggere banche, industrie, attività commerciali, luoghi residenziali e civili dal pericolo di incendio, installiamo prodotti tecnologicamente avanzati e performanti.', 
    //             'description2'=>'I dispositivi antincendio che utilizziamo sono convenzionali, ibridi e analogico-indirizzati, e sono tutti certificati secondo i più rigorosi standard normativi CPR.', 
    //             'img' => '/img/service-1.jpg'],
    //         [
    //             'id' => 2, 
    //             'name' => 'Automazione', 
    //             'description' => 'Installiamo automazioni per serrande, porte basculanti, cancelli scorrevoli o a battente, porte, finestre, lucernari e tapparelle. Utiliziamo prodotti di alta qualità che sono una certezza per quanto riguarda la durata.', 
    //             'description2' => 'Abbiamo soluzioni professionali, durature e resistenti sia per le abitazioni e i piccoli condomini ma anche per le grandi aziende, che hanno bisogni di motori per cancelli di grandi dimensioni o molto pensanti.', 
    //             'img' => '/img/service-2.jpg'
    //         ],
    //         [
    //             'id' => 3, 
    //             'name' => 'Illuminazione e Domotica',  
    //             'description' => 'Installiamo dispositivi IoT – connessi ad internet – che consentono il monitoraggio e la gestione da remoto di apparecchi che possono svolgere funzioni diverse, passando dalla gestione dell’illuminazione fino al controllo del riscaldamento.', 
    //             'description2'=>'La domotica garantisce sicurezza, comfort, convenienza ed efficienza energetica: l’uso di uno o più dispositivi ‘smart’ può avvenire anche da remoto attraverso le numerose app per smartphone.', 
    //             'img' => '/img/service-3.jpg'],
    //         [
    //             'id' => 4, 
    //             'name' => 'Impianti fotovoltaici', 
    //             'description' => 'Un impianto fotovoltaico offre molti vantaggi: porta energia all’interno della tua abitazione, ti fa risparmiare sulle bollette e contribuisce alla salvaguardia dell’ambiente.', 
    //             'description2'=>'In genere per la produzione di 3 kWh bastano circa 13- 15 moduli da 200- 220 watt collegati in serie. La tensione prodotta dipende dalla temperatura, dall’orientamento (quello ottimale è a sud) e dall’inclinazione (deve essere intorno ai 30°).', 
    //             'img' => '/img/service-4.jpg'
    //         ],
    //         [
    //             'id' => 5, 
    //             'name' => 'Videocitofonia', 
    //             'description' => 'Realizziamo soluzioni innovative e versatili, che vanno dai sistemi più complessi per il condominio ai pratici kit per ville e case mono e bifamiliari', 
    //             'description2'=>'Installiamo postazioni, ideali per controllare gli accessi alla tua abitazione, ma anche citofoni e videocitofoni da interno, senza connessione Wi-Fi.', 
    //             'img' => '/img/service-5.jpg'
    //         ],
    //         [
    //             'id' => 6, 
    //             'name' => 'Videosorveglianza e Antintrusione', 
    //             'description' => 'Per bloccare e intercettare tentativi di effrazione e furto, installiamo impianti di videosorveglianza e antintrusione sia di tipo wireless di rapida installazione in quanto non richiedono alcuna opera muraria, oppure soluzioni di tipo filare.', 
    //             'description2'=>'Che la tua scelta sia per soluzioni wireless o soluzioni cablate, la nostra soluzione ricadrà sempre su prodotti Made in Italy, di alta qualità e destinati a durare nel tempo.', 
    //             'img' => '/img/service-6.jpg'
    //         ]
    //     ];
    //     foreach($services as $service){
    //         if($id == $service['id']){
    //             //dd($service);
    //             return view('serviceDetail', ['service' => $service]);
    //         }
    //     }
    // }
}
