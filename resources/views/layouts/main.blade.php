<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Oropeza BPO Services | Business Process Outsourcing | Accounting | Tax | Payroll</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/img/favicon.png') }}" rel="icon">
  <link href="{{ asset('assets/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/vendor/animate.css/animate.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/remixicon/remixicon.css') }}" rel="stylesheet">
  <link href="{{ asset('assets/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/css/style.css') }}" rel="stylesheet">

</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">

      <h1 class="logo me-auto">
      <a href="/"><span>Oropeza</span>&nbsp;BPO</a>
      <!-- Uncomment below if you prefer to use an image logo -->
      <!-- <a href="/" class="logo me-auto me-lg-0"><img src="{{ asset('assets/img/logo.png') }}" alt="" class="img-fluid" style="height:100px"></a> -->
      </h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="/" class="active">Home</a></li>

          <li class="dropdown"><a href="/about"><span>About</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="/about">About Us</a></li>
              <li><a href="/about/#team">Team</a></li>

              <!--
              <li><a href="testimonials.html">Testimonials</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              -->

            </ul>
          </li>

          <li><a href="/#services">Services</a></li>

          <!--
          <li><a href="/portfolio">Portfolio</a></li>
          <li><a href="/pricing">Pricing</a></li>
          -->

          <li><a href="/blog">Blog</a></li>
          <li><a href="/contact">Contact</a></li>

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

      <div class="header-social-links d-flex">
        <a href="https://twitter.com/OropezaBPO" class="twitter"><i class="bu bi-twitter"></i></a>
        <a href="https://facebook.com/OropezaBPO" class="facebook"><i class="bu bi-facebook"></i></a>
        <a href="https://instagram.com/OropezaBPO" class="instagram"><i class="bu bi-instagram"></i></a>
        <!-- <a href="https://linkedin.com/in/bienoropeza" class="linkedin"><i class="bu bi-linkedin"></i></i></a> -->
      </div>

    </div>
  </header><!-- End Header -->

  <div  class="main-content">

    @yield('content')

  </div>

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-contact">
            <h3>Oropeza BPO</h3>
            <p>
              2990 Balabac Street <br>
              Pinagkaisahan, Makati<br>
              Philippines <br><br>
              <strong>Phone (TNT):</strong> <a href="tel:+639303262486">+63&nbsp;930&nbsp;326&nbsp;2486</a><br>
              <strong>Phone (Globe):</strong> <a href="tel:+639452947945">+63&nbsp;945&nbsp;294&nbsp;7945</a><br>
              <strong>Email:</strong> <a href="mailto:oropezabpo@gmail.com">OropezaBPO@gmail.com</a><br>
            </p>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/about">About us</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/blog">Blog</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/contact">Contact Us</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Tax Filing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Accounting</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Payroll</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Digital Marketing</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="/#services">Web Design</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Join Our Newsletter</h4>
            <p>Receive business insights towards profitability and sustainability</p>
            <form enctype="multipart/form-data" action="/subscribe" method="post">
              @csrf
              @if ($errors->any())
                <div class="alert alert-danger">
                  <ul>
                    @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                    @endforeach
                  </ul>
                </div>
              @endif
              <input type="email" name="email_address"><input type="submit" value="Subscribe">
            </form>
          </div>

        </div>
      </div>
    </div>

    <div class="container d-md-flex py-4">

      <div class="me-md-auto text-center text-md-start">
        <div class="copyright">
          &copy; Copyright <strong><span>Oropeza BPO</span></strong>. All Rights Reserved
        </div>
        <div class="credits">
          <!-- All the links in the footer should remain intact. -->
          <!-- You can delete the links only if you purchased the pro version. -->
          <!-- Licensing information: https://bootstrapmade.com/license/ -->
          <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/company-free-html-bootstrap-template/ -->
          Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
        </div>
      </div>
      <div class="social-links text-center text-md-right pt-3 pt-md-0">
        <a href="https://twitter.com/OropezaBPO" class="twitter"><i class="bx bxl-twitter"></i></a>
        <a href="https://facebook.com/OropezaBPO" class="facebook"><i class="bx bxl-facebook"></i></a>
        <a href="https://instagram.com/OropezaBPO" class="instagram"><i class="bx bxl-instagram"></i></a>
        <a href="https://linkedin.com/in/bienoropeza" class="linkedin"><i class="bx bxl-linkedin"></i></a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('assets/vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src="{{ asset('assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/js/main.js') }}"></script>

</body>

</html>
