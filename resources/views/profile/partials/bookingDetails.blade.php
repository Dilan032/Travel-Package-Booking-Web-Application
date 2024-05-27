{{-- Massage for user --}}
<div class="p-3 mb-2 bg-warning-subtle text-warning-emphasis">
  ⚠ We will Send A Invoice, ThereAfter You Can Pay For Your Resavation
</div>

{{-- details Table --}}
<table class="table table-bordered">
    <thead>
        <tr align="center">
          <th scope="col">Tour Name</th>
          <th scope="col">Travel Date</th>
          <th scope="col">Total</th>
          <th scope="col">Reservation Status</th>
          <th scope="col">Invoice</th>
          <th scope="col">Reservation info</th>
          {{-- <th> </th> --}}
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($bookings as $booking)
        <tr>
            <td>
              {{ $booking->package->package_name }}
            </td>
            <td>{{ \Carbon\Carbon::parse($booking->travel_date)->format('Y-m-d') }}</td>
            <td align="right">${{ $booking->total_fee }}</td>
            <td style="text-align: center;">
              <span class="badge rounded-pill text-bg-success">Approved</span>
              {{-- Pending Reject --}}
            </td>
            <td style="text-align: center;">
              <a href="#"> <span class="badge rounded-pill text-bg-primary">Processing...</span> </a>
            </td>
            <td style="text-align: center;">
              <a href="#" type="button" class="btn btn-primary btn-sm fw-bold"> View</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>