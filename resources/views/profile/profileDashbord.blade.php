@extends('layouts/mainStructure')

@section('content')
<div class="row">
    <div class="col-3">
        <div class="user-side-menu-bg p-5 ">
            <h4 class="mt-4">My Account</h4>
            <hr>
            
            <div class="grid gap-3">
                <a href="{{ route('profile.Dashbord') }}">
                    <div class="p-2 g-col-6 mouse-hand" id="dashboard" onclick="highlightMenuItem(this)">Dashboard</div>
                </a>
                <a href="{{ route('profile.edit') }}">
                    <div class="p-2 g-col-6 mouse-hand" onclick="highlightMenuItem(this)">Edit Profile</div>
                </a>
                <a href="{{ route('profile.profileChangePassword') }}">
                    <div class="p-2 g-col-6 mouse-hand" onclick="highlightMenuItem(this)">Change Password</div>
                </a>
                <a href="{{ route('profile.destroy') }}">
                    <div class="p-2 g-col-6 mouse-hand" onclick="highlightMenuItem(this)">Delete Account</div>
                </a>
            </div>
            
            <h4 class="mt-4">Tour Booking</h4>
            <hr>
            <div class="grid gap-3">
                <a href="{{ route('profile.Booking') }}">
                    <div class="p-2 g-col-6 mouse-hand" onclick="highlightMenuItem(this)">My Booking</div>
                </a>
                <a href="{{ route('profile.Invoice') }}">
                    <div class="p-2 g-col-6 mouse-hand" onclick="highlightMenuItem(this)">Invoices</div>
                </a>
            </div>
            
            <hr><br>
            <div style="background-color: white; border-radius: 10px;" class="p-2">
                <h5>Need Help?</h5>
                <p>(+94) 74 133 8008
                sinhe595@gmail.com </p>
            </div>
        </div>  
    </div>

    
    <div class="col-5 mx-auto p-5 dashbord-bg-sizeBig">
        @include('profile/partials/dashbord')
    </div>
</div>
    
@endsection