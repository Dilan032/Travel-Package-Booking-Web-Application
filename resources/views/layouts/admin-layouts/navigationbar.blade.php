
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse position-fixed">
            <h2 class="mt-3">
                <img src="{{ asset('image/logo.png') }}" alt="Agency logo" width="60px">
                SriLankaTours
            </h2>
            <pre>Admin Panel</pre>
            <div class="position-sticky">
                <ul class="nav flex-column SideMenuPosition">
                    <li class="nav-item list-bg ">
                        <a class="nav-link active font-style {{ request()->is('admin/dashboard') ? 'active' : '' }}" aria-current="page" href="#">
                            <img src="{{ asset('image/help-tools/dashboard.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Dashboard 
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style {{ request()->is('') ? 'active' : '' }}" href="#">
                            <img src="{{ asset('image/help-tools/setting.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Settings
                        </a>
                    </li>
                    <li class="nav-item list-bg ">
                        <a class="nav-link font-style {{ request()->is('') ? 'active' : '' }}" href="#">
                            <img src="{{ asset('image/help-tools/manage-users.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Manage Users
                        </a>
                    </li>

                    <hr class="border border-2 opacity-100">

                    <li class="nav-item list-bg ">
                        <a class="nav-link font-style {{ request()->is('') ? 'active' : '' }}" href="#">
                            <img src="{{ asset('image/help-tools/booking.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Bookings
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style {{ request()->is('') ? 'active' : '' }}" href="#">
                            <img src="{{ asset('image/help-tools/massages.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Messages
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style {{ request()->is('') ? 'active' : '' }}" href="#">
                            <img src="{{ asset('image/help-tools/Reviews.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Reviews
                        </a>
                    </li>

                    <hr class="border border-2 opacity-100">

                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#">
                            <img src="{{ asset('image/help-tools/add-packages.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Add Travel Packages
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#">
                            <img src="{{ asset('image/help-tools/add-blog-post.png') }}" class="dashbord-icon" alt="dashbord-icon">   
                            Add Blog Post
                        </a>
                    </li>

                    <hr class="border border-2 opacity-100">
                    
                    <li class="nav-item" style="margin-top: 2px; font-weight: bolder;">
                         <!-- Authentication -->
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <img src="{{ asset('image/help-tools/log-out.png') }}" class="dashbord-icon position-absolute ms-3" alt="dashbord-icon">
                            <button type="submit" class="btn nav-link ms-5">{{ __('Log Out') }}</button>
                        </form>
                    </li>
                </ul>
            </div>
        </nav>

        <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
            <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
                <h2 class="fw-light">Dashboard</h2>
            </div>
            <div class="container">
                <!-- Your dashboard content goes here -->
            </div>
        </main>
    </div>
</div>
