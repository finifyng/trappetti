@extends('home.layout.layout')

@section('content')
<div id="main-slider" class="dl-slider">
  <div class="single-slide">
    <div class="bg-img kenburns-top-right" style="background-image: url(/homeassets/img/slider-2.jpg)"></div>
    <div class="overlay"></div>
    <div class="slider-content-wrap d-flex align-items-center text-center">
      <div class="container">
        <div class="slider-content">
          <div class="dl-caption big">
            <div class="inner-layer">
              <div data-animation="fade-in-left" data-delay="2s">
                Excellence and Innovation </br>As You Grow
              </div>
            </div>
          </div>
          <div class="dl-caption small" style="margin-top:40px;">
            <div class="inner-layer">
              <div data-animation="fade-in-left" data-delay="3s">
                Trappetti Nigeria Limited (TNL) is an engineering services and consultancy company, dedicated to
                offering world-class business solutions tailored to client’s needs and requirements
              </div>
            </div>
          </div>
          <div class="dl-btn-group">d
            <div class="inner-layer">
              <a href="/about" class="dl-btn" data-animation="fade-in-left" data-delay="3.5s">About us <i
                  class="arrow_right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

</div>

<section class="about-section padding">
  <div class="container">
    <div class="row about-wrap">
      <div class="col-lg-6 sm-padding">
        <div class="about-content wow fadeInLeft">
          <h2>
            COMMITTED TO STAYING AHEAD OF THE COMPETITON
          </h2>
          <p>
            Trappetti Nigeria Limited (TNL) is an engineering services and consultancy company, dedicated to offering
            world-class business solutions tailored to client’s needs and requirements.
            </br>
            Incorporated in 2003, TNL provides excellent professional services in opportunity maturation, project
            support, asset lifecycle management, procurement, and consultancy amongst other specialist services.
            </br>
            TNL is led by a team of experienced engineering and management professionals who have sat on various sides
            of the business desk.
            </br>
            TNL features a management framework designed to thrive in dynamic business environments to deliver
            excellence and consistent client satisfaction.
            </br>
            Armed with strategic partnerships with specialist service providers, including strong Capabilities in
            design, procurement and construction TNL is positioned to deliver value to clients in the upstream and
            midstream sectors.

          </p>
          {{-- <a href="/about" class="default-btn">More About Us</a> --}}
        </div>
      </div>
      <div class="col-lg-6 sm-padding">
        <ul class="about-promo">
          <li class="about-promo-item wow fadeInUp">
            <i class="flaticon-factory"></i>
            <div>
              <h3>Quality Driven </h3>
              <p>
                We offer nothing but quality services to our valued customers.
              </p>
            </div>
          </li>
          <li class="about-promo-item wow fadeInUp" data-wow-delay="300ms">
            <i class="flaticon-worker"></i>
            <div>
              <h3>Customer Focused</h3>
              <p>
                Customer Satisfaction is one of our core responsibilities.
              </p>
            </div>
          </li>
          <li class="about-promo-item wow fadeInUp" data-wow-delay="500ms">
            <i class="flaticon-gear"></i>
            <div>
              <h3>Experienced Professionals</h3>
              <p>
                TNL is led by a team of experienced engineers and professionals.
              </p>
            </div>
          </li>
        </ul>
      </div>
    </div>
  </div>
</section>
<section class="service-section bg-grey padding">
  <div class="dark-bg"></div>
  <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
    <span></span>
    <h2>
      Our Services
    </h2>
    <p class="text-white text-center px-5">We are committed to driving success in the evolving energy landscape,
      enabling you to thrive in an ever- changing world. Explore our services and embark on a journey towards a
      brighter, more sustainable energy future.</p>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-12 offset-lg-0">
        <div id="service-carousel" class="service-carousel box-shadow owl-carousel">
          <div class="service-item">
            <div class="service-icon">
              <i class="flaticon-assembly-line"></i>
            </div>
            <h3>PRODUCTION SUPPORT</h3>
            <ul style="list-style-type: none; padding-left: 20px; color: #518681; font-style:bold;">
              <li>Production Optimisation</li>
              <li>Asset Lifecycle O&amp;M</li>
              <li>Well Intervention</li>
              <li>Drilling Support Services.</li>
            </ul>
            <div class="overlay-icon">
              <i class="flaticon-assembly-line"></i>
            </div>
          </div>
          <div class="service-item">
            <div class="service-icon">
              <i class="flaticon-industrial-robot"></i>
            </div>
            <h3>EPC & I</h3>
            <ul style="list-style-type: none; padding-left: 20px; color: #518681; font-style:bold;">
              <li>Facilities </li>
              <li>Pipeline/Flowline </li>
              <li>Inspection and Testing Services</li>
              <li>Asset Debottlenecking</li>
            </ul>
            <div class="overlay-icon">
              <i class="flaticon-industrial-robot"></i>
            </div>
          </div>
          <div class="service-item">
            <div class="service-icon">
              <i class="flaticon-3d-printer"></i>
            </div>
            <h3>GAS MONETIZATION</h3>
            <ul style="list-style-type: none; padding-left: 20px; color: #518681; font-style:bold;">
              <li>Market Assessment</li>
              <li>Opportunity Maturation</li>
              <li>LDZ Planning</li>
              <li>Gas-To-Power</li>
            </ul>
            <div class="overlay-icon">
              <i class="flaticon-3d-printer"></i>
            </div>
          </div>


          <div class="service-item">
            <div class="service-icon">
              <i class="flaticon-conveyor"></i>
            </div>
            <h3>SMART ENERGY SOLUTIONS</h3>
            <ul style="list-style-type: none; padding-left: 20px; color: #518681; font-style:bold;">
              <li>Energy Saving solutions</li>
              <li>Solar Renewable</li>
              <li>Carbon Credit Assessment</li>
              <li>Energy Audits</li>
            </ul>
            <div class="overlay-icon">
              <i class="flaticon-conveyor"></i>
            </div>
          </div>
          <div class="service-item">
            <div class="service-icon">
              <i class="flaticon-control-system"></i>
            </div>
            <h3>ADVISORY</h3>
            <ul style="list-style-type: none; padding-left: 20px; color: #518681; font-style:bold;">
              <li>Consultancy</li>
              <li>Policy and Regulatory Advisory</li>
              <li>Specialist Interventions</li>
            </ul>


            <div class="overlay-icon">
              <i class="flaticon-control-system"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="projects-section padding">
  <div class="container">
    <div class="row d-flex align-items-center">
      <div class="col-lg-8 col-md-6">
        <div class="section-heading mb-40">
          <h2>Project History</h2>
          <h6>
            Since 2003, we have completed medium to large energy infrastructure projects across Nigeria – engaging safe
            processes and delivering quality outcomes.
          </h6>
        </div>
      </div>
      {{-- <div class="col-lg-4 col-md-6 text-right">
        <a href="#" class="default-btn">View All Projects</a>
      </div> --}}
    </div>
    <div id="projects-carousel" class="projects-carousel box-shadow owl-carousel">
      <div class="project-item">
        <img src="/homeassets/img/projects/project1.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project1.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">Production Optimization studies for Shell TNP/NCTL Network</a>
          <h5>
            <a href="#" class="tittle text-black">SPDC - Portharcourt</a>
          </h5>
        </div>
      </div>
      <div class="project-item">
        <img src="/homeassets/img/projects/project2.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project2.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">Gas Monetisation Assessment of Midstream/Downstream Domestic
            Market</a>
          <h5>
            <a href="#" class="tittle text-black">Savannah Energy - Uquo/Eket</a>
          </h5>
        </div>
      </div>
      <div class="project-item">
        <img src="/homeassets/img/projects/project6.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project6.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">Provision of Technical Support Services for EHGC Gas Transmission
            System</a>
          <h5>
            <a href="#" class="tittle text-black">Savannah Energy - Akwa-Ibom/Cross River</a>
          </h5>
        </div>
      </div>
      <div class="project-item">
        <img src="/homeassets/img/projects/project3.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project3.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">EPC for 25mmscfd CNG Motherstation</a>
          <h5>
            <a href="#" class="tittle text-black">Gastech/Mikano - Sagamu</a>
          </h5>
        </div>
      </div>
      <div class="project-item">
        <img src="/homeassets/img/projects/project5.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project5.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">EPC for 100mmscf Ikeja Citygate Upgrade</a>
          <h5>
            <a href="#" class="tittle text-black">Gaslink - Lagos</a>
          </h5>
        </div>
      </div>
      <div class="project-item">
        <img src="/homeassets/img/projects/project7.png" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/projects/project7.png" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-text p-3">
          <a href="#" class="category text-black">Obodo Flowstation Upgrade</a>
          <h5>
            <a href="#" class="tittle text-black">Gaslink - Lagos</a>
          </h5>
        </div>
      </div>
      {{-- <div class="project-item">
        <img src="/homeassets/img/project-2.jpg" alt="projects" />
        <div class="overlay"></div>
        <a href="/homeassets/img/project-2.jpg" class="view-icon img-popup" data-gall="project">
          <i class="fas fa-expand"></i></a>
        <div class="projects-content">
          <a href="#" class="category">Architecture</a>
          <h3>
            <a href="#" class="tittle">Cathedral of brasilia brasilia</a>
          </h3>
        </div>
      </div> --}}
      
    </div>
  </div>
</section>
<!-- Mission statement -->
<div class="cta-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7 mb-4">
        <div class="cta-content" style="text-align: left!important;">
          <h1 class="wow fadeInUp" style="color: white">Mission Statement</h1>
          <ul class="mission-list wow fadeInUp" data-wow-delay="300ms"
            style="list-style: disc; padding: 0; color: white;">
            <li style="margin-bottom: 15px;">
              <strong>To create value for strategic stakeholders</strong> through excellence and innovation.
            </li>
            <li style="margin-bottom: 15px;">
              <strong>To provide smart opportunity maturation, project development, and asset life cycle
                solutions</strong> for our clients.
            </li>
            <li>
              <strong>To recruit, retain, and reward a high-performance workforce.</strong>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-5">
        <div class="cta-content" style="text-align: left!important;">
          <h1 class="wow fadeInUp" style="color: white">Vision</h1>
          <p class="text-white">To be the model oil and Gas Engineering and project support company in our chosen space.
          </p>
        </div>
      </div>
    </div>
  </div>
</div>
<section class="work-pro-section padding">
  <div class="container">
    <h1 class="wow fadeInUp" style="color: white">Core Values</h1>
    <div class="row">
      <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">1</span>
          <div class="number-line"></div>
          <h3>Excellence</h3>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">2</span>
          <div class="number-line"></div>
          <h3>Innovation</h3>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">3</span>
          <div class="number-line"></div>
          <h3>Integrity</h3>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">4</span>
          <div class="number-line"></div>
          <h3>Professionalism</h3>
        </div>
      </div>
      <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">5</span>
          {{-- <div class="number-line"></div> --}}
          <h3>Teamwork</h3>
        </div>
      </div>
      {{-- <div class="col-lg-2 col-sm-6 col-6 sm-padding">
        <div class="work-pro-item text-center">
          <span class="number">6</span>
          <div class="number-line"></div>
          <h3>Quality</h3>
        </div>
      </div> --}}
    </div>
  </div>
</section>

<!-- About with image -->
<section class="content-section padding">
  <div class="container">
    <div class="row content-wrap">
      <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" class="box-shadow" src="/homeassets/img/trappettisafety.png" alt="img" />
      </div>
      <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
          {{-- <span>Explore The Features</span> --}}
          <h2>COMMUNITY, HEALTH, SAFETY, ENVIRONMENT & SECURITY (CASHES) POLICIES</h2>
          <p>
            Strong commitment to sound HSEQ (Health Safety Environment and Quality) practices in all aspects of our business. 
            </br>
            Applicable to all our partners-employees, client contractors, and visitors. 
            </br>
            Hazard and Risk Management Mindset (We are paranoid)
            </br>
            Driven by the minimum requirements of applicable codes, standards and recommended practice.

          </p>
          {{-- <a href="#" class="default-btn">Get Free Quote</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>




<!-- testimonial -->
{{-- <section class="testimonial-section bg-grey padding">
  <div class="dots"></div>
  <div class="container">
    <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
      <span>Testimonial</span>
      <h2>What people says</h2>
    </div>
    <div id="testimonial-carousel" class="testimonial-carousel box-shadow owl-carousel">
      <div class="testi-item d-flex align-items-center">
        <img src="/homeassets/img/testi-1.jpg" alt="img" />
        <div class="testi-content">
          <p>
            "Thank you for guiding us through the construction process,
            understanding, and always ready to accommodate our needs. We
            love our new space and know that it was built by the very best!"
          </p>
          <h3>Kyle Frederick</h3>
          <ul class="rattings">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <span>Director</span>
        </div>
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="testi-item d-flex align-items-center">
        <img src="/homeassets/img/testi-2.jpg" alt="img" />
        <div class="testi-content">
          <p>
            "Thank you for guiding us through the construction process,
            understanding, and always ready to accommodate our needs. We
            love our new space and know that it was built by the very best!"
          </p>
          <h3>Valentin Lacoste</h3>
          <ul class="rattings">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <span>Director</span>
        </div>
        <i class="fa fa-quote-right"></i>
      </div>
      <div class="testi-item d-flex align-items-center">
        <img src="/homeassets/img/testi-3.jpg" alt="img" />
        <div class="testi-content">
          <p>
            "Thank you for guiding us through the construction process,
            understanding, and always ready to accommodate our needs. We
            love our new space and know that it was built by the very best!"
          </p>
          <h3>José Carpio</h3>
          <ul class="rattings">
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
            <li><i class="fa fa-star"></i></li>
          </ul>
          <span>Director</span>
        </div>
        <i class="fa fa-quote-right"></i>
      </div>
    </div>
  </div>
</section> --}}




<div class="sponsor-section">
  <div class="dots"></div>
  <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
    <span></span>
    <h2 style="color:#172542">
      Our Clients
    </h2>
  </div>
  <div class="container">
    <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor1.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor2.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor3.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor4.jpg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor5.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor6.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/sponsor7.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/Accugas.jpg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/aiteo.jpeg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/aradel.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/axxella.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/chgc.jpg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/conoil.jpg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/gaslink.jpg" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/oando.png" alt="sponsor" style="opacity:1;" />
      </div>
      <div class="sponsor-item" style="margin-left:20px;">
        <img src="/homeassets/img/clients/ngc.jpg" alt="sponsor" style="opacity:1;" />
      </div>



    </div>
  </div>
</div>
@endsection