@extends('home.layout.layout')

@section('content')

<section class="page-header" style="height:200px;">
  <div class="container">
    <div class="page-content text-center">
      <h2>Industries Served</h2>
    </div>
  </div>
</section>

<section class="about-section padding">
  <div class="container">
    <div class="row">
      <div class="col-lg-10 offset-lg-1">
        <div class="about-content text-center wow fadeInUp">
          <h2>DELIVERING ACROSS THE ENERGY VALUE CHAIN</h2>
          <p>
            From upstream production facilities to midstream gas transmission and downstream distribution, Trappetti
            supports operators, developers, industrial off-takers and public sector stakeholders with engineering and
            commercial solutions matched to the realities of each sector.
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
    <h2>Sectors We Serve</h2>
  </div>
  <div class="container">
    <div class="row">

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp">
          <div class="service-icon"><i class="flaticon-assembly-line"></i></div>
          <h3>UPSTREAM OIL &amp; GAS</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Production Facilities &amp; Flowstations</li>
            <li>Field Development Support</li>
            <li>Brownfield Upgrades</li>
            <li>Produced Water Management</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-assembly-line"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="100ms">
          <div class="service-icon"><i class="flaticon-conveyor"></i></div>
          <h3>MIDSTREAM GAS</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Gas Gathering &amp; Processing</li>
            <li>Transmission Pipelines</li>
            <li>Citygates &amp; Metering Stations</li>
            <li>Compression &amp; CNG Facilities</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-conveyor"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="200ms">
          <div class="service-icon"><i class="flaticon-3d-printer"></i></div>
          <h3>DOWNSTREAM &amp; DISTRIBUTION</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Gas Distribution Networks</li>
            <li>Industrial Gas Supply</li>
            <li>LDZ Development</li>
            <li>Retail &amp; Commercial Off-take</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-3d-printer"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp">
          <div class="service-icon"><i class="flaticon-control-system"></i></div>
          <h3>POWER &amp; UTILITIES</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Gas-to-Power Projects</li>
            <li>Captive &amp; Embedded Generation</li>
            <li>Fuel Supply Infrastructure</li>
            <li>Grid Support &amp; Storage</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-control-system"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="100ms">
          <div class="service-icon"><i class="flaticon-factory"></i></div>
          <h3>INDUSTRIAL &amp; MANUFACTURING</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Industrial Energy Supply</li>
            <li>Fuel Switching &amp; Conversion</li>
            <li>Utilities &amp; Process Infrastructure</li>
            <li>Energy Efficiency Programmes</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-factory"></i></div>
        </div>
      </div>

      <div class="col-lg-4 col-sm-6 sm-padding">
        <div class="service-item wow fadeInUp" data-wow-delay="200ms">
          <div class="service-icon"><i class="flaticon-gear"></i></div>
          <h3>ENERGY TRANSITION</h3>
          <ul style="list-style-type: none; padding-left: 20px; color: #518681;">
            <li>Battery Energy Storage (BESS)</li>
            <li>Solar &amp; Hybrid Systems</li>
            <li>Decarbonisation Planning</li>
            <li>Emissions &amp; Flare Reduction</li>
          </ul>
          <div class="overlay-icon"><i class="flaticon-gear"></i></div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="content-section padding">
  <div class="container">
    <div class="row content-wrap">
      <div class="col-lg-6 sm-padding wow fadeInLeft" data-wow-delay="100ms">
        <img class="box-shadow" src="/homeassets/img/mansmile.jpg" alt="img" />
      </div>
      <div class="col-lg-6 sm-padding">
        <div class="content-info wow fadeInRight" data-wow-delay="300ms">
          <h2>WHO WE WORK WITH</h2>
          <p>
            Our client base spans international and indigenous exploration and production companies, gas
            transmission and distribution operators, independent power producers, industrial off-takers and
            government agencies.
          </p>
          <ul style="padding-left: 20px; list-style-type: disc">
            <li>Exploration &amp; Production Companies</li>
            <li>Gas Transmission &amp; Distribution Operators</li>
            <li>Independent Power Producers</li>
            <li>Industrial &amp; Commercial Energy Users</li>
            <li>Government Agencies &amp; Regulators</li>
            <li>Project Developers &amp; Investors</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>

@endsection
