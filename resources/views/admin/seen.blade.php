<!DOCTYPE html>
<html lang="en">
  <head>

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    
</head>
<body>


      
<div class="card">
    @if(session()->has('message'))
    <div class="alert alert-success alert-dismissible fade show">
      
      {{session()->get('message')}}
    </div>
    @endif


    <div class="card-header">
      <h3 class=card-title>Content of Message</h3>
    </div>

    <div class="card-body p-0">
        <table class="table table-striped">
            <tr>
                 <th style="width:200px; padding:15px;">Sender Name</th>
                 <td>{{$data->name}}</td>
            </tr>

            <tr>
                 <th style="width:200px; padding:15px;">Date</th>
                 <td>{{$data->created_at}}</td>
            </tr>

            <tr>
                 <th style="width:200px; padding:15px;">Email</th>
                 <td>{{$data->email}}</td>
            </tr>

            <tr>
                 <th style="width:200px; padding:15px;">Phone</th>
                 <td>{{$data->phone}}</td>
            </tr>

            <tr>
                 <th style="width:200px; padding:15px;">Message</th>
                 <td>{{$data->message}}</td>
            </tr>
            <tr>
              <th> Answer:</th>
               <td> 
                     <form action="{{url('answer_message',$data->id)}}" method="POST" enctype="multipart/form-data">
                         @csrf
                             <textarea class="textarea" style="width:400px; height:100px;" id="answer" name="answer">{{$data->answer}}</textarea>
                         <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Send</button>
                         </div>

                     </form>

               </td>

       
          

            
           
         </table>
      </div>





         
     </div>








</div>



      
</body>
</html>