<div class="header-for-navbar">
    {{-- Nav bar start --}}
     <nav class="navbar navbar-expand-lg bg-body fixed-top">
        <div class="container-fluid">
            <img src="{{ asset('image/logo.png') }}"  alt="Logo" width="70" height="64"  >
            <a class="navbar-brand fs-1" href="#">{{config('app.name')}}</a>

          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>

          <div class="collapse navbar-collapse d-flex ms-5" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll ms-5" style="--bs-scroll-height: 200px;">
              <li class="nav-item">
                <a class="nav-link {{ request()->is('/') ? 'active' : '' }}" aria-current="page" href="{{ route('home') }}">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('package') || request()->is('package/page') ? 'active' : '' }}" href="{{ route('user.travelPackage.show') }}">Package</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('aboutUs') ? 'active' : '' }}" href="{{ route('aboutUs') }}">About Us</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('blog') || request()->is('blogPage') ? 'active' : '' }}" href="{{ route('blog') }}">Blog</a>
              </li>
              <li class="nav-item">
                <a class="nav-link {{ request()->is('contactUs') ? 'active' : '' }}" href="{{ route('contactUs') }}">Contac Us</a>
              </li>
            </ul>

                @if (Route::has('login'))
                <nav class="-mx-3 flex flex-1 justify-end">
                    @auth
                        <a
                            href="{{ url('/') }}">
                            {{-- when login user deatails --}}
                            <div class="sm:flex sm:items-center sm:ms-6"> 
                                <div class="dropdown align-right" style="width: 120px; ">
                                    <div><?php echo Auth::user()->name; ?>
                                    <img src="{{ asset('image/help-tools/downArrow.svg') }}" alt="downArrow">
                                    </div>
                                    <div class="dropdown-content">
                                      <a href="{{ route('profile.Dashbord') }}"><button class="btn btn-light">{{ __('Profile') }}</button></a>
                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <button type="submit" class="btn btn-light">{{ __('Log Out') }}</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            
                            {{-- when login user deatails end --}}
                        </a>
                    @else
                        <a
                            href="{{ route('login') }}"
                            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                            Log in
                        </a>

                        @if (Route::has('register'))
                            <a
                                href="{{ route('register') }}"
                                class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white">
                                Register
                            </a>
                        @endif
                    @endauth
                </nav>
            @endif
          </div>
        </div>
     </nav>
    </div>

     
