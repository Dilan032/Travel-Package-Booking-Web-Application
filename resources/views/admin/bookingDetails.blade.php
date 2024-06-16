@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="fw-light">Booking Details</h2>
    </div>
    <div class="container">
        {{-- main three content --}}
        <div class="row text-center fw-semibold">
            <div class="col">
                <div class="Booking-detail-bg-first-3  bg-primary-subtle">
                    <p class="fs-3"> {{ $allReservation }} </p>
                    All Resavations
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-first-3 bg-primary-subtle">
                    <p class="fs-3"> {{ $conformCountReservation }} </p>
                    Conformed Resavations
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-first-3 bg-danger-subtle">
                    <p class="fs-3"> {{ $rejectedCountReservation }} </p>
                    Rejected resavations
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-first-3 bg-warning-subtle ">
                    <p class="fs-3"> {{ $pendingCountPayment }}</p>
                    User Payment (pending) 
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-first-3 bg-warning-subtle ">
                    <p class="fs-3"> {{ $conformCountPayment }}</p>
                    To Check Payment and <br> Conform Resavation
                </div>
            </div>
        </div>

        {{-- details Table --}}
        <table class="table table-bordered mt-5 three-D-bg">
            <thead>
                <tr align="center" class="table-dark">
                <th>ID</th>
                <th style="text-align: left;">Tour Name</th>
                <th scope="col">Travel Date</th>
                <th scope="col">Duration</th>
                <th style="text-align: right;">Total</th>
                <th scope="col">Reservation Status</th>
                <th scope="col">Payment Status</th>
                <th scope="col"> </th>
                </tr>
            </thead>
            
            <tbody class="table-group-divider">
                <tr><th></th><th></th><th></th><th></th><th></th><th></th><th></th><th></th></tr>
                @foreach ($bookings as $booking)
                <tr>
                    <td>#{{ $booking->id }}</td>
                    <td>
                    {{ $booking->package->package_name }}
                    </td>
                    <td style="text-align: center;">{{ \Carbon\Carbon::parse($booking->travel_date)->format('Y-m-d') }}</td>
                    <td align="center">{{ $booking->package->duration }} {{ $booking->package->duration_type }} </td>
                    <td align="right">{{ $booking->total_fee }} $</td>
                    <td style="text-align: center;">
                        @if ( $booking->reservation_status  == "pending")
                            <span class="badge rounded-pill text-bg-info p-2 ">{{ $booking->reservation_status }}</span>
                        @elseif ( $booking->reservation_status  == "Conform")
                            <span class="badge rounded-pill text-bg-success p-2 ">{{ $booking->reservation_status }}</span>
                        @elseif ( $booking->reservation_status  == "Reject")
                            <span class="badge rounded-pill text-bg-danger p-2 ">{{ $booking->reservation_status }}</span>
                        @endif
                        
                    </td>

                    <td style="text-align: center;">
                        @if ( $booking->payment_status  == "pending")
                            <span class="badge rounded-pill text-bg-info p-2 ">{{ $booking->payment_status }}</span>
                        @elseif ( $booking->payment_status  == "Success")
                            <span class="badge rounded-pill text-bg-success p-2 ">{{ $booking->payment_status }}</span>
                        @elseif ( $booking->payment_status  == "Reject")
                            <span class="badge rounded-pill text-bg-danger p-2 ">{{ $booking->payment_status }}</span>
                        @endif
                    </td>
                    <td style="text-align: center; background-color:rgb(219, 219, 219);">
                        <a href="{{route('admin.showOneUserBookingDataAll', $booking->id  )}}" class="btn btn-primary btn-sm">View</a>
                        <a href="" class="btn btn-danger btn-sm">Delete</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</main>

    
@endsection