@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h2 class="fw-bold">Dashboard</h2>
        </div>
        <div class="container">
            <div class="row mt-5">
                {{-- All Users summary --}}
                <div class="col">
                    <h5 class="text-center bg-secondary text-white p-2">Users</h5>
                    <div class="user-bg p-4 mb-5">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Users</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <td>Active Users</td>
                                <th><span class="badge rounded-pill text-bg-success fs-6"> 3 </span></th>
                            </tr>
                            <tr>
                                <td>Not active Users</td>
                                <th><span class="badge rounded-pill text-bg-warning fs-6"> 3 </span></th>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Resavation summary --}}
                <div class="col">
                    <h5 class="text-center bg-secondary text-white p-2">Resavation</h5>
                    <div class="resavation-bg p-4">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Resavation</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> {{$allReservation}} </span></th>
                            </tr>
                            <tr>
                                <td>Conform Resavation</td>
                                <th><span class="badge rounded-pill text-bg-success fs-6"> {{$conformCountReservation}} </span></th>
                            </tr>
                            <tr>
                                <td>Reject Resavation</td>
                                <th><span class="badge rounded-pill text-bg-danger fs-6"> {{ $rejectedCountReservation}} </span></th>
                            </tr>
                            <tr>
                                <td>To Check Payment</td>
                                <th><span class="badge rounded-pill text-bg-warning fs-6"> {{ $conformCountPayment + $pendingCountPayment }} </span></th>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Blog Post summary --}}
                <div class="col">
                    <h5 class="text-center bg-secondary text-white p-2">Blog Post</h5>
                    <div class="user-bg p-4 mb-5">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Blog Post</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> {{$allBlogPost}} </span></th>
                            </tr>
                        </table>
                    </div>
                </div>

                {{-- Travel Packages summary --}}
                <div class="col">
                    <h5 class="text-center bg-secondary text-white p-2">Travel Packages</h5>
                    <div class="resavation-bg p-4">
                        <table class="table table-borderless">
                            <tr>
                                <th>All Travel Packges</th>
                                <th><span class="badge rounded-pill text-bg-primary fs-6"> {{$allTravelPackage}} </span></th>
                            </tr>
                            <tr>
                                <td>Adventure Tour</td>
                                <th><span class="badge rounded-pill text-bg-secondary fs-6"> {{$AdventureTour}} </span></th>
                            </tr>
                            <tr>
                                <td>Beach Holiday Tour</td>
                                <th><span class="badge rounded-pill text-bg-secondary fs-6"> {{$BeachHolidayTour}} </span></th>
                            </tr>
                            <tr>
                                <td>Cultural Tour</td>
                                <th><span class="badge rounded-pill text-bg-secondary fs-6"> {{$CulturalTour}} </span></th>
                            </tr>
                            <tr>
                                <td>Business Trip Tour</td>
                                <th><span class="badge rounded-pill text-bg-secondary fs-6"> {{$BusinessTripTour}} </span></th>
                            </tr>
                        </table>
                    </div>
                </div>

            </div>

            {{-- Show upcomming Bookings --}}
            {{-- <h3>Upcoming Events</h3>
            <div class="upcoming-events-details p-3 mt-4 bg-black text-white d-flex justify-content-between"> 
                    <span>Resavation Id</span>
                    <span>Travel Name</span>
                    <span>Travel Type</span>
                    <span>Travel Date</span>
                    <span>Duration</span>
                    <span>Action</span>
                </div>
                @foreach ($bookings as $booking)
                <div class="upcoming-events-bg mt-3">
                  <div class="upcoming-events-details p-3 bg-white text-dark d-flex justify-content-between rounded border border-primary">
                    <span>{{$booking->id}}</span>
                    @if (isset($booking->travelPackage))
                      <span>{{$booking->travelPackage->package_name}}</span>
                      <span>{{$booking->travelPackage->tour_type}}</span>
                    @else
                      <span>Travel Package Not Found</span>
                      <span>-</span>
                    @endif
                    <span>{{$booking->date}}</span>
                    <span>{{$booking->travelPackage->duration ?? 'N/A'}} days</span>  <button class="btn btn-primary"><b>View</b></button>
                  </div>
                </div>
              @endforeach                  
            </div> --}}

        </div>
</main>

    
@endsection