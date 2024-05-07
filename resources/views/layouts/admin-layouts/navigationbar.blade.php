
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse position-fixed">
            <h2 class="mt-4">SriLankaTours</h2>
            <div class="position-sticky">
                <ul class="nav flex-column SideMenuPosition">
                    <li class="nav-item list-bg">
                        <a class="nav-link active font-style" aria-current="page" href="#" onclick="changeColor(this)">
                            Dashboard 
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Settings
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Manage Users
                        </a>
                    </li>

                    <hr>

                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Bookings
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Messages
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Reviews
                        </a>
                    </li>

                    <hr>

                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Add Travel Packages
                        </a>
                    </li>
                    <li class="nav-item list-bg">
                        <a class="nav-link font-style" href="#" onclick="changeColor(this)">
                            Add Blog Post
                        </a>
                    </li>

                    <hr>
                    
                    <li class="nav-item" style="margin-top: 100px;">
                        {{-- <a class="nav-link" href="#">
                            Log Out
                        </a> --}}
                         <!-- Authentication -->
                         <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="btn nav-link">{{ __('Log Out') }}</button>
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
