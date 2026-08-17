@extends('home.layout.layout')

@section('content')

<section class="page-header" style="height:200px;">
  <div class="container">
    <div class="page-content text-center">
      <h2>Sustainability (ESG)</h2>
    </div>
  </div>
</section>

<section class="about-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="about-content text-center wow fadeInUp">
          <h2>BUILDING ENERGY INFRASTRUCTURE RESPONSIBLY</h2>
          <p>
            Sustainability is embedded in how we mature opportunities, design facilities and operate assets. We
            help clients reduce emissions, manage environmental impact and build infrastructure that supports a
            cleaner energy future while creating lasting value for host communities and the people who work
            with us.
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
    <h2>Our ESG Commitments</h2>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp">
          <div class="service-icon"><i class="flaticon-factory"></i></div>
          <h3>ENVIRONMENT</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Flare &amp; Emissions Reduction</li>
            <li>Produced Water Treatment</li>
            <li>Energy Efficiency by Design</li>
            <li>Environmental Compliance</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-factory"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="100ms">
          <div class="service-icon"><i class="flaticon-worker"></i></div>
          <h3>SOCIAL</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Host Community Engagement</li>
            <li>Local Content Development</li>
            <li>Skills Transfer &amp; Training</li>
            <li>Safe Workplaces for All</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-worker"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="200ms">
          <div class="service-icon"><i class="flaticon-control-system"></i></div>
          <h3>GOVERNANCE</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Ethics &amp; Business Integrity</li>
            <li>Regulatory Compliance</li>
            <li>Transparent Procurement</li>
            <li>Risk &amp; Assurance Framework</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-control-system"></i></div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="content-section padding">
  <div class="container">
    <div class="row content-wrap">
      <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" src="/homeassets/img/trappettisafety.png" alt="img" />
      </div>
      <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
          <h2>COMMUNITY, HEALTH, SAFETY, ENVIRONMENT &amp; SECURITY (CASHES)</h2>
          <p>
            Strong commitment to sound HSEQ (Health, Safety, Environment and Quality) practices in all aspects of
            our business.
          </p>
          <ul style="padding-left: 20px; list-style-type: disc">
            <li>Applicable to all our partners employees, clients, contractors and visitors</li>
            <li>Hazard and Risk Management Mindset</li>
            <li>Driven by the minimum requirements of applicable codes, standards and recommended practice</li>
            <li>Continuous improvement through audit, review and learning</li>
          </ul>
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
          <h1 class="wow fadeInUp" style="color: white">Supporting the Energy Transition</h1>
          <p class="text-white">
            Natural gas remains central to Nigeria's energy security and industrial growth. We help clients
            monetise gas efficiently while investing in the storage, efficiency and renewable solutions that will
            define the next phase of the energy system.
          </p>
        </div>
      </div>
      <div class="col-lg-4 col-md-5 d-flex align-items-center">
        <a href="/contact" class="default-btn">Discuss Your Project</a>
      </div>
    </div>
  </div>
</div>

@endsection
