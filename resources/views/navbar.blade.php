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
</head>

<body>
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
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Name" required>
      </div>
      <div class="form-group">
        <input type="text" class="form-control" placeholder="Company Name (optional)">
      </div>
      <div class="form-group">
        <input type="email" class="form-control" placeholder="Email" required>
      </div>
      <button type="submit" class="btn btn-primary">Sign Up</button>
    </form>
    <p>Get $200 credit when you join today (5 hour equivalent)</p>
  </div>
</div>
<!-- end top-banner -->
</body>
</html>
