
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












<style type="text/css">
        label
        {
        
            display:inline-block;
            width:200px;
        }
        

        

    </style>





<div  style="padding-left:300px; padding-top:50px;" class="col-sm-12 col-lg-6 py-6">
        
        <form action="{{url('contact')}}" method="POST" enctype="multipart/form-data">
            
            @csrf

         <div style="padding:15px;">
            <label>Name</label>
            <input type="text" style="color:black;" name="name"  placeholder="Write the name" required>

         </div>

         <div style="padding:15px;">
            <label>Email</label>
            <input type="email" style="color:black;" name="email"  placeholder="Write the email" required>

         </div>

         <div style="padding:15px;">
            <label>Phone</label>
            <input type="number" style="color:black;" name="phone"  placeholder="Write the phone" required>

         </div>

         <div style="padding:15px;">
                  <label>Message</label>
                  <textarea id="message" style="color:black;" name="message" required></textarea>

                 </div>

                 <div style="padding:15px;">
          
          <input type="submit" value="Send" style="background-color:rgb(64, 64, 255)" class="btn btn-success">

       </div>


       

         

      </div>