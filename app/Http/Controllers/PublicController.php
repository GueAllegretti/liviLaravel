<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index(){
        $services = [
            ['id' => 1, 'name' => 'Impianti Domotici', 'icon' => '/img/icon/house-lock.svg', 'description' => "Realizziamo impianti domotici, al fine di poter gestire e controllare la nostra casa in maniera intelligente anche con unico dispositivo."],
            ['id' => 2, 'name' => 'Fotovoltaico ed Eolico', 'icon' => '/img/icon/sun.svg', 'description' => "Realizziamo impianti alimentati da fonti rinnovabili per produrre energia elettrica evitando immissione in atmosfera di sostanze inquinanti."],
            ['id' => 3, 'name' => 'Impianti Industriali', 'icon' => '/img/icon/buildings.svg', 'description' => "Progettiamo e realizziamo impianti e automazioni industriali all’interno di nuove costruzioni e messa a norma di edifici esistenti."]
        ];
        $works = [
            [
                'id' => 1, 
                'title' => 'Impianto fotovoltaico 6.70kw', 
                'alt' => 'Impianto fotovoltaico', 
                'img' => 'img/projects/progetto1.webp'
            ],
            [
                'id' => 2, 
                'title' => 'Impianto fotovoltaico da 7kw Sunpower a ISOLA con il nuovo sistema di blackout Tesla e accumolo Tesla', 
                'alt' => 'Impianto fotovoltaico da 7kw', 
                'img' => 'img/projects/progetto2.webp'
            ],
            [
                'id' => 3, 
                'title' => 'Impianto fotovoltaico Autogrill la Sosta Matera', 
                'alt' => 'Impianto fotovoltaico', 
                'img' => '/img/projects/progetto3.webp'
            ],
            [
                'id' => 4, 
                'title' => 'Manutenzioni impianti eolici', 
                'alt' => 'Manutenzioni', 
                'img' => 'img/projects/progetto4.webp'
            ],
            [
                'id' => 5, 
                'title' => 'Istallazione 50kwp fotovoltaico', 
                'alt' => "Istallazione 50kwp fotovoltaico", 
                'img' => 'img/projects/progetto5.webp'
            ],
            [
                'id' => 6, 
                'title' => 'Impianto fotovoltaico da 6kw con pannelli SUNPOWER da 400w e pacco batteria da 7.5kw SONNEN', 
                'alt' => 'Impianto fotovoltaico da 6kw', 
                'img' => 'img/projects/progetto6.webp'
            ],
        ];

        return view('index', ['services' => $services], ['works' => $works]);
    }

    public function about() {
        $certifications = [
            ['id' => 1, 'img' => '/img/about/5.webp'],
            ['id' => 2, 'img' => '/img/about/6.webp'],
            ['id' => 3, 'img' => '/img/about/7.webp'],
            ['id' => 4, 'img' => '/img/about/8.webp']
        ];
        return view ('about', ['certifications' => $certifications]);
    }

    public function contact() {
        return view ('contact');
    }

    public function cookies() {
        return view ('cookies');
    }

    public function services() {
        $servicesDetails = [
            ['id' => 1, 'name' => 'Impianti industriali', 'img' => '/img/projects/progetto8.webp', 'description1' => "Progettiamo e realizziamo impianti e automazione industriale all’interno di nuove costruzioni e messa a norma di edifici esistenti.", 'description2' => "Poniamo particolare attenzione nella fornitura e cablaggio di quadri elettrici, gruppi di continuità e gruppi elettrogeni.", 'description3' => "Le strutture interessate sono: capannoni industriali, strutture sportive quali palestre, piscine,ecc.., centrali termiche, centri commerciali e magazzini"],
            ['id' => 2, 'name' => 'Impianti civili', 'img' => 'img/projects/progetto7.webp', 'description1' => "Progettiamo e realizziamo impianti elettrici civili in grado di soddisfare le più disparate esigenze personali così da rendere il proprio ambiente unico e personalizzato.", 'description2' => "Tutti i servizi vengono offerti “chiavi in mano” in modo da garantire i lavori senza il minimo disturbo, occupandoci della progettazione, della costruzione e dei relativi problemi legati all’allacciamento con il gestore di fornitura elettrica.", 'description3' => "Particolare attenzione viene posta alla realizzazione di impianti domotici, impianto che introduce nelle nostre case il concetto di casa intelligente al fine di poter gestire e controllare la nostra casa da qualsiasi terminale, quale internet, cellulare o addirittura in automatico così da dare un aiuto e sollievo a noi ed in particolar modo alle persone diversamente abili."]
        ];
        return view('service', ['servicesDetails' => $servicesDetails]);
    }

}
