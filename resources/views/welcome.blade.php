<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
    <title>Render4less - #1 3d rendering platform</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap">

<style>
  .jumbotron {
    font-family: 'Roboto', sans-serif;
    background-color: #f8f9fa;
    padding: 2rem;
    text-align: center;
  }

  .jumbotron h1 {
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
  }

  .jumbotron p {
    font-size: 1.2rem;
    margin-bottom: 0.5rem;
  }

  .form-control {
    margin-bottom: 1rem;
  }

  .btn-primary {
    background-color: #007bff;
    border-color: #007bff;
    font-size: 1.2rem;
    padding: 0.75rem 2rem;
  }

  .btn-primary:hover {
    background-color: #0069d9;
    border-color: #0062cc;
  }
  .auth-links {
        display: flex;
        justify-content: right;
        margin-top: 1px;
        margin-bottom: 3px;
    }

    .auth-links a {
        display: inline-block;
        padding: 5px 12px;
        background-color: blue;
        color: white;
        text-decoration: none;
        font-family: "Arial", sans-serif;
        font-size: 12px;
        border-radius: 5px;
        margin-right: 10px;
    }
</style>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/microsoft-translator-browser-sdk/lib/index.js"></script>

</head>

<body>
    <div id="content" data-original-lang="en">

   <!-- home page auth -->
   

  <!-- Spinner Start 
  <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
      <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
          <span class="sr-only">Loading...</span>
      </div>
  </div> -->


  <!-- Topbar Start -->
  <div class="container-fluid bg-light d-none d-lg-block">
      <div class="row align-items-center top-bar">
          <div class="col-lg-3 col-md-12 text-center text-lg-start">
              <a href="" class="navbar-brand m-0 p-0">
                  <h1 class="text-primary m-0">Render4less</h1>
              </a>
          </div>
          <div class="col-lg-9 col-md-12 text-end">
              <div class="h-100 d-inline-flex align-items-center me-4">
                  <i class="fa fa-map-marker-alt text-primary me-2"></i>
                  <p class="m-0">Mont Royal, Québec H4N2P7, Canada</p>
              </div>
              <div class="h-100 d-inline-flex align-items-center me-4">
                  <i class="far fa-envelope-open text-primary me-2"></i>
                  <p class="m-0">info@render4less.com</p>
              </div>
              
              <div class="h-100 d-inline-flex align-items-center">
                  <a class="btn btn-sm-square bg-white text-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                  <a class="btn btn-sm-square bg-white text-primary me-0" href=""><i class="fab fa-instagram"></i></a>
              </div>
          </div>
      </div>
      <div class="auth-links">
        @if (Route::has('login'))
            <div>
                @auth
                    <a href="{{ url('/dashboard') }}">Dashboard</a>
                @else
                    <a href="{{ route('login') }}">Log in</a>
    
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}">Register</a>
                    @endif
                @endauth
            </div>
        @endif
    </div>
    <div id="google_translate_element">
       
    </div>
  </div>
  <!-- Topbar End -->
  
<!-- top-banner -->
<div class="container">
  <img src="{{ asset('bg.jpeg') }}"  alt="Render4less" class="img-fluid">
  <div class="jumbotron">
    <h1>We are the number One 3D rendering platform for architects.</h1>
    <p>Flat rate: Only $49.99/Hour</p>
    <p>Create your Free account today</p>
    <form>
        <!--
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Company Name (optional)">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" required>
      </div>--> 
      <a href="{{ route('dashboard') }}" class="btn btn-primary" style="font-size:26px;">Sign Up</a>
        </form>
    <p>Get $200 credit when you join today (5 hour equivalent)</p>
  </div>
</div>
<!-- end top-banner -->
  <!-- Service Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-4">
              <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.1s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/arch.jpg') }}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Architecture</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.3s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/rs.jpg') }}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Real Estate</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6 service-item-top wow fadeInUp" data-wow-delay="0.5s">
                  <div class="overflow-hidden">
                      <img class="img-fluid w-100 h-100" src="{{ asset('img/deco.jpg') }}" alt="">
                  </div>
                  <div class="d-flex align-items-center justify-content-between bg-light p-4">
                      <h5 class="text-truncate me-3 mb-0">Decoration</h5>
                      <a class="btn btn-square btn-outline-primary border-2 border-white flex-shrink-0" href=""><i class="fa fa-arrow-right"></i></a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Service End -->


  <!-- About Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="row g-5">
              <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                  <h6 class="text-secondary text-uppercase">About Us</h6>
                  <h1 class="mb-4">We Are Trusted 3D Rendering Company Since 2014</h1>
                  <p class="mb-4">Welcome to our platform, the number one 3D rendering solution for architects! We provide exceptional services at a flat rate of only $49.99 per hour. With our user-friendly interface and streamlined process, creating stunning visualizations has never been easier.</p>
                  <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Quick turnaround time</p>
                  <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Strong Team</p>
                  <p class="fw-medium text-primary"><i class="fa fa-check text-success me-3"></i>Affordable Hourly Rates</p>
                  <div class="bg-primary d-flex align-items-center p-4 mt-5">
                      <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-white" style="width: 60px; height: 60px;">
                          <i class="fa fa-phone-alt fa-2x text-primary"></i>
                      </div>
                      <div class="ms-3">
                          <p class="fs-5 fw-medium mb-2 text-white">Support Team</p>
                          <h3 class="m-0 text-secondary">+1 512 345 6789</h3>
                      </div>
                  </div>
              </div>
              <div class="col-lg-6 pt-4" style="min-height: 500px;">
                  <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                      <img class="position-absolute img-fluid w-100 h-100" src="{{ asset('img/3dplan.jpeg') }}" style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                      <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50" src="{{ asset('img/2dplan.webp') }}" style="object-fit: cover;" alt="">
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- About End -->


  <!-- Fact Start -->
  <div class="container-fluid fact bg-dark my-5 py-5">
      <div class="container">
          <div class="row g-4">
              <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.1s">
                  <i class="fa fa-check fa-2x text-white mb-3"></i>
                  <h2 class="text-white mb-2" data-toggle="counter-up">10</h2>
                  <p class="text-white mb-0">Years Experience</p>
              </div>
              <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                  <i class="fa fa-users-cog fa-2x text-white mb-3"></i>
                  <h2 class="text-white mb-2" data-toggle="counter-up">+20</h2>
                  <p class="text-white mb-0">Expert Artist</p>
              </div>
              <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                  <i class="fa fa-users fa-2x text-white mb-3"></i>
                  <h2 class="text-white mb-2" data-toggle="counter-up">+100</h2>
                  <p class="text-white mb-0">Satisfied Clients</p>
              </div>
              <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                  <i class="fa fa-wrench fa-2x text-white mb-3"></i>
                  <h2 class="text-white mb-2" data-toggle="counter-up">+100</h2>
                  <p class="text-white mb-0">Compleate Projects</p>
              </div>
          </div>
      </div>
  </div>
  <!-- Fact End -->


  


  <!-- Booking Start -->
  <div class="container-fluid my-5 px-0">
      <div class="video wow fadeInUp" data-wow-delay="0.1s">
          <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/embed/DWRcNpR6Kdc" data-bs-target="#videoModal">
              <span></span>
          </button>

          <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                  <div class="modal-content rounded-0">
                      <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                      </div>
                      <div class="modal-body">
                          <!-- 16:9 aspect ratio -->
                          <div class="ratio ratio-16x9">
                              <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                  allow="autoplay"></iframe>
                          </div>
                      </div>
                  </div>
              </div>
          </div>

          <h1 class="text-white mb-4">The Bouraoui Group Ltd </h1>
          <h5 class="text-white mb-0">  With over 15 years of experience in Supply Chain and Network Operations practice, we can help you imagine, design, build, deliver, and run a robust supply chain. </h5>
      </div>
      <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
          <div class="row justify-content-center">
              <div class="col-lg-8">
                <div class="bg-light text-center p-5">
                    <h1 class="mb-4">Request A Quote</h1>
                    <form action="{{ route('quote') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-12 col-sm-6">
                                <input type="text" name="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <input type="email" name="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;">
                            </div>
                            <div class="col-12 col-sm-6">
                                <select name="service" class="form-select border-0" style="height: 55px;">
                                    <option selected>Select A Service</option>
                                    <option value="1">Architecture</option>
                                    <option value="2">Immobilier</option>
                                    <option value="3">Décoration</option>
                                </select>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="date" id="date1" data-target-input="nearest">
                                    <input type="text" name="company" class="form-control border-0 datetimepicker-input" placeholder="Company" style="height: 55px;">
                                </div>
                            </div>
                            <div class="col-12">
                                <textarea name="project_details" class="form-control border-0" placeholder="Project Details, 2D Plan ..."></textarea>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary w-100 py-3" type="submit">Send Now</button>
                            </div>
                        </div>
                    </form>
                </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Booking End -->


  <!-- Team Start -->
  <div class="container-xxl py-5">
      <div class="container">
          <div class="text-center wow fadeInUp" data-wow-delay="0.1s">
              <h6 class="text-secondary text-uppercase">Our Works</h6>
              <h1 class="mb-5">Description here or video</h1>
          </div>
          
        
  </div>
  <!-- Team End -->


  <!-- Testimonial Start -->
  <div class="container-xxl py-5 wow fadeInUp" data-wow-delay="0.1s">
      <div class="container">
          <div class="text-center">
              <h6 class="text-secondary text-uppercase">Testimonial</h6>
              <h1 class="mb-5">Our Clients Say!</h1>
          </div>
        
      </div>
  </div>
  <!-- Testimonial End -->


  <!-- Footer Start -->
  <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
      <div class="container py-5">
          <div class="row g-5">
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Address</h4>
                  <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Mont Royal, Québec H4N2P7, Canada</p>
                  <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1 512 345 67890</p>
                  <p class="mb-2"><i class="fa fa-envelope me-3"></i>info@render4less.com</p>
                  <div class="d-flex pt-2">
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-outline-light btn-social" href=""><i class="fab fa-linkedin-in"></i></a>
                  </div>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Opening Hours</h4>
                  <h6 class="text-light">Monday - Friday:</h6>
                  <p class="mb-4">09.00 AM - 06.00 PM</p>
                  <h6 class="text-light">Saturday :</h6>
                  <p class="mb-0">09.00 AM - 02.00 PM</p>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Services</h4>
                  <a class="btn btn-link" href="">Architecture</a>
                  <a class="btn btn-link" href="">Real Estate</a>
                  <a class="btn btn-link" href="">Decoration</a>
              </div>
              <div class="col-lg-3 col-md-6">
                  <h4 class="text-light mb-4">Newsletter</h4>
                  <p> Unlock the power of stunning visuals with our cutting-edge 3D rendering platform. Subscribe now and bring your designs to life like never before!</p>
                  <div class="position-relative mx-auto" style="max-width: 400px;">
                      <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                      <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                  </div>
              </div>
          </div>
      </div>
      <div class="container">
          <div class="copyright">
              <div class="row">
                  <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                      &copy; <a class="border-bottom" href="#">Render4less</a>, All Right Reserved.
                  </div>
                  <div class="col-md-6 text-center text-md-end">
                      <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                      Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a>
                  </div>
              </div>
          </div>
      </div>
  </div>
  <!-- Footer End -->

  <!-- Back to Top -->
  <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>
  </div>

  <!-- JavaScript Libraries -->
<script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('lib/wow/wow.min.js') }}"></script>
<script src="{{ asset('lib/easing/easing.min.js') }}"></script>
<script src="{{ asset('lib/waypoints/waypoints.min.js') }}"></script>
<script src="{{ asset('lib/counterup/counterup.min.js') }}"></script>
<script src="{{ asset('lib/owlcarousel/owl.carousel.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
<script src="{{ asset('lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

<!-- Template Javascript -->
<script src="{{ asset('js/main.js') }}"></script>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<!-- translator script -->
<script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"> </script>
<script>
function googleTranslateElementInit(){
    new google.translate.TranslateElement(
        {pageLanguage: 'en'},
        'google_translate_element'
    );
}
</script>

</body>

</html>