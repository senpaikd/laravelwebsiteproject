<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="icon" href="{{ asset('img/favicon.png') }}" type="image/png" />
    <title>About Us</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/owl-carousel/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendors/nice-select/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  </head>

  <body>
    <!-- Start Header Menu Area -->
    <header class="header_area white-header">
      <div class="main_menu">
        <div class="search_input" id="search_input_box">
          <div class="container">
            <form class="d-flex justify-content-between" method="" action="">
              <input type="text" class="form-control" id="search_input" placeholder="Search Here" />
              <button type="submit" class="btn"></button>
              <span class="ti-close" id="close_search" title="Close Search"></span>
            </form>
          </div>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light">
          <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
              <img class="logo-2" src="{{ asset('img/logo2.png') }}" alt="" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span>
            </button>
            
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
              <ul class="nav navbar-nav menu_nav ml-auto">
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item active">
                  <a class="nav-link" href="{{ route('user.about.about') }}">About</a>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Pages</a>
                  <ul class="dropdown-menu">
                    <li class="nav-item">
                      <a class="nav-link" href="/url">Courses</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/url">Course Details</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/url">Elements</a>
                    </li>
                  </ul>
                </li>
                <li class="nav-item submenu dropdown">
                  <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Blog</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" href="{{ route('user.contact.show') }}">Contact</a>
                </li>
                <li class="nav-item">
                  <a href="#" class="nav-link search" id="search"><i class="ti-search"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </div>
    </header>
    <!-- End Header Menu Area -->

    <!-- Home Banner Area -->
    <section class="banner_area">
      <div class="banner_inner d-flex align-items-center">
        <div class="overlay"></div>
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-6">
              <div class="banner_content text-center">
                <h2>About Us</h2>
                <div class="page_link">
                  <a href="{{ route('home') }}">Home</a>
                  <a href="{{ route('user.about.about') }}">About Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Home Banner Area -->

    <!-- Start About Area -->
    <section class="about_area section_gap">
      <div class="container">
        <div class="row h_blog_item">
          <div class="col-lg-6">
            <div class="h_blog_img">
              <img class="img-fluid" src="{{ asset('img/about.jpg') }}" alt="" />
            </div>
          </div>
          <div class="col-lg-6">
            <div class="h_blog_text">
              <div class="h_blog_text_inner left right">
                <h4>Welcome to our Institute</h4>
                <p>
                  Subdue whales void god which living don't midst lesser
                  yielding over lights whose. Cattle greater brought sixth fly
                  den dry good tree isn't seed stars were.
                </p>
                <p>
                  Subdue whales void god which living don't midst lesser yieldi
                  over lights whose. Cattle greater brought sixth fly den dry
                  good tree isn't seed stars were the boring.
                </p>
                <a class="primary-btn" href="#">Learn More <i class="ti-arrow-right ml-1"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Area -->

    <!-- Start Feature Area -->
    <section class="feature_area section_gap_top title-bg">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3 text-white">Awesome Feature</h2>
              <p>Replenish man have thing gathering lights yielding shall you</p>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-student"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Scholarship Facility</h4>
                <p>One make creepeth, man bearing their firmament won't great heaven</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-book"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Sell Online Course</h4>
                <p>One make creepeth, man bearing their firmament won't great heaven</p>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6">
            <div class="single_feature">
              <div class="icon"><span class="flaticon-earth"></span></div>
              <div class="desc">
                <h4 class="mt-3 mb-2">Global Certification</h4>
                <p>One make creepeth, man bearing their firmament won't great heaven</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Feature Area -->

    <!-- Start Testimonial Area -->
    <div class="testimonial_area section_gap">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-5">
            <div class="main_title">
              <h2 class="mb-3">Client say about me</h2>
              <p>Replenish man have thing gathering lights yielding shall you</p>
            </div>
          </div>
        </div>

        <div class="row">
          <div class="testi_slider owl-carousel">
            <div class="testi_item">
              <div class="row">
                <div class="col-lg-4 col-md-6">
                  <img src="{{ asset('img/testimonials/t1.jpg') }}" alt="" />
                </div>
                <div class="col-lg-8">
                  <div class="testi_text">
                    <h4>Elite Martin</h4>
                    <p>Him, made can't called over won't there on divide there male fish beast own his day third seed sixth seas unto. Saw from</p>
                  </div>
                </div>
              </div>
            </div>
            <!-- Repeat for other testimonials -->
          </div>
        </div>
      </div>
    </div>
    <!-- End Testimonial Area -->

    <!-- Start Footer Area -->
    <footer class="footer_area">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
            <div class="footer_widget">
              <h4 class="footer_title">Our Courses</h4>
              <ul class="list">
                <li><a href="#">Data Science</a></li>
                <li><a href="#">Web Development</a></li>
                <li><a href="#">Business Intelligence</a></li>
                <li><a href="#">UI/UX Design</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="footer_widget">
              <h4 class="footer_title">Quick Links</h4>
              <ul class="list">
                <li><a href="#">About Us</a></li>
                <li><a href="#">Courses</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Blog</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-lg-4 col-md-6">
            <div class="footer_widget">
              <h4 class="footer_title">Get In Touch</h4>
              <p>123, Street Name, City Name, Country Name</p>
              <p>info@yourdomain.com</p>
            </div>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer Area -->

    <!-- Optional JavaScript -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/popper.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('vendors/owl-carousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('vendors/nice-select/js/jquery.nice-select.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
  </body>
</html>
