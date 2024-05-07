{{-- in layouts folder, mainStructure file has user navigation bar and footer --}}
@extends('layouts/mainStructure')

@section('content')
      <div class="container "> 

        <div class="d-flex">
          {{-- back to package btn --}}
          <a href="{{ route('package') }}">
            <img src="{{ asset('image/help-tools/home.svg') }}" width="50px" alt="home">
          </a>
          <p class="mt-4">All Package > Package Name</p>
        </div>

        {{-- title --}}
        <div class="d-flex mt-2">
          <div class="flex-grow-1">
            <h2 class="fw-bold">Day Tour to Sigiriya</h2>
            <pre>Discover Minneriya, Sigiriya, and Dambulla's Cultural Riches</pre>
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
              <img src="{{ asset('image/package-image/sigiriya-main.svg') }}" class="d-block w-80" alt="image 1">
            </div>
            <div class="carousel-item object-fit-fill border rounded">
              <img src="{{ asset('image/package-image/elephent.svg') }}" class="d-block w-80" alt="image 2">
            </div>
            <div class="carousel-item object-fit-fill border rounded">
              <img src="{{ asset('image/package-image/sigiri-girls.svg') }}" class="d-block w-80" alt="image 3">
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
            <p class="ms-4">&nbsp;Approximately 10 hours</p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/group.svg') }}" alt="Group icon">
              <h6 class="fw-bold">Tour Type:</h6>
            </div>
            <p class="ms-4">&nbsp;&nbsp;Day Tours</p>
          </div>

          <div>
            <div class="d-flex gap-2 flex-row">
              <img src="{{ asset('image/help-tools/doller.svg') }}" alt="Doller icon">
              <h6 class="fw-bold">From:</h6>
            </div>
            <p class="ms-3">$400.00</p>
          </div>
        </div>

        <hr>

        {{-- Overview section --}}
        <h3 class="mt-5 fw-bold">Overview</h3>
        <p class="my-4">
          Embark on a mesmerizing 10-hour journey to the heart of Sri Lanka's cultural treasures. The Day Tour to Sigiriya invites you to explore Minneriya's wildlife sanctuary, ascend the iconic Sigiriya Rock, and 
          marvel at the ancient Royal Cave Temple Of Dambulla. Immerse yourself in history, nature, and spirituality on this unforgettable adventure.
        </p>
        
        <hr>

        {{-- What's Included section --}}
        <h3 class="mt-5 fw-bold">What's Included</h3>
          <ul class="lh-lg my-4">
            <li> Pickup and drop-off</li>
            <li> Knowledgeable Driver/Guide</li>
            <li> Comfortable Private Vehicle</li>
            <li> Bottled Water</li>
            <li> 24/7 Help Desk</li>
        </ul>

        <hr>

        {{-- Tour Plane List Booking form start--}}
        <h3 class="mt-5 fw-bold">Tour Plane</h3>
        <div class="row mt-4">
          {{-- Tour Plane List --}}
          <div class="col-7">
            <div class="accordion" id="accordionPanelsStayOpenExample">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true" aria-controls="panelsStayOpen-collapseOne">
                    <strong>Hotel Pickup (07:00 a.m.)</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show">
                  <div class="accordion-body">
                    Your adventure begins with a prompt pickup from your Kandy hotel. Our experienced driver-guide will be at your service, ready to guide you through a day of cultural exploration.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseTwo" aria-expanded="false" aria-controls="panelsStayOpen-collapseTwo">
                    <strong>Minneriya National Park</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseTwo" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Your adventure begins with a prompt pickup from your Kandy hotel. Our experienced driver-guide will be at your service, ready to guide you through a day of cultural exploration.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#panelsStayOpen-collapseThree" aria-expanded="false" aria-controls="panelsStayOpen-collapseThree">
                    <strong>Sigiriya Rock</strong>
                  </button>
                </h2>
                <div id="panelsStayOpen-collapseThree" class="accordion-collapse collapse">
                  <div class="accordion-body">
                    Your adventure begins with a prompt pickup from your Kandy hotel. Our experienced driver-guide will be at your service, ready to guide you through a day of cultural exploration.
                  </div>
                </div>
              </div>
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
                  <label for="floatingInput">(Age 18+) $200 per person</label>
                </div>
                {{-- select number of Child --}}
                <label for="Child" class="fw-bold">Child</label>
                <div class="form-floating mb-3">
                  <input type="number" name="Child" value="0" min="0" class="form-control" id="floatingInput" placeholder="Child" required>
                  <label for="floatingInput">(Age 6-17)  $100 per person</label>
                </div>

                {{-- aditional fees --}}
                <div class="d-flex fw-bold">
                  <label for="service_fee" class="flex-grow-1 ms-2">Service fee: </label>
                  <label for="fee" class="me-3">$50.00</label>
                  <input type="hidden"  name="service_fee" value="50.00" readonly><br>
                </div>

                <div class="d-flex fw-bold">
                  <label for="Booking_fee" class="flex-grow-1 ms-2">Booking fee: </label>
                  <label for="fee" class="me-3">$100.00</label>
                  <input type="hidden"  name="Booking_fee" value="50.00" readonly><br>
                </div>

                <div class="d-flex fw-bold">
                  <label for="Total_fee" class="flex-grow-1 ms-2">Total fee: </label>
                  <label for="fee" class="me-3">$150.00</label>
                  <input type="hidden" name="Total_fee" value="50.00" readonly><br><br>
                </div>

                {{-- Additional requests massge --}}
                <label for="Additional_requests" class="fw-bold">Additional requests</label>
                <div class="form-floating">
                  <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2" style="height: 150px;"></textarea>
                  <label for="floatingTextarea2">Write Your Message</label>
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