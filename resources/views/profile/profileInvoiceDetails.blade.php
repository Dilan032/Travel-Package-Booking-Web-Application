@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-2">
        @include('profile.partials.sideMenu')
    </div>

    <div class="col-10 mx-auto p-4 dashbord-bg">
         {{-- To display validation errors or success messages --}}
        <div class="position-absolute w-50" style="margin-left: 310px; margin-top: -20px;">
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
        </div>



        <div class="row">
            <div class="col-8">
                <div class="flex-md-nowrap align-items-center pb-2 border-bottom">
                    <a href="{{route('profile.Invoice')}}" type="button" class="btn btn-dark">
                        <img src="{{ asset('image/help-tools/back.png') }}" alt="add icon" width="20px">    
                        Back
                    </a>
                </div>
                {{-- invoice design --}}
                <div class="overflow-y-scroll p-4 profile-invoice" style="height: 460px; background-color:white;">
                    <h2 class="fw-light">📃Invoice</h2>
                        <hr>
                    <form action="" method="post">
                        <div class="invoice-bg ">
                            <div class="d-flex justify-content-evenly mb-2">
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
                            <div class="mb-2">
                                Number Of Adult : {{ $booking->number_of_adult }} <br>
                                Number Of Child : {{ $booking->number_of_child }} 
                            </div>
                            
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
                    </form>
                </div>
            </div>
            <div class="col-4">
                
                {{-- All summery Details about Booking --}}
                <section class="position-relative">
                    <div class="profile-invoice-detail-bg bg-body-secondary">
                        <div class="d-flex justify-content-around p-2">
                            <span class="fs-5">Payment </span>
                            <span>-> </span>
                            <span>
                                @if ( $booking->payment_status  == "pending")
                                    <span class="badge rounded-pill text-bg-info p-2 fs-6">{{ $booking->payment_status }}</span>
                                @elseif ( $booking->payment_status  == "Success")
                                    <span class="badge rounded-pill text-bg-success p-2 fs-6">{{ $booking->payment_status }}</span>
                                @elseif ( $booking->payment_status  == "Reject")
                                    <span class="badge rounded-pill text-bg-danger p-2 fs-6">{{ $booking->payment_status }}</span>
                                @endif
                            </span>
                        </div>
            
                        <div class="d-flex justify-content-around p-2">
                            <span class="fs-5">Booking </span>
                            <span>-> </span>
                            <span>
                                @if ( $booking->reservation_status  == "pending")
                                    <span class="badge rounded-pill text-bg-info p-2 fs-6">{{ $booking->reservation_status }}</span>
                                @elseif ( $booking->reservation_status  == "Conform")
                                    <span class="badge rounded-pill text-bg-success p-2 fs-6">{{ $booking->reservation_status }}</span>
                                @elseif ( $booking->reservation_status  == "Reject")
                                    <span class="badge rounded-pill text-bg-danger p-2 fs-6">{{ $booking->reservation_status }}</span>
                                @endif
                            </span>
                        </div>
            
                        @if ($booking->payment_status  == "Reject")
                            <div class="p-3 bg-danger text-white">Check your email, we have sent an email about your payment.</div>
                        @else
                            <div> </div>
                        @endif
                        

                    </div>

                    
            
                    {{-- payment section --}}
                    <div class=" payment-bg">
                        <form action="{{route('user.payment.receipt.image', $booking->id )}}" method="post" enctype="multipart/form-data">
                            @csrf
                            <span class="fs-5 fw-bold">Make Payment </span>
                            <input type="file" class="btn btn-secondary mt-2 " name="payment_receipt" style="width: 250px;"/>
                            <br>
                            <button type="submit" class="btn btn-primary mt-2">Upload Now</button>
                        </form>
                    </div>

                    @if ($booking->payment_status  == "Reject")
                            <div> </div>
                        @else
                            <p class="font-monospace mt-4 text-primary">
                                Payment can be made in any way. Upload the receipt. We will check it and inform you about your reservation.
                            </p>
                        @endif
                    

                </section>
                
            </div>
        </div>
    </div>
</div>
    
@endsection