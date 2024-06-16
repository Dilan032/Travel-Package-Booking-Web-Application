{{-- Massage for user --}}
{{-- <div class="p-3 mb-2 bg-warning-subtle text-warning-emphasis fw-bold">
  📢 We will Send A Invoice, ThereAfter You Can Pay For Your Resavation or <span class="text-danger"> Cancel Your Resavation</span>
</div> --}}

{{-- details Table --}}
<table class="table table-bordered mt-3">
    <thead>
        <tr align="center">
          <th>ID</th>
          <th style="text-align: left;">Tour Name</th>
          <th scope="col">Travel Date</th>
          <th scope="col">Duration</th>
          <th style="text-align: right;">Total</th>
          <th scope="col">Reservation Status</th>
          <th scope="col">Invoice</th>
          <th scope="col">Payment Status</th>
        </tr>
      </thead>
      
      <tbody class="table-group-divider">
        @foreach ($bookings as $booking)
        <tr>
            <td>#{{ $booking->id }}</td>
            <td>
              {{ $booking->package->package_name }}
            </td>
            <td style="text-align: center;">{{ \Carbon\Carbon::parse($booking->travel_date)->format('Y-m-d') }}</td>
            <td align="center">{{ $booking->package->duration }} Days </td>
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
              <a href="{{route('profile.showInvoiceDetails', $booking->id)}}" class="btn btn-primary btn-sm">View</a>
              {{-- @if ( $booking->invoice_status  == "pending")
                      <span class="badge rounded-pill text-bg-info p-2">Processing...</span>
              @elseif ( $booking->invoice_status  == "conform")
                      <span class="badge rounded-pill text-bg-success p-2">{{ $booking->invoice_status }}</span>
              @elseif ( $booking->invoice_status  == "reject")
                      <span class="badge rounded-pill text-bg-danger p-2">{{ $booking->invoice_status }}</span>
              @endif --}}
            </td>
            <td style="text-align: center;">
              @if ( $booking->payment_status  == "pending")
                      <span class="badge rounded-pill text-bg-info p-2 ">Pay Now</span>
              @elseif ( $booking->payment_status  == "Success")
                      <span class="badge rounded-pill text-bg-success p-2 ">{{ $booking->payment_status }}</span>
              @elseif ( $booking->payment_status  == "Reject")
                      <span class="badge rounded-pill text-bg-danger p-2 ">{{ $booking->payment_status }}</span>
              @endif
            </td>
        </tr>
        @endforeach
    </tbody>
</table>



  