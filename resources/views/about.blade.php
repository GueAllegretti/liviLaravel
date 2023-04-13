<x-layout>
  <x-slot name="title">Chi siamo</x-slot>

    <div class="breadcrumbs d-flex align-items-center">
      <div class="container position-relative d-flex flex-column align-items-center" data-aos="fade">
        <h2>L'azienda</h2>
        <ol>
          <li><a href="{{route('index')}}">Home</a></li>
          <li>Chi Siamo</li>
        </ol>
      </div>
    </div>
  
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="row position-relative">
          <div class="col-lg-7 about-img">
          <img src="/img/azienda.jpeg" class="img-fluid" alt="azienda">
        </div>
          <div class="col-lg-7">
            <h2>Chi Siamo</h2>
            <div class="our-story">
              <p>LIVI IMPIANTI è un'azienda giovane e dinamica, operiamo a 360° nell’ambito dell’impiantistica elettrica al fine di poter soddisfare ogni esigenza. Nello specifico ci occupiamo di:
                </p>
              <ul>
                <li class="pb-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione impianti elettrici civili ed industriali;</li>
                <li class="pb-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti elettrici domotici;</li>
                <li class="pb-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti fotovoltaici ed eolici;</li>
                <li class="pb-2"><i class="bi bi-check-circle fs-5 me-3"></i> Realizzazione impianti a fibre ottiche;</li>
                <li class="pb-2"><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione, costruzione e manutenzione di impianti antintrusione e videosorveglianza;</li>
                <li><i class="bi bi-check-circle fs-5 me-3"></i> Progettazione e costruzioni di reti LAN;</li>
              </ul>  
              <div class="watch-video d-flex align-items-center position-relative">
                <i class="bi bi-play-circle fs-3"></i>
                <a href="https://www.facebook.com/liviimpianti/videos/3248417628611712" class="glightbox fw-bolder ms-2" target="_blank">Guarda Video</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  
    <section id="certifications" class="certifications section-bg">
      <div class="container" data-aos="fade-up">
        <div class="section-header text-center">
          <h2>Attestati</h2>
        </div>
        <div class="row gy-4">

          @foreach($certifications as $certification)
          <x-cardCertifications
            id="{{$certification['id']}}"
            img="{{$certification['img']}}"
          />
          @endforeach

        </div>

      </div>
    </section>
  
      <!-- ======= Our Team Section ======= -->
      <section id="team" class="team">
        <div class="container" data-aos="fade-up">
  
          <div class="section-header text-center">
            <h2>Il Team</h2>
          </div>
  
          <div class="row gy-5">
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="100">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>Walter White</h4>
                <span>Chief Executive Officer</span>
                <p>Aliquam iure quaerat voluptatem praesentium possimus unde laudantium vel dolorum distinctio dire flow</p>
              </div>
            </div><!-- End Team Member -->
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="200">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>Sarah Jhonson</h4>
                <span>Product Manager</span>
                <p>Labore ipsam sit consequatur exercitationem rerum laboriosam laudantium aut quod dolores exercitationem ut</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="300">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>William Anderson</h4>
                <span>CTO</span>
                <p>Illum minima ea autem doloremque ipsum quidem quas aspernatur modi ut praesentium vel tque sed facilis at qui</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="400">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>Amanda Jepson</h4>
                <span>Accountant</span>
                <p>Magni voluptatem accusamus assumenda cum nisi aut qui dolorem voluptate sed et veniam quasi quam consectetur</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="500">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>Brian Doe</h4>
                <span>Marketing</span>
                <p>Qui consequuntur quos accusamus magnam quo est molestiae eius laboriosam sunt doloribus quia impedit laborum velit</p>
              </div>
            </div>
  
            <div class="col-lg-4 col-md-6 member" data-aos="fade-up" data-aos-delay="600">
              <div class="member-img">
                <img src="https://via.placeholder.com/500x500" class="img-fluid" alt="">
              </div>
              <div class="member-info text-center">
                <h4>Josepha Palas</h4>
                <span>Operation</span>
                <p>Sint sint eveniet explicabo amet consequatur nesciunt error enim rerum earum et omnis fugit eligendi cupiditate vel</p>
              </div>
            </div>
  
          </div>
  
        </div>
      </section>
  
    </main>

</x-layout>