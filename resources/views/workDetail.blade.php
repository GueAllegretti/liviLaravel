@section('meta_keywords','elettricista, assistenza, manutenzione, impianti elettrici, antintrusione, fotovoltaico, videosorveglianza, automazione', 'domotica', 'antincendio')
@section('meta_description', 'Realizzazione di impianti di automazioni, impianti di rilevazione fumi, impianto di antincendio, impianti di TVCC e antintrusione con installazione di telecamere e impianti di allarme, impianti fotovoltaici, assistenza e manutenzione di impianti esistenti')

<x-layout>
    <x-slot name="title">{{$work['where']}}</x-slot>

    <section class="section">
        <div class="container-fluid">
          <div class="row">
              <x-cardWork
                id="{{$work['id']}}"
                category="{{$work['category']}}"
                where="{{$work['where']}}"
                description="{{$work['description']}}"
                description2="{{$work['description2']}}"
                alt="{{$work['alt']}}"
                img="{{$work['img']}}"
                img1="{{$work['img1']}}"
                img2="{{$work['img2']}}"
                img3="{{$work['img3']}}"
              />
            </div>
          </div>
        </section> 
       
        
</x-layout>