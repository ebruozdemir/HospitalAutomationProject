</div>
    </div>
  </div> <!-- .page-section -->

  @if(Route::has('login'))

   @auth

  <div class="page-section">
    <div class="container">
      <h1 class="text-center wow fadeInUp">Make an Appointment</h1>

      <form class="main-form" action="{{url('appointment')}}" method="POST">
        @csrf
        <div class="row mt-5 ">
          <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
            <input type="text" name="name" class="form-control" placeholder="Full name" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight">
            <input type="text" name="email" class="form-control" placeholder="Email address.." required>
          </div>
          <div class="col-12  py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="date" name="date" class="form-control" required>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="department" id="departement" class="custom-select" required>
              <option> Select </option>
               <option value="heart">Heart</option>
               <option value="skin">Skin</option>
               <option value="eye">Eye</option>
               <option value="dentist">Dentist</option>
            
    
              
            </select>
          </div>
          <div class="col-12 col-sm-6 py-2 wow fadeInRight" data-wow-delay="300ms">
            <select name="doctor_name" id="doctor_name" class="custom-select" required>
              <option> Select Doctor </option>
            
            
            @foreach($doctor as $doctors)
              <option value="{{$doctors->name}}">{{$doctors->name}}</option>
              @endforeach
              
            </select>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <input type="text" name="number" class="form-control" placeholder="Number.." required>
          </div>
          <div class="col-12 py-2 wow fadeInUp" data-wow-delay="300ms">
            <textarea name="message" id="message" class="form-control" rows="6" placeholder="Enter message.."></textarea>
          </div>
        </div>

        <button type="submit" style="background-color:gray;" class="btn btn-primary mt-3 wow zoomIn">Submit Request</button>
      </form>
    </div>
  </div> <!-- .page-section -->

  @endauth

            @endif