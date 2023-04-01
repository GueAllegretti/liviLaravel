@section('meta_keywords','elettricista, assistenza, manutenzione, impianti elettrici, antintrusione, fotovoltaico, videosorveglianza, automazione')
@section('meta_description', 'Realizzazione di impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC e antintrusione, impianti fotovoltaici, assistenza e manutenzione di impianti esistenti')

<x-layout>
    <x-slot name="title">{{$service['name']}}</x-slot>

    <section class="section">
        <div class="container-fluid">
          <div class="row">
              <x-card
                id="{{$service['id']}}"
                name="{{$service['name']}}"
                description="{{$service['description']}}"
                description2="{{$service['description2']}}"
                img="{{$service['img']}}"
              />
            </div>
          </div>
        </section> 
       
        
</x-layout>