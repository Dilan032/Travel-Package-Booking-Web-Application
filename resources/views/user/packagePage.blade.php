{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="container "> 

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


        {{-- Carousel (image slides) --}}
        <div id="carouselExampleAutoplaying" class="carousel slide" data-bs-ride="carousel">  
            <div class="carousel-inner " style="height: 600px;">
              <div class="carousel-item active object-fit-fill border rounded">
                  {{-- image 1--}}
                  @if ($travelPackage->image_1 != "")
                    <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_1 ) }}" class="d-block w-80" alt="image 1">
                  @else
                    <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="d-block w-80" alt="image 1">
                  @endif 
              </div>

            
              <div class="carousel-item active object-fit-fill border rounded">
                  {{-- image 2--}}
                  @if ($travelPackage->image_2 != "")
                    <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_2 ) }}" class="d-block w-80" alt="image 2">
                  @else
                    <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="d-block w-80" alt="image 1">
                  @endif 
            </div>

            
            <div class="carousel-item active object-fit-fill border rounded">
                  {{-- image 3--}}
                  @if ($travelPackage->image_3 != "")
                    <img src="{{ asset('image/uploads/travelPackage/'.$travelPackage->image_3 ) }}" class="d-block w-80" alt="image 3">
                  @else
                    <img src="{{ asset('image/uploads/travelPackage/empty-image.png') }}" class="d-block w-80" alt="image 1">
                  @endif 
            </div>

          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

        {{-- package details start --}}
        <h3 class="mt-5 fw-bold">Tour snapshot</h3>
        <div class="d-flex justify-content-between mt-4">

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/clock.svg') }}" alt="clock icon">
              <h6 class="fw-bold">Duration:</h6>
            </div>
            <p class="ms-4">&nbsp;Approximately {{ $travelPackage->duration}} {{ $travelPackage->duration_type}}</p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/group.svg') }}" alt="Group icon">
              <h6 class="fw-bold">Tour Type:</h6>
            </div>
            <p class="ms-4">&nbsp;&nbsp; {{ $travelPackage->tour_type}} </p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/doller.svg') }}" alt="Doller icon">
              <h6 class="fw-bold">From:</h6>
            </div>
            <p class="ms-3"> ${{ $travelPackage->price_start_from}} </p>
          </div>
        </div>

        <hr>

        {{-- Overview section --}}
        <h3 class="mt-5 fw-bold">Overview</h3>
        <p class="my-4">
          {{ $travelPackage->overview}}
        </p>
        
        <hr>

        {{-- What's Included section --}}
        <h3 class="mt-5 fw-bold">What's Included</h3>
        {!! $travelPackage->included_things !!}

        <hr>

        {{-- Tour Plane List Booking form start--}}
        <h3 class="mt-5 fw-bold">Tour Plane</h3>
        <div class="row mt-4">
          {{-- Tour Plane List --}}
          <div class="col-7">
            {!! $travelPackage->tour_plane_description !!}
            
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

          {{-- Booking Form --}}
          <div class="col-5">
            <div class="d-flex justify-content-end pe-5">
              <div class="bokking-form p-3">

                  {{-- select date --}}
                <label for="Arrival_Date" class="fw-bold">Arrival Date</label>
                <div class="form-floating mb-3">
                  <input type="date" class="form-control" id="floatingInput" placeholder="Select Date" required>
                  <label for="floatingInput">(required)</label>
                </div>
                {{-- select number of adults --}}
                <label for="adult" class="fw-bold">Adult</label>
                <div class="form-floating mb-3">
                  <input type="number" name="adults" value="0" min="0" class="form-control" id="floatingInput" placeholder="Adult" required>
                  <label for="floatingInput">(Age 18+) ${{ $travelPackage->per_adult_fee}} per person</label>
                </div>
                {{-- select number of Child --}}
                <label for="Child" class="fw-bold">Child</label>
                <div class="form-floating mb-3">
                  <input type="number" name="Child" value="0" min="0" class="form-control" id="floatingInput" placeholder="Child" required>
                  <label for="floatingInput">(Age 6-17)  ${{ $travelPackage->per_child_fee}} per person</label>
                </div>

                {{-- Additional requests massge --}}
                <label for="Additional_requests" class="fw-bold">Additional requests</label>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 120px;"></textarea>
                  <label for="floatingTextarea2">Write Your Message</label>
                </div>

                {{-- aditional fees --}}
                <div class="d-flex fw-bold mt-3 fs-5">
                  <label for="service_fee" class="flex-grow-1 ms-2">Service fee: </label>
                  <label for="fee" class="me-3">${{ $travelPackage->service_fee}}</label>
                  {{-- <input type="hidden"  name="service_fee" value="50.00" readonly><br> --}}
                </div>

                <div class="d-flex fw-bold fs-5">
                  <label for="Booking_fee" class="flex-grow-1 ms-2">Booking fee: </label>
                  <label for="fee" class="me-3">${{ $travelPackage->booking_fee}}</label>
                  {{-- <input type="hidden"  name="Booking_fee" value="50.00" readonly><br> --}}
                </div>

                <div class="d-flex fw-bold fs-5 text-white bg-dark">
                  <label for="Total_fee" class="flex-grow-1 ms-2">Total fee: </label>
                  <label for="fee" class="me-3 ">$150.00</label>
                  {{-- <input type="hidden" name="Total_fee" value="50.00" readonly><br><br> --}}
                </div>                
          
                {{-- search button --}}
                <div class="d-grid gap-2 mt-3">
                  <button type="button" class="btn btn-primary fw-bold fs-5">Book Now</button>
                </div>
                <p class="mt-4">Not sure? You can cancel this reservation up to 24 hours in advance for a full refund.</p>
              </div>
            </div>

          </div>
        </div>

        <hr class="mb-5">
        
      </div>
      

@endsection