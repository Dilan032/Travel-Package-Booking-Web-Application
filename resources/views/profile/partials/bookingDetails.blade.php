<table class="table table-bordered">
    <thead>
        <tr>
          <th scope="col">Tour Name</th>
          <th scope="col">Travel Date</th>
          <th scope="col">Total</th>
          <th scope="col">Payment Type</th>
          <th scope="col">Payment Status</th>
          <th scope="col"> </th>
          {{-- <th> </th> --}}
        </tr>
      </thead>
      <tbody class="table-group-divider">
        @foreach ($bookings as $booking)
        <tr>
            <td>
              @if ($booking->travelPackage)
                    {{ $booking->travelPackage->package_name }}
                @else
                    Not Available
                @endif
            </td>
            <td>{{ \Carbon\Carbon::parse($booking->travel_date)->format('Y-m-d') }}</td>
            <td>{{ $booking->total_fee }}</td>
            <td>{{ $booking->payment_type }}</td>
            <td>{{ $booking->payment_status }}</td>
            <td>
              <a href="#" type="button" class="btn btn-primary btn-sm"> View</a>
              <a href="#" type="button" class="btn btn-secondary btn-sm"> Write Review</a>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>