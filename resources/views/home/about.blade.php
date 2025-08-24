@extends('home.layout.layout')

@section('content')

<section class="page-header" style="height:200px;">
  <div class="container">
    <div class="page-content text-center">
      <h2>About us</h2>
    </div>
  </div>
</section>
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

<!-- About with image -->
<section class="content-section padding">
  <div class="container">
    <div class="row content-wrap">
      <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" class="box-shadow" src="/homeassets/img/manlooking.jpg" alt="img" />
      </div>
      <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
          {{-- <span>Explore The Features</span> --}}
          <h2>OUR PEOPLE</h2>
          <p>
            TNL is supported by an agile and highly dynamic workforce guided by an experienced management team. This
            approach aligns with our mission to attract, retain, and reward top performers.
          </p>
          <ul style="padding-left: 20px; list-style-type: disc">
            <li>Each member of TNL is carefully chosen and integrated to:</li>
            <li>Be value-driven</li>
            <li>Maintain a customer-focused mindset</li>
            <li>Approach challenges as problem solvers</li>
            <li>Uphold the principles of strategic operational excellence</li>
          </ul>
          {{-- <a href="#" class="default-btn">Get Free Quote</a> --}}
        </div>
      </div>
    </div>
  </div>
</section>

<!-- News  Blog OR Team -->
<section class="blog-section padding">
  <div class="container">
    <div class="section-heading text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
      <span>Team</span>
      <h2>OUR LEADERSHIP</h2>
    </div>
    <div class="row blog-wrap">
      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="blog-item box-shadow">
          <div class="blog-thumb">
            <img src="/homeassets/img/team/chukwuma.jpg" alt="post" />
            <span class="category"><a href="#">MD/CEO</a></span>
          </div>
          <div class="blog-content">
            <h3>
              <a href="#">Chukwuma Ezeike</a>
            </h3>
            <p>
              An experienced Energy Executive with over 25 years cognate experience in the upstream, midstream, and
              downstream sectors.<br>
              <span class="text-primary" style="cursor:pointer;"
                onclick="this.parentElement.querySelector('.full-profile').style.display='inline'; this.style.display='none';"><a
                  class="read-more">Read More</a></span>
              <span class="full-profile" style="display:none;">
                Well versed in the design and lifecycle management of oil and gas production assets, he worked with
                Shell Nigeria as Production Facilities Engineer and later moved to Oando Gas and Power (Now Axxela)
                where he developed the largest gas distribution network in sub-Saharan Africa including over 800mw of
                captive power generation.<br>
                Chukwuma has a Bachelor of Engineering degree from the University of Port Harcourt and an MBA from
                Imperial College Business School London.
              </span>
            </p>
          </div>
        </div>
      </div>
      {{-- <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="blog-item box-shadow">
          <div class="blog-thumb">
            <img src="/homeassets/img/team/chinedu1.jpg" alt="post" />
            <span class="category"><a href="#">Non-Executive Director</a></span>
          </div>
          <div class="blog-content">
            <h3>
              <a href="#">Chinedu Okoronkwo</a>
            </h3>
            <p>
              A seasoned policymaker and administrator Chinedu has held top executive positions in in the Nigerian Oil
              and Gas regulatory and industry sectors over the last 25 years.<br>
              <span class="text-primary" style="cursor:pointer;"
                onclick="this.parentElement.querySelector('.full-profile').style.display='inline'; this.style.display='none';"><a
                  class="read-more">Read More</a></span>
              <span class="full-profile" style="display:none;">
                He is noted for his mercurial leadership and of the Independent Petroleum Marketers Association of
                Nigeria (IPMAN) first as National President and presently as member Board of Trustees.
                The pioneering role he played in the nationwide campaign for Compressed Natural Gas as transport fuel of
                choice for commercial vehicles.His experience, competence and global network is priceless. Chinedu has
                made the list of ‘’MOVERS & SHAKERS OF THE NIGERIAN ECONOMY’’.

              </span>
            </p>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="blog-item box-shadow">
          <div class="blog-thumb">
            <img src="/homeassets/img/team/chris.jpeg" alt="post" />
            <span class="category"><a href="#">Chief Technical Officer</a></span>
          </div>
          <div class="blog-content">
            <h3>
              <a>Christopher Onyekwere</a>
            </h3>
            <p>
              Over 30 Years Subsurface Experience. Competent and well-rounded subsurface technical professional with
              requisite skills and work experience in well site operations.<br>
              <span class="text-primary" style="cursor:pointer;"
                onclick="this.parentElement.querySelector('.full-profile').style.display='inline'; this.style.display='none';"><a
                  class="read-more">Read More</a></span>
              <span class="full-profile" style="display:none;">
                Strong petrophysics evaluation and development petroleum engineering skills.
              </span>
            </p>
          </div>
        </div>
      </div> --}}
    </div>
  </div>
</section>


@endsection