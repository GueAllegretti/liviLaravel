<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="keywords" content="@yield('meta_keywords','Elettricista, impianti elettrici, antintrusione, impianti domotici, antincendio, tvcc, videosorveglianza, cancelli, serrande elettriche, automazione, fotovoltaico, eolico, videocitofoni')">
    <meta name="description" content="@yield('meta_description','Realizzazione di impianti domotici di ogni tipo, in ambienti pubblici e privati, alimentati ad energia solare o elica. Realizzazione di impianti di sicurezza quali antincendio, antintrusione, videosorveglianza, automazione.')">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="{{ secure_asset('CSS/app.css') }}">
{{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}"> --}}

<title>{{isset($title) ? $title:'Livi Impianti'}}</title>


</head>

<body>
<x-nav/>

    {{$slot}}

    @include('cookie-consent::index')
     
     <x-footer/>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
    <script src="{{ secure_asset('JS/app.js') }}"></script>
    {{-- <script src="{{ asset('js/app.js') }}"></script> --}}
  </body>
  </html>