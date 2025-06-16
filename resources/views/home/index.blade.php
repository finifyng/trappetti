@extends('home.layout.layout')

@section('content')
<div id="main-slider" class="dl-slider">
      <div class="single-slide">
        <div
          class="bg-img kenburns-top-right"
          style="background-image: url(/homeassets/img/slider-2.jpg)"
        ></div>
        <div class="overlay"></div>
        <div class="slider-content-wrap d-flex align-items-center text-center">
          <div class="container">
            <div class="slider-content">
              <div class="dl-caption big">
                <div class="inner-layer">
                  <div data-animation="fade-in-left" data-delay="2s" >
                    Excellence and Innovation </br>As You Grow
                  </div>
                </div>
              </div>
              <div class="dl-caption small" style="margin-top:40px;">
                <div class="inner-layer">
                  <div data-animation="fade-in-left" data-delay="3s">
                    Trappetti Nigeria Limited (TNL) is a technical service and consultancy company offering client specific business solutions
                  </div>
                </div>
              </div>
              <div class="dl-btn-group">d
                <div class="inner-layer">
                  <a
                    href="aboutus.html"
                    class="dl-btn"
                    data-animation="fade-in-left"
                    data-delay="3.5s"
                    >About us <i class="arrow_right"></i
                  ></a>
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
              Trappetti Nigeria Limited (TNL) is a technical service and consultancy company offering client specific business solutions.</br>
              TNL provides excellent professional services in facilities design, construction, inspection and maintenance, procurement, logistics support services, asset management, training and consultancy amongst other specialist services. </br>
              TNL is led by a team of experienced engineers and professionals who have sat on various sides of the business desk.
              TNL features a management framework built to thrive in a dynamic business environment towards ensuring continual quality service/product delivery and client satisfaction without compromising excellence.

              </p>
              <a href="aboutus.html" class="default-btn">More About Us</a>
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
      <div
        class="section-heading dark-background text-center mb-40 wow fadeInUp"
        data-wow-delay="100ms"
      >
        <span></span>
        <h2>
        Our Services
        </h2>
      </div>
      <div class="container">
        <div class="row">
          <div class="col-lg-10 offset-lg-1">
            <div
              id="service-carousel"
              class="service-carousel box-shadow owl-carousel"
            >
              <div class="service-item">
                <div class="service-icon">
                  <i class="flaticon-assembly-line"></i>
                </div>
                <h3>TECHNICAL PROCUREMENT</h3>
                
                <div class="overlay-icon">
                  <i class="flaticon-assembly-line"></i>
                </div>
              </div>
              <div class="service-item">
                <div class="service-icon">
                  <i class="flaticon-industrial-robot"></i>
                </div>
                <h3>EPC</h3>
                
                <div class="overlay-icon">
                  <i class="flaticon-industrial-robot"></i>
                </div>
              </div>
              <div class="service-item">
                <div class="service-icon">
                  <i class="flaticon-3d-printer"></i>
                </div>
                <h3>Asset Lifecycle Management</h3>
                
                <div class="overlay-icon">
                  <i class="flaticon-3d-printer"></i>
                </div>
              </div>
              
              
              <div class="service-item">
                <div class="service-icon">
                  <i class="flaticon-conveyor"></i>
                </div>
                <h3>SMART ENERGY SOLUTIONS (Bespoke Solar Solutions)</h3>
                
                <div class="overlay-icon">
                  <i class="flaticon-conveyor"></i>
                </div>
              </div>
              <div class="service-item">
                <div class="service-icon">
                  <i class="flaticon-control-system"></i>
                </div>
                <h3>MARINE SUPPORT SERVICES</h3>
                
                <div class="overlay-icon">
                  <i class="flaticon-control-system"></i>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- <section class="work-pro-section padding">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="work-pro-item text-center">
              <span class="number">1</span>
              <div class="number-line"></div>
              <h3>Planning & Research</h3>
              <p>
                We are committed building a sustainable future fostering a
                collaborative spirit.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="work-pro-item text-center">
              <span class="number">2</span>
              <div class="number-line"></div>
              <h3>Design & Ideas</h3>
              <p>
                We are committed building a sustainable future fostering a
                collaborative spirit.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="work-pro-item text-center">
              <span class="number">3</span>
              <div class="number-line"></div>
              <h3>Specialized Projects</h3>
              <p>
                We are committed building a sustainable future fostering a
                collaborative spirit.
              </p>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="work-pro-item text-center">
              <span class="number">4</span>
              <h3>Final Outputs</h3>
              <p>
                We are committed building a sustainable future fostering a
                collaborative spirit.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!-- <section class="projects-section padding">
      <div class="container">
        <div class="row d-flex align-items-center">
          <div class="col-lg-8 col-md-6">
            <div class="section-heading mb-40">
              <span>Projects</span>
              <h2>
                Discover the most fascinating <br />projects for our clients
              </h2>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 text-right">
            <a href="#" class="default-btn">View All Projects</a>
          </div>
        </div>
        <div
          id="projects-carousel"
          class="projects-carousel box-shadow owl-carousel"
        >
          <div class="project-item">
            <img src="/homeassets/img/project-1.jpg" alt="projects" />
            <div class="overlay"></div>
            <a
              href="/homeassets/img/project-1.jpg"
              class="view-icon img-popup"
              data-gall="project"
            >
              <i class="fas fa-expand"></i
            ></a>
            <div class="projects-content">
              <a href="#" class="category">Interior</a>
              <h3>
                <a href="#" class="tittle">Rectangular house near italy</a>
              </h3>
            </div>
          </div>
          <div class="project-item">
            <img src="/homeassets/img/project-2.jpg" alt="projects" />
            <div class="overlay"></div>
            <a
              href="/homeassets/img/project-2.jpg"
              class="view-icon img-popup"
              data-gall="project"
            >
              <i class="fas fa-expand"></i
            ></a>
            <div class="projects-content">
              <a href="#" class="category">Architecture</a>
              <h3>
                <a href="#" class="tittle">Cathedral of brasilia brasilia</a>
              </h3>
            </div>
          </div>
          <div class="project-item">
            <img src="/homeassets/img/project-3.jpg" alt="projects" />
            <div class="overlay"></div>
            <a
              href="/homeassets/img/project-3.jpg"
              class="view-icon img-popup"
              data-gall="project"
            >
              <i class="fas fa-expand"></i
            ></a>
            <div class="projects-content">
              <a href="#" class="category">Design</a>
              <h3>
                <a href="#" class="tittle">Harpa concert hall reykjavik</a>
              </h3>
            </div>
          </div>
          <div class="project-item">
            <img src="/homeassets/img/project-4.jpg" alt="projects" />
            <div class="overlay"></div>
            <a
              href="/homeassets/img/project-4.jpg"
              class="view-icon img-popup"
              data-gall="project"
            >
              <i class="fas fa-expand"></i
            ></a>
            <div class="projects-content">
              <a href="#" class="category">Architecture</a>
              <h3><a href="#" class="tittle">Milwauke museum wisconsin</a></h3>
            </div>
          </div>
          <div class="project-item">
            <img src="/homeassets/img/project-5.jpg" alt="projects" />
            <div class="overlay"></div>
            <a
              href="/homeassets/img/project-5.jpg"
              class="view-icon img-popup"
              data-gall="project"
            >
              <i class="fas fa-expand"></i
            ></a>
            <div class="projects-content">
              <a href="#" class="category">Design</a>
              <h3><a href="#" class="tittle">The dancing house prague</a></h3>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <div class="cta-section padding">
      <div class="container">
        <div class="cta-content text-center">
          <span class="wow fadeInUp">Mission Statement</span>
          <h3 style="color:white;" class="wow fadeInUp" data-wow-delay="300ms">
          TNL is committed to staying ahead of the competiton, through the provision of excellent technical quality services delivered through creative and highly motivated professionals.
          </h3 style="color:white;">
        </div>
      </div>
    </div>

    <!-- About with image -->
    <!-- <section class="content-section padding">
      <div class="container">
        <div class="row content-wrap">
          <div
            class="col-lg-6 sm-padding wow fadeInLeft"
            data-wow-delay="100ms"
          >
            <img
              class="box-shadow"
              class="box-shadow"
              src="/homeassets/img/content-1.jpg"
              alt="img"
            />
          </div>
          <div class="col-lg-6 sm-padding">
            <div class="content-info wow fadeInRight" data-wow-delay="300ms">
              <span>Explore The Features</span>
              <h2>Offering the most complete integrated package!</h2>
              <p>
                We are committed to building a sustainable future by fostering a
                collaborative spirit that creates exceptional experiences,
                balanced relationships, and community built environment.
                Building isn’t just job. It's our passion. With every project we
                undertake, we set the bar high and provide the best industry.
              </p>
              <a href="#" class="default-btn">Get Free Quote</a>
            </div>
          </div>
        </div>
      </div>
    </section> -->
   

    <!-- testimonial -->
    <!-- <section class="testimonial-section bg-grey padding">
      <div class="dots"></div>
      <div class="container">
        <div
          class="section-heading text-center mb-40 wow fadeInUp"
          data-wow-delay="100ms"
        >
          <span>Testimonial</span>
          <h2>What people says</h2>
        </div>
        <div
          id="testimonial-carousel"
          class="testimonial-carousel box-shadow owl-carousel"
        >
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
    </section> -->


    <!-- News  Blog -->
    <!-- <section class="blog-section padding">
      <div class="container">
        <div
          class="section-heading text-center mb-40 wow fadeInUp"
          data-wow-delay="100ms"
        >
          <span>From Blog</span>
          <h2>Speciallized news</h2>
        </div>
        <div class="row blog-wrap">
          <div class="col-lg-4 col-sm-6 sm-padding">
            <div class="blog-item box-shadow">
              <div class="blog-thumb">
                <img src="/homeassets/img/post-1.jpg" alt="post" />
                <span class="category"><a href="#">interior</a></span>
              </div>
              <div class="blog-content">
                <h3>
                  <a href="#"
                    >Minimalist trending in modern architecture 2019</a
                  >
                </h3>
                <p>
                  Building first evolved out dynamics between needs means
                  available building materials attendant skills.
                </p>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 sm-padding">
            <div class="blog-item box-shadow">
              <div class="blog-thumb">
                <img src="/homeassets/img/post-2.jpg" alt="post" />
                <span class="category"><a href="#">Architecture</a></span>
              </div>
              <div class="blog-content">
                <h3>
                  <a href="#"
                    >Terrace in the town yamazaki kentaro design workshop.</a
                  >
                </h3>
                <p>
                  Building first evolved out dynamics between needs means
                  available building materials attendant skills.
                </p>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 sm-padding">
            <div class="blog-item box-shadow">
              <div class="blog-thumb">
                <img src="/homeassets/img/post-3.jpg" alt="post" />
                <span class="category"><a href="#">Design</a></span>
              </div>
              <div class="blog-content">
                <h3>
                  <a href="#"
                    >W270 house são paulo arquitetos fabio jorge
                    architeqture.</a
                  >
                </h3>
                <p>
                  Building first evolved out dynamics between needs means
                  available building materials attendant skills.
                </p>
                <a href="#" class="read-more">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->

    <div class="sponsor-section">
      <div class="dots"></div>
      <div
        class="section-heading dark-background text-center mb-40 wow fadeInUp"
        data-wow-delay="100ms"
      >
        <span></span>
        <h2 style="color:#172542">
        Our Clients
        </h2>
      </div>
      <div class="container">
        <div id="sponsor-carousel" class="sponsor-carousel owl-carousel">
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor1.png" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor2.png" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor3.png" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor4.jpg" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor5.png" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor6.png" alt="sponsor" style="opacity:1;"/>
          </div>
          <div class="sponsor-item" style="margin-left:20px;">
            <img src="/homeassets/img/sponsor7.png" alt="sponsor" style="opacity:1;"/>
          </div>
          
        </div>
      </div>
    </div>
    <section class="widget-section padding" style="color:white;">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="widget-content">
              <a href="index-2.html"><img style="width:250px"src="/homeassets/img/trappetti-logowhite.png" alt="brand" /></a>
              <p>
			  Trappetti Nigeria Limited (TNL) is a technical service and consultancy company offering client specific business solutions.
              </p>
            </div>
          </div>
          <div class="col-lg-2 col-sm-6 sm-padding">
            <div class="widget-content">
              <h4>Company</h4>
              <ul class="widget-links">
                <li><a href="aboutus.html">About Us</a></li>
                <li><a href="contactus.html">Contact us</a></li>
              </ul>
            </div>
          </div>
          <div class="col-lg-3 col-sm-6 sm-padding">
            <div class="widget-content">
              <h4>Headquarters:</h4>
              <p>3b Elegba Festival Drive Oniru Layout Victoria Island Lagos</p>
              <h4>Fabrication Yard :</h4>
              <p>Km 39 Lekki Epe Expressway. Off Golf Course Road. Lakowe - Lagos.</p>
              <h4>US Office:</h4>
              <p>312 Applewood Dr Slidell LA. 70641 USA</p>
              <span
                ><a
                  href="#"
                  class="__cf_email__"
                  >info@trappettigroup.com</a
                ></span
              >
              <span>+1 945 2400 775</span>
            </div>
          </div>
          <div class="col-lg-4 col-sm-6 sm-padding">
            <div class="widget-content">
              <h4>Newslatter Subscription</h4>
              
              <div class="subscribe-box clearfix">
                <div class="subscribe-form-wrap">
                  <form action="#" class="subscribe-form">
                    <input
                      type="email"
                      name="email"
                      id="subs-email"
                      class="form-input"
                      placeholder="Enter Your Email Address..."
                    />
                    <button type="submit" class="submit-btn">Subscribe</button>
                    <div id="subscribe-result">
                      <p class="subscription-success"></p>
                      <p class="subscription-error"></p>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection