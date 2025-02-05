@section('meta_keywords','elettricista Pomarico, elettricista Matera, assistenza, manutenzione, impianti elettrici, impianti allarme, impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC, antintrusione, impianti fotovoltaici, assistenza, impianti antincendio, cablaggio strutturato, manutenzione di impianti esistenti, impianti domotici, movimento terra')
@section('meta_description', 'Azienda con sede a Pomarico (Matera), professionisti in impianti elettrici, illuminotecnici e domotici. Installazione e manutenzione di impianti antincendio e videosorveglianza, pannelli fotovoltaici, automazioni civili e industriali')

<x-layout>
  <x-slot name="title">Livi Impianti</x-slot>

<!-- Banner start-->
<section id="livi" class="livi">

  <div class="masthead d-flex align-items-center">
    <div class="container vh-100">
      <div class="row h-100 justify-content-center align-items-center">
        <div class="col-lg-6 text-center">
          <h2 data-aos="fade-down">Livi 
          <br>
          <span>Impianti</span></h2>
          <p data-aos="fade-up">Un' azienda giovane e dinamica, che mette a completa disposizione tutte le nostre conoscenze nell’ambito dell’impiantistica elettrica al fine di poter realizzare tutte le vostre esigenze. </p>
          <a data-aos="fade-up" data-aos-delay="200" href="{{route('service')}}" class="m-2 px-5 py-3 fs-6 fw-bolder btn-masthead">Scopri di più</a>
        </div>
      </div>
    </div>
  </div>

</section>

<!-- Services -->
<section id="services" class="services section-bg">
  <div class="container" data-aos="fade-up">

    <div class="section-header text-center">
      <h2>Servizi</h2>
      <p>
        Progettazione, costruzione e manutenzione di impianti elettrici civili ed industriali, domotici, fotovoltaici ed eolici.
        <br>
        Realizzazione di impianti a fibre ottiche, impianti antintrusione e videosorveglianza. Progettazione e costruzioni di reti LAN.
      </p>
    </div>

    <div class="row gy-4">
      
      @foreach($services as $service)

      <x-cardServices
        id="{{$service['id']}}"
        name="{{$service['name']}}"
        icon="{{$service['icon']}}"
        description="{{$service['description']}}"
      />
      @endforeach

    </div>

  </div>
</section>
  

<!-- Projects -->
<section id="projects" class="projects">
  <div class="container" data-aos="fade-up">

    <div class="section-header text-center">
      <h2>I progetti</h2>
      <p>
        Collaborando con un team di progettisti qualificati, disponiamo di tecnici esperti, adeguatamente formati per assicurare qualità, 
        <br>
        sicurezza e rapidità nei tempi di esecuzione dei lavori e tempestività negli interventi di manutenzione.</p>
    </div>

      <div class="row gy-4" data-aos="fade-up" data-aos-delay="200">
        @foreach($works as $work)
    
        <x-cardWork
          id="{{$work['id']}}"
          title="{{$work['title']}}"
          alt="{{$work['alt']}}"
          img="{{$work['img']}}"
        />
        @endforeach
    </div>

  </div>
</section>

</x-layout>