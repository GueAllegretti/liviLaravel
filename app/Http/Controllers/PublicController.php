<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index(){
        $services = [
            ['id' => 1, 'name' => 'Impianti Domotici', 'icon' => '/img/icon/house-lock.svg', 'description' => "Realizziamo impianti domotici, al fine di poter gestire e controllare la nostra casa in maniera intelligente anche con unico dispositivo."],
            ['id' => 2, 'name' => 'Fotovoltaico ed Eolico', 'icon' => '/img/icon/sun.svg', 'description' => "Realizziamo impianti alimentati da fonti rinnovabili per produrre energia elettrica evitando immissione in atmosfera di sostanze inquinanti."],
            ['id' => 3, 'name' => 'Impianti industriali', 'icon' => '/img/icon/buildings.svg', 'description' => "Progettiamo e realizziamo impianti e automazioni industriali all’interno di nuove costruzioni e messa a norma di edifici esistenti."]
        ];
        $works = [
            [
                'id' => 1, 
                'title' => 'Impianto fotovoltaico 6.70kw', 
                'alt' => 'Impianto fotovoltaico', 
                'img' => 'img/projects/progetto1.jpeg'
            ],
            [
                'id' => 2, 
                'title' => 'Impianto fotovoltaico da 7kw Sunpower a ISOLA con il nuovo sistema di blackout Tesla e accumolo Tesla', 
                'alt' => 'Impianto fotovoltaico da 7kw', 
                'img' => 'img/projects/progetto2.jpeg'
            ],
            [
                'id' => 3, 
                'title' => 'Impianto fotovoltaico Autogrill la Sosta Matera', 
                'alt' => 'Impianto fotovoltaico', 
                'img' => '/img/projects/progetto3.jpeg'
            ],
            [
                'id' => 4, 
                'title' => 'Manutenzioni impianti eolici', 
                'alt' => 'Manutenzioni', 
                'img' => 'img/projects/progetto4.jpeg'
            ],
            [
                'id' => 5, 
                'title' => 'Istallazione 50kwp fotovoltaico', 
                'alt' => "Istallazione 50kwp fotovoltaico", 
                'img' => 'img/projects/progetto5.jpeg'
            ],
            [
                'id' => 6, 
                'title' => 'Impianto fotovoltaico da 6kw con pannelli SUNPOWER da 400w e pacco batteria da 7.5kw SONNEN', 
                'alt' => 'Impianto fotovoltaico da 6kw', 
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

}
