@extends('layouts/admin-layouts/main-structure')

@section('admincontent')
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h2 class="fw-light">Manage Users</h2>
    </div>
    <div class="container">
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
            <div class="alert alert-danger">
                {{ session('success') }}
            </div>
        @endif

        <div class="row text-center fw-semibold">
            <div class="col">
                <div class="Booking-detail-bg-second-2  bg-primary-subtle">
                    <p class="fs-3"> {{ $allRegisterUsers }} </p>
                    All Registered Users
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-second-2 bg-warning-subtle">
                    <p class="fs-3"> {{ $allReservation }} </p>
                    Users with Reservation
                </div>
            </div>
            <div class="col">
                <div class="Booking-detail-bg-second-2 bg-danger-subtle">
                    <p class="fs-3"> {{ $allRegisterUsers - $allReservation }} </p>
                    Users With No Reservation
                </div>
            </div>
        </div>

         {{-- details Table --}}
         <table class="table table-bordered mt-5 three-D-bg">
            <thead>
                <tr align="center" class="table-dark">
                <th>ID</th>
                <th style="text-align: left;" width="25%">User Name</th>
                <th scope="col" width="15%"> Country</th>
                <th scope="col" width="15%">No. Of Reservation</th>
                <th scope="col" width="15%"> Date of Joining </th>
                <th width="20%"> </th>  
                </tr>
            </thead>
            
            <tbody class="table-group-divider">
                <tr><th></th><th></th><th></th><th></th><th></th><th></th></tr>
                @foreach ($User as $UserDetails)
                <tr>
                    <td>#{{ $UserDetails->id }}</td>
                    <td> {{ $UserDetails->name }}</td>
                    
                    
                    <td style="text-align: center;"> {{ $UserDetails->user_country }} </td>
                    {{-- count of user bookings --}}
                    <td align="center"> 
                        @if ( $UserDetails->bookings->count() == 0)
                            <span class=" fs-6"> <b>-</b> </span>
                        @else
                            <span class="badge text-bg-success fs-6">{{ $UserDetails->bookings->count() }} </span>
                        @endif
                    </td>
                    <td align="center"> {{ \Carbon\Carbon::parse($UserDetails->created_at)->format('Y-m-d') }} </td>
                    

                    
                    <td style="text-align: center; background-color:rgb(219, 219, 219);">
                        <a href="mailto:{{ $UserDetails->email }}" class="btn btn-primary btn-sm">Contact</a>

                        {{-- button for delete the blog post --}}
                        <a href="#" onclick="deleteUser({{ $UserDetails->id}});" class="btn btn-danger btn-sm">Remove Account</a>
                        <form id="delete-user-{{ $UserDetails->id }}" action="{{route('admin.user.destroyBlog', $UserDetails->id)}}" method="post">
                            @csrf
                            @method('delete')
                        </form>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>


    </div>
</main>

  {{-- script for delete usercofomation alert --}}
  <script>
    function deleteUser(id){
      if(confirm("Do you want to Remove This User Account ?")){
        document.getElementById('delete-user-' + id).submit();
      }
    }
  </script>

    
@endsection