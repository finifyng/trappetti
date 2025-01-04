@extends('home.layout.layout')

@section('content')
<section class="page-header" style="height:200px;">
    <div class="container">
        <div class="page-content text-center">
            <h2>Contact us</h2>
        </div>
    </div>
</section>
<section class="contact-section bg-grey padding">
    <div class="dots"></div>
    <div class="container">
        <div class="contact-wrap d-flex align-items-center row">
            <div class="col-md-6 padding-15">
                <div class="contact-info">
                    <h2>Get in touch with us & <br />send us message today!</h2>
                    <p>
                        Trappetti is committed to clarity regarding clients requirements.
                        Send us a message today and our technical experts will get back to you within 48hrs.
                    </p>

                    <h4>Head Office:</h4>
                    <p>3b Elegba Festival Drive Oniru Layout Victoria Island Lagos</p>
                    <h4>Fabrication Yard :</h4>
                    <p>Km 39 Lekki Epe Expressway. Off Golf Course Road. Lakowe - Lagos.</p>

                    <h4>
                        <span>Email:</span> trappettiltd@gmail.com <br />
                        <span>Phone:</span> 08033167341, 09112447592 , 08132953221 <br />
                        <span>Phone:</span> +1 945 2400 775
                    </h4>
                </div>
            </div>
            <div class="col-md-6 padding-15">
                <div class="contact-form">
                    <form action="#" method="post" id="ajax_form" class="form-horizontal">
                        <div class="form-group colum-row row">
                            <div class="col-sm-6">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name"
                                    required />
                            </div>
                            <div class="col-sm-6">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email"
                                    required />
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <textarea id="message" name="message" cols="30" rows="5" class="form-control message"
                                    placeholder="Message" required></textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-md-12">
                                <button id="submit" class="default-btn" type="submit">
                                    Send Message
                                </button>
                            </div>
                        </div>
                        <div id="form-messages" class="alert" role="alert"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!--<div class="mapouter">-->
<!--  <div class="gmap_canvas">-->
<!--    <iframe-->
<!--      width="100%"-->
<!--      height="350"-->
<!--      id="gmap_canvas"-->
<!--      src="https://maps.google.com/maps?q=Dynamic%20Layers&amp;t=&amp;z=11&amp;ie=UTF8&amp;iwloc=&amp;output=embed"-->
<!--      frameborder="0"-->
<!--      scrolling="no"-->
<!--      marginheight="0"-->
<!--      marginwidth="0"-->
<!--    ></iframe-->
<!--    ><a href="https://www.emojilib.com/"></a>-->
<!--  </div>-->
<!--  <style>-->
<!--    .mapouter {-->
<!--      position: relative;-->
<!--      text-align: right;-->
<!--      height: 350px;-->
<!--      width: 100%;-->
<!--    }-->
<!--    .gmap_canvas {-->
<!--      overflow: hidden;-->
<!--      background: none !important;-->
<!--      height: 350px;-->
<!--      width: 100%;-->
<!--    }-->
<!--  </style>-->
<!--</div>-->
<section class="widget-section padding" style="color:white;">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-sm-6 sm-padding">
                <div class="widget-content">
                    <a href="index-2.html"><img style="width:250px" src="img/trappetti-logowhite.png" alt="brand" /></a>
                    <p>
                        Trappetti Nigeria Limited (TNL) is a technical service and consultancy company offering client
                        specific business solutions.
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
                    <span><a href="#" class="__cf_email__">info@trappettigroup.com</a></span>
                    <span>+1 945 2400 775</span>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6 sm-padding">
                <div class="widget-content">
                    <h4>Newslatter Subscription</h4>

                    <div class="subscribe-box clearfix">
                        <div class="subscribe-form-wrap">
                            <form action="#" class="subscribe-form">
                                <input type="email" name="email" id="subs-email" class="form-input"
                                    placeholder="Enter Your Email Address..." />
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