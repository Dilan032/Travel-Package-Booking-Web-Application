@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <a href="{{route('admin.booking')}}" type="button" class="btn btn-dark">
            <img src="{{ asset('image/help-tools/back.png') }}" alt="add icon" width="20px">    
            Back
        </a>
    </div>
    <h2 class="fw-light mb-4">
        {{-- if your are using foring key, you should loop the table and fetch data --}}
        @foreach ($bookings as $booking)
            <b>{{ $booking->user->name }}</b>'s Booking Details</h2>
        @endforeach
    
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

    <div class="container">
    <div class="row">
        <div class="col-6">
            <p class="d-inline-flex gap-1">
                <a class="btn btn-primary" data-bs-toggle="collapse" href="#TravelPackageInformation" role="button" aria-expanded="false" aria-controls="collapseExample">
                  Travel Package Information
                </a>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#BookingInformation" aria-expanded="false" aria-controls="collapseExample">
                  Booking Information
                </button>
                <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#ContacInformation" aria-expanded="false" aria-controls="collapseExample">
                    Contact Information
                  </button>
              </p>


              <section>
                <div class="collapse" id="ContacInformation">
                    <div class="card card-body">
                        <h4 class="mb-5">Contac Information</h4>
                        <table>
                            <tr>
                                <th>User Name :</th>
                                <td style="text-align: left;">{{ $booking->user->name }}</td>
                            </tr>
                            <tr>
                                <th>Country :</th>
                                <td style="text-align: left;">{{ $booking->user->user_country }} </td>
                            </tr>
                            <tr>
                                <th>Email :</th>
                                <td style="text-align: left;">{{ $booking->user->email }}</td>
                            </tr>
                            <tr>
                                <th>Phone Number :</th>
                                <td style="text-align: left;">{{ $booking->user->phone_number }}</td>
                            </tr>
                        </table>
                
       
      
                        <br><br><br><br>
                    </div>
                </div>
    
                <div class="collapse" id="BookingInformation">
                    <div class="card card-body" style="height: 600px;">
                        <div class="overflow-y-scroll">
                        {{-- for booking details --}}
                        <h4>Booking Information :</h4>
                        <div class="d-flex justify-content-between mt-4 w-75">
                            <div class=" p-2">
                                <h6>Booking Date :</h6>
                            </div>
                            <div class="p-2"><h6> {{ \carbon\carbon::parse($booking->created_at)->format('d M, Y') }} </h6></div>
                        </div>
                        <div class="d-flex justify-content-between w-75">
                            <div class=" p-2">
                                <h6>Travel Start Date :</h6>
                            </div>
                            <div class="p-2"><h6> {{ \carbon\carbon::parse($booking->date)->format('d M, Y') }} </h6></div>
                        </div>
                        <div class="d-flex justify-content-between w-75">
                            <div class=" p-2">
                                <h6>Number Of Adult :</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->number_of_adult }} </h6></div>
                        </div>
                        <div class="d-flex justify-content-between w-75">
                            <div class=" p-2">
                                <h6>Number Of Child :</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->number_of_child }} </h6></div>
                        </div>

                        <div class="mt-3 p-3 mb-4 bg-primary-subtle text-primary-emphasis">
                            <p><span class="fw-bold me-5">Pick Up Location  :</span> 
                                {{ $booking->pick_up_location }}
                            </p>
                        </div>
    
                        <div class="p-3 mb-2 bg-primary-subtle text-primary-emphasis">
                            <p> <span class="fw-bold me-5">Pick Up Location Details :</span> </p> 
                            <p>{{ $booking->pick_up_location_details }}</p>
                        </div>
    
                        <div class="d-flex justify-content-between mt-5 w-75">
                            <div class=" p-2">
                                <h6>Package Price Start From</h6>
                            </div>
                            <div class="p-2"><h6> {{$booking->package->price_start_from}} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75">
                            <div class=" p-2">
                                <h6>Per Adult Fee</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->package->per_adult_fee }} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75">
                            <div class=" p-2">
                                <h6>Per Child Fee</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->package->per_child_fee }} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75 bg-black text-white">
                            <div class=" p-2">
                                <h5>Total Fee</h5>
                            </div>
                            <div class="p-2"><h5> {{ $booking->total_fee }} $ </h5></div>
                        </div>
                        <br><br><br><br>
    
                        </div>                  
                    </div>
                </div>
    
                <div class="collapse" id="TravelPackageInformation">
                    <div class="card card-body" style="height: 600px;">
                        <div class="overflow-y-scroll">
                        <h4 class="mb-5">Travel Package Information</h4>
                        <div class="mb-2">
                            <p><span class="fw-bold me-5">Package id :</span> {{ $booking->package->id }} </p>
                        </div>
                        <div class="mb-2">
                            <p><span class="fw-bold me-3">Package Name :</span> {{ $booking->package->package_name }} </p>
                        </div>
                        <div class="mb-2">
                            <p><span class="fw-bold me-5 pe-2">Tour type :</span> {{ $booking->package->tour_type }} </p>
                        </div>
                        <div class="mb-2">
                            <p><span class="fw-bold me-5 pe-3">Duration :</span> {{ $booking->package->duration }} Days</p>
                        </div>
                        <div class="mb-4">
                            <p><span class="fw-bold">Overview :</span> 
                                <hr>
                                {{ $booking->package->overview }} 
                            </p>
                        </div>
                        <div class="mb-4">
                            <p><span class="fw-bold">Included Things :</span> 
                                <hr>
                                {!! $booking->package->included_things !!} 
                            </p>
                        </div>
                        <div class="mb-4">
                            <p><span class="fw-bold">Tour Plan :</span> 
                                <hr>
                                {!! $booking->package->tour_plane_description !!}
                            </p>
                        </div>
    
                        {{-- Price List --}}
                        <div class="d-flex justify-content-between mt-5 w-75">
                            <div class=" p-2">
                                <h6>Package Price Start From</h6>
                            </div>
                            <div class="p-2"><h6> {{$booking->package->price_start_from}} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75">
                            <div class=" p-2">
                                <h6>Per Adult Fee</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->package->per_adult_fee }} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75">
                            <div class=" p-2">
                                <h6>Per Child Fee</h6>
                            </div>
                            <div class="p-2"><h6> {{ $booking->package->per_child_fee }} $ </h6></div>
                        </div>
                        <div class="d-flex justify-content-between  w-75 bg-black text-white">
                            <div class=" p-2">
                                <h5>Total Fee</h5>
                            </div>
                            <div class="p-2"><h5> {{ $booking->total_fee }} $ </h5></div>
                        </div>
                        <br><br><br><br>
                        </div>
                    </div>
                </div> 
              </section>

              {{-- summery about booking --}}
            <section class="position-relative">
                {{-- All summery Details about Booking --}}
                <div class="all-summery-section-bg  ">
                    <div class="d-flex justify-content-around p-2">
                        <span class="fs-5 fw-semibold">Invoice </span>
                        <span>-> </span>
                        <span>
                            {{-- @if ( $booking->invoice_status  == "pending")
                                <span class="badge rounded-pill text-bg-info p-2">{{ $booking->invoice_status }}</span>
                            @elseif ( $booking->invoice_status  == "conform") --}}
                                <span class="badge rounded-pill text-bg-success p-2 fs-6">sent</span>
                            {{-- @elseif ( $booking->invoice_status  == "reject")
                                <span class="badge rounded-pill text-bg-danger p-2">{{ $booking->invoice_status }}</span>
                            @endif --}}
                        </span>
                    </div>
        
                    <div class="d-flex justify-content-around p-2">
                        <span class="fs-5 fw-semibold">Payment </span>
                        <span>-> </span>
                        <span>
                            @if ( $booking->payment_status  == "pending")
                                <span class="badge rounded-pill text-bg-info p-2">{{ $booking->payment_status }}</span>
                            @elseif ( $booking->payment_status  == "Success")
                                <span class="badge rounded-pill text-bg-success p-2 ">{{ $booking->payment_status }}</span>
                            @elseif ( $booking->payment_status  == "Reject")
                                <span class="badge rounded-pill text-bg-danger p-2 ">{{ $booking->payment_status }}</span>
                            @endif
                        </span>
                    </div>
        
        
                    <div class="d-flex justify-content-around p-2">
                        <span class="fs-5 fw-semibold">Booking </span>
                        <span>-> </span>
                        <span>
                            @if ( $booking->reservation_status  == "pending")
                                <span class="badge rounded-pill text-bg-info p-2">{{ $booking->reservation_status }}</span>
                            @elseif ( $booking->reservation_status  == "Conform")
                                <span class="badge rounded-pill text-bg-success p-2 ">{{ $booking->reservation_status }}</span>
                            @elseif ( $booking->reservation_status  == "Reject")
                                <span class="badge rounded-pill text-bg-danger p-2 ">{{ $booking->reservation_status }}</span>
                            @endif
                        </span>
                    </div>
        
        
                </div>
        
                {{-- payment section --}}
                <div class="d-flex justify-content-between payment-check-section-bg">
                    <span class="fs-5">Check Payment </span>
                    <span>
                        <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                            View
                        </button>
                    </span>
                </div>

                {{-- send Email when admin reject the booking --}}
                @if ($booking->payment_status  == "Reject")
                    <div class="d-flex justify-content-between payment-check-section-bg bg-danger text-white mt-5">
                        <span class="fs-5">Send Email </span>
                        <span>
                            <!-- Button trigger modal -->
                            <a href="mailto:{{$booking->user->email}}" type="button" class="btn btn-light">
                                Open
                            </a>
                        </span>
                    </div> 
                @endif

            </section>

        </div>
        {{-- Invoice design --}}
        <div class="col-6">
            <h2 class="fw-light">📃Invoice</h2>
            <form action="" method="post" class="mb-5">
                <div class="invoice-bg">
                    <div class="d-flex justify-content-evenly mb-4">
                        <div class="w-100">
                            <img src="{{ asset('image/logo.png') }}" height="100"  class="d-block"  alt="main image">
                            <h4>SriLanka Tours</h4>
                        </div>
                        <div>
                            <p>
                                📨No: 13, Kurunegala Road, 63000, Sri Lanka, Puttalam.
                            </p>
                        </div>
                    </div>
    
                    <h6>Invoice id : # </h6>
                    <pre>Invoice Date : </pre>
    
                    <br>
    
                    <h6>Traveller Info</h6>
                    <pre>Number Of Adult : {{ $booking->number_of_adult }}</pre>
                    <pre>Number Of Child : {{ $booking->number_of_child }}</pre>
                    
                    <div class="d-flex justify-content-between p-3 mb-2 bg-body-secondary">
                        <div><h6>Description</h6></div>
                        <div><h6>Total</h6></div>
                    </div>
                    <div class="d-flex justify-content-between p-3 bg-transparent text-body">
                        <div>
                            <h6>{{ $booking->package->package_name }}</h6>
                            <h6>{{ $booking->package->tour_type }}</h6>
                            <h6>{{ $booking->package->duration }} Days</h6>
                            <h6>Travel Date : {{ \carbon\carbon::parse($booking->date)->format('d M, Y') }}</h6>
                            <h6>PickUp  {{ $booking->pick_up_location }}</h6>
                            <p>{{ $booking->pick_up_location_details }}</p>
                        </div>
                        <div>
                            <h6>{{ $booking->package->price_start_from }} $</h6>
                        </div>  
                    </div>
        
                    {{-- new --}}
                    <div class="d-flex justify-content-between ps-3 bg-transparent text-body">      
                        <div>
                            <h6> Number of Travellers : {{ $booking->number_of_adult + $booking->number_of_child }} </h6>
                        </div>
                        <div>
                            <h6>52 $</h6>
                        </div> 
                    </div>
                    
                    <hr>

                    <div class="d-flex justify-content-between ps-3 p-2 bg-secondary-subtle text-secondary-emphasis">
                        <div><h6 class="ps-3">Total Fee</h6></div>
                        <div>{{ $booking->total_fee }} $</div>
                    </div>
                    
                    <hr>
                    
                </div>
                {{-- <div class="d-grid gap-2 mb-5">
                    <a href="" type="submit" class="btn btn-success btn-lg">Send Invoice</a>
                    <a href="" type="submit" class="btn btn-danger btn-lg">Reject Booking</a>
                </div> --}}
            </form>
        </div>
    </div>








    </div>
</main>


  <!-- Modal -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="staticBackdropLabel">Payment</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <img src="{{ asset('image/uploads/payment-recipt/'.$booking-> payment_receipt) }}" alt="payment Receipt Image" class="object-fit-contain img-fluid">
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
          <form action="{{route('admin.payment.receipt.image.Reject', $booking->id )}}" method="post">
            @csrf
            <button type="submit" class="btn btn-danger">Reject Booking</button>
          </form>
          <form action="{{route('admin.payment.receipt.image.Acccept', $booking->id )}}" method="post">
            @csrf
            <button type="submit" class="btn btn-success">Conform Booking</button>
          </form>
        </div>
      </div>
    </div>
  </div>

    
@endsection