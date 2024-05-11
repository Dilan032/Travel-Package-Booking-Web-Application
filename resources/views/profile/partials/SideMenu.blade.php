<div class="user-side-menu-bg p-5 ">
    <h4 class="mt-3">My Account</h4>
    
    <div class="grid gap-3">
        <a class="{{ request()->is('profile/Dashbord') ? 'active' : '' }}" href="{{ route('profile.Dashbord') }}" >
            <div class="p-2 g-col-6 mouse-hand menu-item"  >Dashboard</div>
        </a>
        <a class="{{ request()->is('profile/Edit') ? 'active' : '' }}" href="{{ route('profile.edit') }}">
            <div class="p-2 g-col-6 mouse-hand menu-item" >Edit Profile</div>
        </a>
        <a class="{{ request()->is('profile/Edit/password') ? 'active' : '' }}" href="{{ route('profile.profileChangePassword') }}">
            <div class="p-2 g-col-6 mouse-hand menu-item" >Change Password</div>
        </a>
        <a class="{{ request()->is('profile') ? 'active' : '' }}" href="{{ route('profile.destroy') }}">
            <div class="p-2 g-col-6 mouse-hand menu-item" >Delete Account</div>
        </a>
    </div>
    
    <br>
    <h4 class="mt-4">Tour Booking</h4>
    <div class="grid gap-3">
        <a class="{{ request()->is('profile/Booking') ? 'active' : '' }}" href="{{ route('profile.Booking') }}">
            <div class="p-2 g-col-6 mouse-hand menu-item">My Booking</div>
        </a>
        <a class="{{ request()->is('profile/invoice') ? 'active' : '' }}" href="{{ route('profile.Invoice') }}">
            <div class="p-2 g-col-6 mouse-hand menu-item">Invoices</div>
        </a>
    </div>

    <hr><br>
    <div style="background-color: white; border-radius: 10px;" class="p-2">
        <h5>Need Help?</h5>
        <p>(+94) 74 133 8008
        sinhe595@gmail.com </p>
    </div>
    
</div>