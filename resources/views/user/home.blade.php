<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>One Health - Medical Center HTML5 Template</title>

  <link rel="stylesheet" href="../assets/css/maicons.css">

  <link rel="stylesheet" href="../assets/css/bootstrap.css">

  <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../assets/css/theme.css">
</head>
<body>

  <!-- Back to top button -->
  <div class="back-to-top"></div>

        </div> <!-- .row -->
      </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
      <div class="container">
        <a class="navbar-brand" href="#"><span class="text-primary">One</span>-Health</a>

        <form action="#">
          <div class="input-group input-navbar">
            <div class="input-group-prepend">
              <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
            </div>
            <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
          </div>
        </form>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>





        <div class="collapse navbar-collapse" id="navbarSupport">
          <ul class="navbar-nav ml-auto">
          


            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('home')}}">Home</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('doctors')}}">Doctors</a>
            </li>


            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('contactform')}}">Contact</a>
            </li>

            
           

            @if(Route::has('login'))

            @auth

            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('latestnews')}}">Latest News</a>
            </li>
            
            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('myappointment')}}">My Appointment</a>
            </li>

            </li>
            <li class="nav-item">
              <a class="nav-link" style="color:gray"href="{{url('mymessages')}}">My Messages</a>
            </li>


            <x-app-layout>
   
           </x-app-layout>


            @else


            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
            </li>

            <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
            </li>
              
            @endauth

            @endif




          </ul>
        </div> <!-- .navbar-collapse -->
      </div> <!-- .container -->
    </nav>
  </header>


 
  @if(session()->has('message'))

          <div class="alert alert-success">

            <button type="button"  class="close" data-dismiss="alert" >
              
              X
            </button>
 
            {{session()->get('message')}}


          </div>

        @endif


  <div class="page-hero bg-image overlay-dark" style="background-image: url(../assets/img/bg_image_1.jpg);">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <span class="subhead">Let's make your life happier</span>
        <h1 class="display-4">Healthy Living</h1>
        <a href="#" class="btn btn-primary">Let's Consult</a>
      </div>
    </div>
  </div>


  <div class="bg-light">
    <div class="page-section py-3 mt-md-n5 custom-index">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p><span>Contact</span> with us</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p><span>One</span>-Health Protection</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-accent text-white">
                <span class="mai-basket"></span>
              </div>
              <p><span>One</span>-Health Pharmacy</p>
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .page-section -->

    
    </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->


  @include('user.doctor')

  @include('user.latest')

  @include('user.appointment')

@include('user.footer')
<script src="../assets/js/jquery-3.5.1.min.js"></script>

<script src="../assets/js/bootstrap.bundle.min.js"></script>

<script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../assets/vendor/wow/wow.min.js"></script>

<script src="../assets/js/theme.js"></script>
  
</body>
</html>