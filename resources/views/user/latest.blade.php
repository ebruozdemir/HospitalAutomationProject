@if(Route::has('login'))

@auth

<div class="page-section bg-light">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Announcements</h1>
      <div class="row mt-5">

      
 
       @foreach($announcement as $announcements)

        <div class="col-lg-4 py-2 wow zoomIn">
          <div class="card-blog">
            <div class="header">
              <div class="post-category">
                <a href="#">{{$announcements->title}}</a>
                </div>
              <a href="blog-details.html" class="post-thumb">
                <img src="duyuru/duyuru.png" alt="">
              </a>
            </div>

            <div class="body">
              <h5 class="post-title"><a href="blog-details.html">{{$announcements->message}}</a></h5>
              <div class="site-info">
                <div class="avatar mr-2">
                  <div class="avatar-img">
                    
                  </div>
              
                </div>
                <span class="mai-time"></span>{{$announcements->created_at}}
              </div>
            </div>
          </div>
        </div>

       

         @endforeach

        



     

       
        @endauth

            @endif