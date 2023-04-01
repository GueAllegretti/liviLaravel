@section('meta_keywords','impianti realizzati')
@section('meta_description', 'Pagina con lavori effettuati, impianti di automazioni, impianti di rilevazione fumi, impianti di TVCC e antintrusione, impianti fotovoltaici')


<x-layout>
  <x-slot name="title">Lavori</x-slot>
  
    <div class="container-fluid page-header py-5">
      <div class="container py-5">
          <h1 class="display-3 text-light mb-3 mt-5 animate__animated animate__slideInDown">Lavori</h1>
          <nav aria-label="breadcrumb animate__animated animate__slideInDown">
              <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-light" href="/">Home</a></li>
                  <li class="breadcrumb-item text-light active" aria-current="page">Lavori</li>
              </ol>
          </nav>
      </div>
    </div>

    <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
              <div class="cg-text mb-3 mx-auto" style="width: 60px; height: 2px;"></div>
              <h1 class="display-5 mb-5">I nostri lavori</h1>
          </div>
          <div class="text-center wow animate__animated animate__fadeInUp" data-wow-delay="0.1s">
            <h4 class="fw-lighter mb-5">Realizziamo e progettiamo <strong>impianti di sicurezza</strong>, <strong>illuminotecnici e domotici</strong> in qualsiasi contesto, con prodotti dall' elevato standard qualitativo.</h4>
          </div>
    
          <div class="row g-4 portfolio-container">
            @foreach($works as $work)
    
            <x-cardWork
              id="{{$work['id']}}"
              category="{{$work['category']}}"
              where="{{$work['where']}}"
              alt="{{$work['alt']}}"
              img="{{$work['img']}}"
            />
    
          @endforeach
          </div>
      </div>
    </div>
  </x-layout>