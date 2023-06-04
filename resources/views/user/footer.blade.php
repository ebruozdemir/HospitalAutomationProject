




<footer class="page-footer">
    <div class="container">
      <div class="row px-md-3">

      <style type="text/css">
        label
        {
        
            display:inline-block;
            width:200px;
        }
        

        

    </style>
   
          <div class="col-sm-12 col-lg-6 py-6">
             <h5><strong>Contact</strong></h5>
                 
                  <p class="footer-link mt-2">351 Willow Street Franklin, MA 02038</p>
                    <a href="#" class="footer-link">701-573-7582</a>
                    <a href="#" class="footer-link">healthcare@temporary.net</a>
           </div>
       
        
       

        <div class="col-sm-12 col-lg-6 py-6">
        
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


      











  </footer>
