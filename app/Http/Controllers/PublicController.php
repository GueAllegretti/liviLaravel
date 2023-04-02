<?php

namespace App\Http\Controllers;

class PublicController extends Controller
{
    public function index(){
        $services = [
            ['id' => 1, 'name' => 'Impianti Domotici e Automazione', 'icon' => '/img/icon/house-signal-solid.svg'],
            ['id' => 2, 'name' => 'Impianti Fotovoltaici civili e industriali', 'icon' => '/img/icon/sun-solid.svg'],
            ['id' => 3, 'name' => 'Videosorveglianza e Antintrusione e Antincendio', 'icon' => '/img/icon/house-lock-solid.svg']
        ];
        return view('index', ['services' => $services]);
    }

    public function work() {
        $works = [
            ['id' => 1, 'category' => 'Antincendio', 'where' => 'Istituto Istruzione Superiore A. Turi', 'alt' => 'sistema di antincendio', 'img' => 'img/antincendio/antincendio.jpg'],
            ['id' => 2, 'category' => 'Illuminazione e Domotica', 'where' => 'Negozio di telefonia', 'alt' => 'illuminazione interna', 'img' => 'img/illuminazione/wind.jpg'],
            ['id' => 3, 'category' => 'Illuminazione e Domotica', 'where' => 'Appartamento', 'alt' => 'illuminazione interna', 'img' => '/img/illuminazione/appar.jpg'],
            ['id' => 4, 'category' => 'Illuminazione e Domotica', 'where' => 'Ufficio', 'alt' => 'illuminazione interna', 'img' => 'img/illuminazione/commerc.jpg'],
            ['id' => 5, 'category' => 'Videosorveglianza e Antintrusione', 'alt' => 'Videosorveglianza', 'where' => "Chiesa di Santa Maria De Idris", 'img' => 'img/tvcc/lavoro-idris.jpg'],
            ['id' => 6, 'category' => 'Videosorveglianza e Antintrusione', 'alt' => 'Videosorveglianza', 'where' => 'Chiesa di Santa Lucia alle Malve', 'img' => 'img/tvcc/lavoro-malve.jpg'],
            ['id' => 7, 'category' => 'Impianti fotovoltaici', 'where' => 'Residenziale', 'alt' => 'fotovoltaico', 'img' => 'img/fotovoltaico/lavoro-fotov.jpg'],
            ['id' => 8, 'category' => 'Impianti elettrici', 'where' => 'Attività commerciale', 'alt' => 'illuminazione interna', 'img' => 'img/illuminazione/lavoro-illuminazione4.jpg'],
            ['id' => 9, 'category' => 'Impianti elettrici', 'where' => 'Albergo Sassi di Matera', 'alt' => 'illuminazione interna', 'img' => 'img/illuminazione/hotel2.jpg'],
            ['id' => 10, 'category' => 'Impianti elettrici', 'where' => 'Albergo Sassi di Matera', 'alt' => 'illuminazione interna', 'img' => 'img/elettrico/albergo.jpg'],
            ['id' => 11, 'category' => 'Illuminazione e Domotica', 'where' => 'Appartamento', 'alt' => 'illuminazione interna e domotica', 'img' => 'img/illuminazione/casa.jpg'],
            ['id' => 12, 'category' => 'Impianti elettrici', 'where' => 'Appartamento', 'alt' => 'illuminazione interna', 'img' => 'img/elettrico/cavi.jpg'],
        ];
        return view('work', ['works' => $works]);
    }


    public function workDetail($id) {
        $works = [
            [
                'id' => 1, 
                'category' => 'Antincendio', 
                'where' => 'Istituto Istruzione Superiore A. Turi',
                'description' => 'Impianto di rivelazione fumi', 
                'description2'=>'Manutenzione impianti di sicurezza', 
                'alt' => 'centrale antincendio',
                'img' => '/img/antincendio/antincendio.jpg',
                'img1' => '/img/antincendio/antincendio1.jpg',
                'img2' => '/img/antincendio/antincendio2.jpg',
                'img3' => '/img/antincendio/antincendio3.jpg'
            ],
            [
                'id' => 2, 
                'category' => 'Illuminazione e Domotica', 
                'where' => 'Negozio di telefonia',
                'description' => 'Impianto elettrico', 
                'description2' => 'Cablaggio strutturato',  
                'alt' => 'insegna luminosa',
                'img' => '/img/illuminazione/wind.jpg',
                'img1' => '/img/illuminazione/wind1.jpg',
                'img2' => '/img/illuminazione/wind2.jpg',
                'img3' => '/img/illuminazione/wind3.jpg'
            ],
            [
                'id' => 3, 
                'category' => 'Illuminazione e Domotica',  
                'where' => 'Appartamento',
                'description' => 'Impianto elettrico', 
                'description2'=>'Infilaggio cavi',  
                'alt' => 'illuminazione interna',
                'img' => '/img/illuminazione/appar.jpg',
                'img1' => '/img/illuminazione/appart2.jpg',
                'img2' => '/img/illuminazione/appart3.jpg',
                'img3' => '/img/illuminazione/appar1.jpg',
            ],
            [
                'id' => 4, 
                'category' => 'Illuminazione e Domotica', 
                'where' => 'Ufficio',
                'description' => 'Impianto elettrico', 
                'description2'=> 'Cablaggio strutturato', 
                'alt' => 'illuminazione interna',
                'img' => '/img/illuminazione/commerc.jpg',
                'img1' => '/img/illuminazione/commerc1.jpg',
                'img2' => '/img/illuminazione/commerc2.jpg',
                'img3' => '/img/illuminazione/commerc.jpg'
            ],
            [
                'id' => 5, 
                'category' => 'Videosorveglianza e Antintrusione', 
                'where' => "Chiesa di Santa Maria De Idris",
                'description' => 'Impianto di videosorveglianza', 
                'description2'=>'Infilaggio cavi', 
                'alt' => 'telecamere di sicurezza',
                'img' => '/img/tvcc/lavoro-idris.jpg',
                'img1' => '/img/tvcc/lavoro-idris1.jpg',
                'img2' => '/img/tvcc/lavoro-idris.jpg',
                'img3' => '/img/tvcc/lavoro-idris1.jpg'
            ],
            [
                'id' => 6, 
                'category' => 'Videosorveglianza e Antintrusione', 
                'where' => 'Chiesa di Santa Lucia alle Malve',
                'description' => 'Impianti di videosorveglianza', 
                'description2'=>'Installazione e manutenzione', 
                'alt' => 'telecamere di sicurezza',
                'img' => '/img/tvcc/lavoro-malve.jpg',
                'img1' => '/img/tvcc/lavoro-malve1.jpg',
                'img2' => '/img/tvcc/lavoro-malve2.jpg',
                'img3' => '/img/tvcc/lavoro-malve.jpg'
            ],
            [
                'id' => 7, 
                'category' => 'Impianti fotovoltaici', 
                'where' => 'Residenziale',
                'description' => 'Installazione pannelli', 
                'description2'=>'Callaudo', 
                'alt' => 'pannelli fotovoltaici',
                'img' => '/img/fotovoltaico/lavoro-fotov.jpg',
                'img1' => '/img/fotovoltaico/lavoro-fotov1.jpg',
                'img2' => '/img/fotovoltaico/lavoro-fotov2.jpg',
                'img3' => '/img/logo.png'
            ],
            [
                'id' => 8, 
                'category' => 'Illuminazione e Domotica',  
                'where' => 'Attività commerciale',
                'description' => 'Installazione insegna luminosa', 
                'description2'=>'Infilaggio cavi',  
                'alt' => 'insegna luminosa',
                'img' => '/img/illuminazione/lavoro-illuminazione4.jpg',
                'img1' => '/img/about-2.jpg',
                'img2' => '/img/logo.png',
                'img3' => '/img/logo.png',
            ],
            [
                'id' => 9, 
                'category' => 'Illuminazione e Domotica',  
                'where' => 'Albergo Sassi di Matera',
                'description' => 'Impianto elettrico', 
                'description2'=>'Infilaggio cavi',  
                'alt' => 'illuminazione interna',
                'img' => '/img/illuminazione/hotel2.jpg',
                'img1' => '/img/illuminazione/hotel1.jpg',
                'img2' => '/img/illuminazione/hotel.jpg',
                'img3' => '/img/logo.png',
            ],
            [
                'id' => 10, 
                'category' => 'Illuminazione e Domotica',  
                'where' => 'Albergo Sassi di Matera',
                'description' => 'Impianto elettrico', 
                'description2'=>'Adeguamento sistema di sicurezza',  
                'alt' => 'illuminazione interna',
                'img' => '/img/elettrico/albergo.jpg',
                'img1' => '/img/elettrico/albergo1.jpg',
                'img2' => '/img/elettrico/albergo2.jpg',
                'img3' => '/img/logo.png',
            ],
            [
                'id' => 11, 
                'category' => 'Illuminazione e Domotica',  
                'where' => 'Appartamento',
                'description' => 'Impianto elettrico', 
                'description2'=>'impianto domotico',  
                'alt' => 'illuminazione interna',
                'img' => '/img/illuminazione/casa1.jpg',
                'img1' => '/img/illuminazione/casa.jpg',
                'img2' => '/img/illuminazione/casa3.jpg',
                'img3' => '/img/logo.png',
            ],
            [
                'id' => 12, 
                'category' => 'Impianti Elettrici',  
                'where' => 'Appartamento',
                'description' => 'Impianto elettrico', 
                'description2'=>'Infilaggio cavi',  
                'alt' => 'illuminazione interna',
                'img' => '/img/elettrico/cavi.jpg',
                'img1' => '/img/elettrico/cavi1.jpg',
                'img2' => '/img/logo.png',
                'img3' => '/img/logo.png',
            ],
            
        ];
        foreach($works as $work){
            if($id == $work['id']){
                return view('workDetail', ['work' => $work]);
            }
        }
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
        $services = [
            ['id' => 1, 'name' => 'Antincendio','img' => '/img/service-1.jpg'],
            ['id' => 2, 'name' => 'Automazione', 'img' => '/img/service-2.jpg'],
            ['id' => 3, 'name' => 'Illuminazione e Domotica', 'img' => '/img/service-3.jpg'],
            ['id' => 4, 'name' => 'Impianti fotovoltaici', 'img' => '/img/service-4.jpg'],
            ['id' => 5, 'name' => 'Videocitofonia', 'img' => '/img/service-5.jpg'],
            ['id' => 6, 'name' => 'Videosorveglianza e Antintrusione', 'img' => '/img/service-6.jpg']
        ];
        return view('service', ['services' => $services]);
    }

    public function serviceDetail($id) {
        $services = [
            [
                'id' => 1, 
                'name' => 'Antincendio', 
                'description' => 'Per proteggere banche, industrie, attività commerciali, luoghi residenziali e civili dal pericolo di incendio, installiamo prodotti tecnologicamente avanzati e performanti.', 
                'description2'=>'I dispositivi antincendio che utilizziamo sono convenzionali, ibridi e analogico-indirizzati, e sono tutti certificati secondo i più rigorosi standard normativi CPR.', 
                'img' => '/img/service-1.jpg'],
            [
                'id' => 2, 
                'name' => 'Automazione', 
                'description' => 'Installiamo automazioni per serrande, porte basculanti, cancelli scorrevoli o a battente, porte, finestre, lucernari e tapparelle. Utiliziamo prodotti di alta qualità che sono una certezza per quanto riguarda la durata.', 
                'description2' => 'Abbiamo soluzioni professionali, durature e resistenti sia per le abitazioni e i piccoli condomini ma anche per le grandi aziende, che hanno bisogni di motori per cancelli di grandi dimensioni o molto pensanti.', 
                'img' => '/img/service-2.jpg'
            ],
            [
                'id' => 3, 
                'name' => 'Illuminazione e Domotica',  
                'description' => 'Installiamo dispositivi IoT – connessi ad internet – che consentono il monitoraggio e la gestione da remoto di apparecchi che possono svolgere funzioni diverse, passando dalla gestione dell’illuminazione fino al controllo del riscaldamento.', 
                'description2'=>'La domotica garantisce sicurezza, comfort, convenienza ed efficienza energetica: l’uso di uno o più dispositivi ‘smart’ può avvenire anche da remoto attraverso le numerose app per smartphone.', 
                'img' => '/img/service-3.jpg'],
            [
                'id' => 4, 
                'name' => 'Impianti fotovoltaici', 
                'description' => 'Un impianto fotovoltaico offre molti vantaggi: porta energia all’interno della tua abitazione, ti fa risparmiare sulle bollette e contribuisce alla salvaguardia dell’ambiente.', 
                'description2'=>'In genere per la produzione di 3 kWh bastano circa 13- 15 moduli da 200- 220 watt collegati in serie. La tensione prodotta dipende dalla temperatura, dall’orientamento (quello ottimale è a sud) e dall’inclinazione (deve essere intorno ai 30°).', 
                'img' => '/img/service-4.jpg'
            ],
            [
                'id' => 5, 
                'name' => 'Videocitofonia', 
                'description' => 'Realizziamo soluzioni innovative e versatili, che vanno dai sistemi più complessi per il condominio ai pratici kit per ville e case mono e bifamiliari', 
                'description2'=>'Installiamo postazioni, ideali per controllare gli accessi alla tua abitazione, ma anche citofoni e videocitofoni da interno, senza connessione Wi-Fi.', 
                'img' => '/img/service-5.jpg'
            ],
            [
                'id' => 6, 
                'name' => 'Videosorveglianza e Antintrusione', 
                'description' => 'Per bloccare e intercettare tentativi di effrazione e furto, installiamo impianti di videosorveglianza e antintrusione sia di tipo wireless di rapida installazione in quanto non richiedono alcuna opera muraria, oppure soluzioni di tipo filare.', 
                'description2'=>'Che la tua scelta sia per soluzioni wireless o soluzioni cablate, la nostra soluzione ricadrà sempre su prodotti Made in Italy, di alta qualità e destinati a durare nel tempo.', 
                'img' => '/img/service-6.jpg'
            ]
        ];
        foreach($services as $service){
            if($id == $service['id']){
                //dd($service);
                return view('serviceDetail', ['service' => $service]);
            }
        }
    }
}
