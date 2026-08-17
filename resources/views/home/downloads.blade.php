@extends('home.layout.layout')

@section('content')

<section class="page-header" style="height:200px;">
  <div class="container">
    <div class="page-content text-center">
      <h2>Downloads</h2>
    </div>
  </div>
</section>

<section class="about-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="about-content text-center wow fadeInUp">
          <h2>COMPANY RESOURCES</h2>
          <p>
            Download our company profile for a detailed overview of Trappetti's capabilities across engineering,
            gas commercialization, project development and energy infrastructure.
          </p>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="service-section bg-grey padding">
  <div class="dark-bg"></div>
  <div class="section-heading dark-background text-center mb-40 wow fadeInUp" data-wow-delay="100ms">
    <span></span>
    <h2>Available Documents</h2>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-6 offset-lg-3 col-sm-12 sm-padding">
        <div class="service-item wow fadeInUp">
          <div class="service-icon"><i class="flaticon-control-system"></i></div>
          <h3>TRAPPETTI COMPANY PROFILE</h3>
          <p style="color: #518681;">
            A complete overview of our services, project track record, capabilities and organisation.
          </p>
          @if ($profileAvailable)
            <a href="/{{ $profilePath }}" class="default-btn" download>
              Download PDF <i class="arrow_right"></i>
            </a>
          @else
            <p style="margin-top:15px;">
              Our latest company profile is being updated. To request a copy, please email
              <a href="mailto:info@trappettigroup.com">info@trappettigroup.com</a>
              or use our <a href="/contact">contact form</a>.
            </p>
            <a href="/contact" class="default-btn">Request Profile <i class="arrow_right"></i></a>
          @endif
          <div class="overlay-icon"><i class="flaticon-control-system"></i></div>
        </div>
      </div>

    </div>
  </div>
</section>

<div class="cta-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-7 mb-4">
        <div class="cta-content" style="text-align: left!important;">
          <h1 class="wow fadeInUp" style="color: white">Need More Information?</h1>
          <p class="text-white">
            For capability statements, project references or technical documentation specific to your scope,
            reach out to our team directly.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-5 d-flex align-items-center">
        <a href="/contact" class="default-btn">Contact Us</a>
      </div>
    </div>
  </div>
</div>

@endsection
