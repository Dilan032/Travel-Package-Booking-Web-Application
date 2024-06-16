{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="container "> 

      {{-- To display validation errors or success messages --}}
      @if ($errors->any())
      <div class="alert alert-danger">
          <ul class="fw-medium">
              @foreach ($errors->all() as $error)
                  <li>{{ $error }}</li>
              @endforeach
              <li class="fw-light">try again</li>
          </ul>
      </div>
      @endif

      @if (session('success'))
          <div class="alert alert-success">
              {{ session('success') }}
          </div>
      @endif

        <div class="d-flex">
          {{-- back to package btn --}}
          <a href="{{ route('user.travelPackage.show') }}">
            <img src="{{ asset('image/help-tools/home.svg') }}" width="40px" alt="home">
          </a>
          <p class="mt-3">All Package > {{ $travelPackage->package_name}} </p>
        </div>

        {{-- title --}}
        <div class="d-flex mt-2">
          <div class="flex-grow-1">
            <h2 class="fw-bold">{{ $travelPackage->tour_type }} to {{ $travelPackage->package_name}}</h2>
            <pre>Discover Minneriya, {{ $travelPackage->package_name}}</pre>
          </div>

          <div>
            <button type="button" class="btn btn-success fw-bold" >
              <img src="{{ asset('image/help-tools/whatsapp.svg') }}" width="25px" alt="whatsapp icon">
              {{-- Contact us for more details --}}
            </button>
            
            <button type="button" id="shareBtn" class="btn btn-primary fw-bold">
              Share
              <img src="{{ asset('image/help-tools/share.png') }}" width="30px" alt="share icon">
          </button>
          </div>
        </div>


      {{-- main images --}}  
      <div class="overflow-x-scroll">         
        <div class="row">
          <div class="col-4 ">
               
                @if ($travelPackage->image_1 != "")
                <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_1 ) }}" class="w-100" alt="image 1">
                @else
                <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="w-50" alt="image 1">
                @endif 
          </div>
          <div class="col-4 ">
                
                @if ($travelPackage->image_2 != "")
                <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_2 ) }}" class="w-100"  alt="image 2">
                @else
                <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="w-50" alt="image 1">
                @endif 
          </div>
          <div class="col-4 ">
                
                @if ($travelPackage->image_3 != "")
                <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_3 ) }}" class="w-100"  alt="image 3">
                @else
                <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="w-50" alt="image 1">
                @endif 
          </div>
        </div>
      </div>

        {{-- package details start --}}
        <h3 class="mt-5 fw-bold bg-for-user-list">Tour snapshot</h3>
        <div class="d-flex justify-content-between mt-4 bg-white text-dark p-3 ">

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/clock.svg') }}" alt="clock icon">
              <h5 class="fw-bold">Duration:</h5>
            </div>
            <p class="text-primary fs-5 fw-bold ms-4"> {{ $travelPackage->duration}} Days </p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/group.svg') }}" alt="Group icon">
              <h5 class="fw-bold">Tour Type:</h5>
            </div>
              <p class="text-primary fs-5 fw-bold ms-4"> {{ $travelPackage->tour_type}} </p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/doller.svg') }}" alt="Doller icon">
              <h5 class="fw-bold me-4">Price Start From : </h5>
            </div>
              <p class="text-primary fs-5 fw-bold ms-4"> ${{ $travelPackage->price_start_from}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
          </div>
        </div>

        {{-- Overview section --}}
        <h3 class="mt-5 fw-bold bg-for-user-list">Overview</h3>
        <p class="my-4">
          {{ $travelPackage->overview }}
        </p>

        <br>
        {{-- What's Includes and Excludes section --}}
        <div class="row mt-5">
          <div class="col-md-4 text-start">
            <h3 class="mb-4 fw-bold bg-for-user-list">Price Includes</h3>
              {!! $travelPackage->included_things !!}
          </div>
        </div>

        {{-- show important massage --}}
        <div class="alert alert-info mt-4 d-flex align-items-center" role="alert">
          <svg class="bi flex-shrink-0 me-2" role="img" aria-label="Info:" width="5%"><use xlink:href="#info-fill"/></svg>
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </svg>
          <div>
            <div>
              <strong>
                <ul>
                  <li> If you have any additional requests, change of accommodation, mode of transport etc. </li>
                  <li> You can specify it during the booking process. </li>
                  <li> Once the booking is complete, an invoice will be sent including all prices. </li>
                  <li>After that, you can pay for your reservation.</li>
                </ul>
              </strong>
            </div>
          </div>
        </div>

        {{-- masage background icon --}}
        <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
          <symbol id="check-circle-fill" viewBox="0 0 16 16">
            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
          </symbol>
          <symbol id="info-fill" viewBox="0 0 16 16">
            <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
          </symbol>
          <symbol id="exclamation-triangle-fill" viewBox="0 0 16 16">
            <path d="M8.982 1.566a1.13 1.13 0 0 0-1.96 0L.165 13.233c-.457.778.091 1.767.98 1.767h13.713c.889 0 1.438-.99.98-1.767L8.982 1.566zM8 5c.535 0 .954.462.9.995l-.35 3.507a.552.552 0 0 1-1.1 0L7.1 5.995A.905.905 0 0 1 8 5zm.002 6a1 1 0 1 1 0 2 1 1 0 0 1 0-2z"/>
          </symbol>
        </svg>


        {{-- Tour Plane List Booking form start--}}
        <h3 class="mt-5 fw-bold bg-for-user-list z-0 ">Tour Plane</h3>
        <div class="row mt-4">
          {{-- Tour Plane List --}}
          <div class="col-7 z-n1">
            <div class="bg-for-user-tourPlane">
              {!! $travelPackage->tour_plane_description !!}
            </div>
            
            <br><br>

            {{-- contact via whatsApp --}}
            <div class="text-bg-success p-3 rounded">
              <div class="d-flex justify-content-between">
                <div>
                  <h4>Personalize Tour Itinerary</h4>
                  <p>Connect with Our Team Member!</p>
                </div>
                <div>
                  <img src="{{ asset('image/help-tools/whatsapp.svg') }}" width="40px" alt="whatsApp icon">
                </div>
              </div>
            </div>

          </div>

          {{-- More Images --}}
          <div class="col-5">
            {{-- any details you can add hear --}}
          </div>
        </div>

        <hr class="mb-5">

        @auth

          @else
          <div class="alert alert-danger text-center" role="alert">
            Please login to your account before booking your travel package
          </div>
        @endauth


        {{-- Booking Form --}}
        <div class="d-flex justify-content-center">
          <div class="bokking-form p-3">
            <form action="{{route('user.booking.store')}}" method="post">
              @csrf
              <input type="hidden" name="package_id" value="{{ $travelPackage->id}}">    
            
           {{-- member details --}}
            <div class="row">
              <div class="col-6 ">
                <div class="bg-for-user-list">
                     {{-- select date --}}
                    <label for="Arrival_Date" class="fw-bold">Arrival Date</label>
                    <div class="form-floating mb-3 ">
                      <input type="date" class="form-control" name="date" id="floatingInput" placeholder="Select Date" required>
                      <label for="floatingInput">(required)</label>
                    </div>

                    {{-- select number of adults --}}
                    <label for="adult" class="fw-bold">Adult</label>
                    <div class="form-floating mb-3">
                      <input type="number" id="adults" name="number_of_adult" value="" min="0" oninput="updateTotalPrice()" class="form-control" id="floatingInput" placeholder="Adult" required>
                      <label for="floatingInput">( Age 18+ ) <b>{{ $travelPackage->per_adult_fee}} $</b> per person</label>
                    </div>
              

                    {{-- select number of Child --}}
                    <label for="Child" class="fw-bold">Child</label>
                    <div class="form-floating mb-3">
                      <input type="number" id="children" name="number_of_child" value="" min="0" oninput="updateTotalPrice()" class="form-control" id="floatingInput" placeholder="Child" required>
                      <label for="floatingInput">( Age 6 - 12 ) <b>{{ $travelPackage->per_child_fee}} $</b> per person</label>
                    </div>


                    {{-- price --}}
                    <div class="d-flex fw-bold fs-5 mb-2">
                      <label for="Booking_fee" class="flex-grow-1 ms-2">Price Start From: ($) </label>
                      <label for="fee" class="me-3"> {{ $travelPackage->price_start_from}}</label>
                    </div>

                    <div class="d-flex fw-bold text-white bg-dark fs-5">
                      <label for="Total_fee" class="flex-grow-1 ms-2">Total fee: ($)</label>
                      <input type="number" id="totalPrice" name="total_fee" value="0.00" readonly style="text-align: right; height:50px;">
                    </div> 
                </div>
            </div>

            <div class="col-6">
                  <div class="col">
                    {{--  massge --}}
                    <label for="Additional_requests" class="fw-bold mt-3">Where do you meet to start the tour?</label>
                    <div class="mt-2">
                      <select id="inputState" class="form-select" name="pick_up_location">
                        <option selected>From Hotel</option>
                        <option>From Airport</option>
                      </select>
                    </div>

                    <div class="form-floating mt-3">
                      <textarea class="form-control" name="pick_up_location_details" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px;"></textarea>
                      <label for="floatingTextarea2">Hotel or Airport Details.</label>
                    </div>
                    <div class="p-3 mt-2 bg-info-subtle text-info-emphasis fw-bold"> The booking can be paid after viewing the invoice. </div>
                  </div>
              </div>
            </div>

            @auth()
            {{-- Book Now button --}}
            <div class="d-grid gap-2 mt-3 bg-for-btn">
              <button type="submit" class="btn btn-primary fw-bold fs-5">Book Now</button>
            </div>

            @else
              {{-- <p class="text-center fs-5 m-5 text-danger">Pleace Login into your account and book your travel package</p> --}}
              <div class="d-grid gap-2 mt-3 bg-for-btn">
                <a href="{{ route('login') }}" type="submit" class="btn btn-primary fw-bold fs-5">Login</a>
              </div>
            @endauth
            <p class="mt-4 text-center">Not sure? You can cancel this reservation up to 24 hours | 
              Paying back | Contact us.
            </p>
          </div>
        </div>

        <hr class="mb-5">

      {{-- close container --}}
      </div>

      {{-- for calculate booking total fee --}}
      <script>
         const startFee = {{ $travelPackage->price_start_from}};
         const perAdultFee = {{$travelPackage->per_adult_fee}};
         const perChildFee = {{$travelPackage->per_child_fee}};

        function updateTotalPrice() {
            const children = parseInt(document.getElementById('children').value) || 0;
            const adults = parseInt(document.getElementById('adults').value) || 0;
            const totalPrice = startFee + (children * perChildFee) + (adults * perAdultFee);
            const formattedPrice = totalPrice.toFixed(2);
            document.getElementById('totalPrice').value = formattedPrice;
        }
    </script>
      

@endsection
