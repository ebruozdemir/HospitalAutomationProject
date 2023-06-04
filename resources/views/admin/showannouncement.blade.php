<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->

    @include('admin.css')
    
  </head>
  <body>
    <div class="container-scroller">
      <div class="row p-0 m-0 proBanner" id="proBanner">
        <div class="col-md-12 p-0 m-0">
          <div class="card-body card-body-padding d-flex align-items-center justify-content-between">
            <div class="ps-lg-1">
              <div class="d-flex align-items-center justify-content-between">
                <p class="mb-0 font-weight-medium me-3 buy-now-text">Free 24/7 customer support, updates, and more with this template!</p>
                <a href="https://www.bootstrapdash.com/product/corona-free/?utm_source=organic&utm_medium=banner&utm_campaign=buynow_demo" target="_blank" class="btn me-2 buy-now-btn border-0">Get Pro</a>
              </div>
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <a href="https://www.bootstrapdash.com/product/corona-free/"><i class="mdi mdi-home me-3 text-white"></i></a>
              <button id="bannerClose" class="btn border-0 p-0">
                <i class="mdi mdi-close text-white me-0"></i>
              </button>
            </div>
          </div>
        </div>
      </div>
      <!-- partial:partials/_sidebar.html -->
     
        @include('admin.sidebar')
        <!-- partial -->

        @include('admin.navbar')

        <!-- partial -->

        <div class="container-fluid page-body-wrapper">

           <div  style="padding-top:100px;">

           
               <table>
                       <tr style="background-color:rgb(120, 154, 255);">
                            <th style="padding:15px;  font-size:20px;  color:white; width:250px; text-align:center;">Title</th>
                            <th style="padding:15px;  font-size:20px;  color:white; width:250px; text-align:center;">Announcement</th>
                            <th style="padding:15px;  font-size:20px;  color:white; width:250px; text-align:center;">Publish Date</th>
                            <th style="padding:15px;  font-size:20px;  color:white; width:100px; text-align:center;">Update Date</th>
                            <th style="padding:15px;  font-size:20px;  color:white; width:100px; text-align:center;">Update</th>
                         <th style="padding:15px;  font-size:20px;  color:white; width:200px; text-align:center;">Delete</th>
                        </tr>

                   @foreach($data as $announcements)
                        <tr align="center" style="background-color:white">
                              <td style="color:black; width:200px;">{{$announcements->title}}</td>
                              <td style="color:black; width:200px;">{{$announcements->message}}</td>
                              <td style="color:black; width:200px;">{{$announcements->created_at}}</td>
                              <td style="color:black; width:200px;">{{$announcements->updated_at}}</td>
                              <td>
                                   <a class="btn btn-primary" href="{{url('updateannouncement',$announcements->id)}}">Update</a>
                               </td>
                               <td>
                                   <a class="btn btn-danger" onclick="return confirm('Are you sure delete this doctor?')" href="{{url('deleteannouncement',$announcements->id)}}">Delete</a>
                                </td>
                        </tr>
                    @endforeach

                </table>
            </div>
        </div>


    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
    
    <!-- End custom js for this page -->
  </body>
</html>