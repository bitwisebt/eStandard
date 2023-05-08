 
@extends('layouts.web_app')
@section('content')
  <!-- ======= hero Section ======= -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <ol id="hero-carousel-indicators" class="carousel-indicators"></ol>

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url(assets/img/hero-carousel/1.jpg)">
            <div class="carousel-container">
            @include('web.search')
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/2.jpg)">
            <div class="carousel-container">
              @include('web.search')
            </div>
          </div>

          <div class="carousel-item" style="background-image: url(assets/img/hero-carousel/3.jpg)">
            <div class="carousel-container">
              @include('web.search')
            </div>
          </div>

        </div>

        <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
          <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
        </a>

        <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
          <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
        </a>

      </div>
    </div>
  </section><!-- End Hero Section -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <div id="about" class="about-area area-padding">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="section-headline text-center">
              <h1>eStandards</h1>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- single-well start-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-left">
              <div class="single-well">
                <a href="#">
                  <img src="assets/img/about/bsb_build.jpg" alt="">
                </a>
              </div>
            </div>
          </div>
          <!-- single-well end-->
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="well-middle">
              <div class="single-well">
                <br>
                <p>
                  eStandards is an online platform to purchasing standards that provide guidelines, specifications, and requirements for various industries and sectors to ensure uniformity, safety, quality, and compatibility.<br>
                  In the past, acquiring standards typically involved physical copies that had to be purchased from BSB. However, with the advent of the internet and digital technologies, we are now offering the option to purchase and download standards online.<br>
                  eStandards provides search functionalities, browsing options, and secure payment systems to facilitate the selection and acquisition of relevant standards.<br>
                  The advantages of estandards include easy access, instant availability, cost savings (as physical distribution and printing costs are eliminated), and the ability to search and navigate through large collections of standards efficiently.
                </p>
              </div>
            </div>
          </div>
          <!-- End col-->
        </div>
      </div>
    </div><!-- End About Section -->

    <!-- ======= stand Section ======= -->
    <div id="standards" class="stand-area">
      <div class="stand-inner area-padding">
        <div class="stand-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Standards</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start Left stand -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="/technical_committee_list">
                    <img src="assets/img/standards/civil_engineering.jpg" alt="">
                  </a>
                </div>
                <div class="stand-text">
                  <br>
                  <h4>
                    <a href="/technical_committee_list"><span>Civil Engineering</span> <br> Technical Committee (TC 1)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Left stand -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/food_agri.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Food & Agriculture</span>
                      <br> Technical Committee (TC 2)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Right stand-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/electrical_elec.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Electrical & Electronics</span> <br> Technical Committee (TC 3)</a>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Right stand-->
            <!----------------------------------------------------------------------->
            <!-- Start Left stand -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/management.jpg" alt="">
                  </a>
                </div>
                <div class="stand-text">
                  <br>
                  <h4>
                    <a href="stand.html"><span>Basics & Management Systems</span> <br> Technical Committee (TC 4)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Left stand -->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/medicine.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Pharmaceutical & Traditional Medicines</span> <br> Technical Committee (TC 5)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Right stand-->
            <div class="col-md-4 col-sm-4 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/textile.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Textile</span> <br> Technical Committee (TC 6)</a>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Right stand-->
            <!--------------------------------------------------------------------->
            <!----------------------------------------------------------------------->
            <!-- Start Left stand -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/wood.jpg" alt="">
                  </a>
                </div>
                <div class="stand-text">
                  <br>
                  <h4>
                    <a href="stand.html"><span>Wood & Timber Products</span> <br> Technical Committee (TC 7)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Left stand -->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/mechinical.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Mechanical Engineering</span> <br> Technical Committee (TC 8)</a>
                  </h4>
                </div>
              </div>
              <!-- Start single stand -->
            </div>
            <!-- End Left stand-->
            <!-- Start Right stand-->
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/graphics.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Graphical Symbols</span> <br> Technical Committee (TC 9)</a>
                  </h4>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-sm-3 col-xs-12">
              <div class="single-stand">
                <div class="single-stand-img">
                  <a href="stand.html">
                    <img src="assets/img/standards/environment.jpg" alt="">
                  </a>
                </div>
                <br>
                <div class="stand-text">
                  <h4>
                    <a href="stand.html"><span>Environment & Sustainable</span> <br> Technical Committee (TC 10)</a>
                  </h4>
                </div>
              </div>
            </div>
            <!-- End Right stand-->
            <!--------------------------------------------------------->
          </div>
        </div>
      </div>
    </div><!-- End stand Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="contact-area">
      <div class="contact-inner area-padding">
        <div class="contact-overly"></div>
        <div class="container ">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="section-headline text-center">
                <h2>Contact us</h2>
              </div>
            </div>
          </div>
          <div class="row">
            <!-- Start contact icon column -->
            <div class="col-md-3">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-phone"></i>
                  <p>
                    <b>PABX:</b> +975-2-324105/325104 <br>
                    <b>Direct:</b> +975-2-326483 /327759/326905 <br>
                    <b>Fax:</b> +975-2-323712/328298 <br>
                    <span>Monday-Friday (9am-5pm)</span>
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-6">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-envelope"></i>
                  <p>
                    <b>Certification Division</b> cd@bsb.gov.bt <br>
                    <b>International Relations Division</b> ird@bsb.gov.bt <br>
                    <b>Metrology and Laboratory Services Division</b> mlsd@bsb.gov.bt <br>
                    <b>Standardization Division</b> sd@bsb.gov.bt
                  </p>
                </div>
              </div>
            </div>
            <!-- Start contact icon column -->
            <div class="col-md-3">
              <div class="contact-icon text-center">
                <div class="single-icon">
                  <i class="bi bi-geo-alt"></i>
                  <p>
                    Rijug Lam,<br>
                    <span>Thimphu(11001), Bhutan</span>
                  </p>
                </div>
              </div>
            </div>
          </div>
          <hr>
          <div class="row">
            <!-- Start Google Map -->
            <div class="col-md-6">
              <!-- Start Map -->
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3539.892773923089!2d89.64040157335123!3d27.472597376317946!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39e194135efec9cd%3A0x9bd0b699bfa67dc9!2sBhutan%20Standards%20Bureau!5e0!3m2!1sen!2sbt!4v1683370513939!5m2!1sen!2sbt" width="100%" height="380" frameborder="0" style="border:0" allowfullscreen></iframe>
              <!-- End Map -->
            </div>
            <!-- End Google Map -->

            <!-- Start  contact -->
            <div class="col-md-6">
              <div class="form contact-form">
                <form action="forms/contact.php" method="post" role="form" class="php-email-form">
                  <div class="form-group">
                    <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  </div>
                  <div class="form-group mt-3">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                  </div>
                  <div class="form-group mt-3">
                    <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
                  </div>
                  <div class="my-3">
                    <div class="loading">Loading</div>
                    <div class="error-message"></div>
                    <div class="sent-message">Your message has been sent. Thank you!</div>
                  </div>
                  <div class="text-center"><button type="submit">Send Message</button></div>
                </form>
              </div>
            </div>
            <!-- End Left contact -->
          </div>
        </div>
      </div>
    </div><!-- End Contact Section -->

  </main><!-- End #main -->
@endsection