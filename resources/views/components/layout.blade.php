<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','Elettricista, impianti elettrici, antintrusione, impianti domotici, antincendio, tvcc, videosorveglianza, cancelli, serrande elettriche, automazione, fotovoltaico, videocitofoni')">
    <meta name="description" content="@yield('meta_description','Realizzazione di impianti domotici di ogni tipo, in ambienti pubblici e privati. Realizzazione di impianti di sicurezza quali antincendio, antintrusione, videosorveglianza, automazione')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{asset('css/app.css')}}">

<title>{{isset($title) ? $title:'Livi Impianti'}}</title>


</head>

<body>
<x-nav/>
{{-- <div class="icon-bar">
    <a href="https://www.facebook.com/profile.php?id=100063644015165" class="facebook secondary-icone-social d-flex justify-content-center align-items-center" style="outline: none"><i class="fab fa-facebook-f"></i></a>
    <a href="tel:+393801814128" target="blank" class="secondary-icone-social text-center d-flex justify-content-center align-items-center"><i class="fa-solid fa-phone"></i></a>
    <a href="http://api.whatsapp.com/send?phone=+393801814128&text=Buonasera, vorrei avere maggiori informazioni" target="blank" class="secondary-icone-social text-center d-flex justify-content-center align-items-center"><i class="fa-brands fa-whatsapp"></i></a>
    <a href="mailto:info@cgimpiantielettrici.it?subject=Richiesta informazioni" class="mail secondary-icone-social d-flex justify-content-center align-items-center"><i class="fa-regular fa-envelope"></i></a>
</div> --}}


    {{$slot}}

    @include('cookie-consent::index')
     
     <x-footer/>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="{{asset('js/app.js')}}"></script>

  </body>
  </html>