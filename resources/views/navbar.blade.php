<header>
    <!-- Spinner Start -->

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white p-0">
        <a href="{{ route('indexpage') }}" class="navbar-brand d-flex align-items-center px-4 px-lg-5">
            <img src="" alt="">
            <h2 class="m-0">Ilm ki<span class="text-primary"> dunya</span></h2>
        </a>
        <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target=".collapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" class="collapse">
            <div class="navbar-nav ms-auto p-4 p-lg-0">

                <a href="{{ route('indexpage') }}" style="font-weight: 200;"
                    class="nav-item nav-link {{ request()->routeIs('indexpage') ? 'active' : '' }}">Home</a>

                {{-- <a href="{{route('loginform')}}" class="nav-item nav-link">Login</a> --}}

                <a href="{{ route('aboutpage') }}" style="font-weight: 200;"
                    class="nav-item nav-link {{ request()->routeIs('aboutpage') ? 'active' : '' }}">About</a>
                <a href="{{ route('coursespage') }}" style="font-weight: 200;"
                    class="nav-item nav-link {{ request()->routeIs('coursespage') ? 'active' : '' }}">Courses</a>
                @if (session('uemail') == null)
                    <a href="{{ route('loginpage') }}" style="font-weight: 200;"
                        class="nav-item nav-link {{ request()->routeIs('loginpage') ? 'active' : '' }} {{ request()->routeIs('registrationpage') ? 'active' : '' }}">Login</a>
                @else
                @endif
                @if (session('uemail'))
                    <div class="nav-item dropdown">
                        <a href="{{ route('user') }}" class="nav-link dropdown-toggle" style="font-weight: 200;"
                            data-bs-toggle="dropdown">Account</a>
                        <div class="dropdown-menu fade-down m-0">

                            <a href="{{ route('profile', session('uemail')) }}" style="font-weight: 200;"
                                class="dropdown-item">My Account</a>
                            {{-- <a href="{{ route('testimonialpage') }}" class="dropdown-item">Testimonial</a> --}}
                            {{-- <a href="{{ route('fetchData') }}" class="dropdown-item">Chat with Admin</a> --}}
                            <a href="{{ route('logout') }}" style="font-weight: 200;" class="dropdown-item"><i
                                    class=" text-danger"></i>Log out</a>

                        </div>
                    </div>
                @endif


                <div class="nav-item dropdown ">
                    <a href="{{ route('user') }}" class="nav-link dropdown-toggle"
                        data-bs-toggle="dropdown">E-Learning</a>
                    <div class="dropdown-menu fade-down m-0 border-transparent">
                        <a href="{{ route('userdailytask') }}" class="dropdown-item text-black">Daily Task</a>
                        <a href="{{ route('bookslab') }}" class="dropdown-item text-black">Book Library</a>
                        <a href="{{ route('chatpage') }}" class="dropdown-item text-black">Chatting</a>

                    </div>
                </div>

                <a href="{{ route('contactpage') }}" style="font-weight: 200;"
                    class="nav-item nav-link {{ request()->routeIs('contactpage') ? 'active' : '' }}">Contact</a>

            </div>
            {{-- <a href="{{ route('cvmakerpage') }}" class="btn btn-dark py-4 px-lg-5 d-none d-lg-block"
                style="border-left: .5px solid black; font-size: 18px;">
                Make Cv<i class="fa fa-arrow-circle-down ms-3"></i></a> --}}


            <a href style="font-weight: 500;" class="nav-item nav-link p-2 border-end"><i
                    class="fab fa-instagram text-dark"></i></a>
            <a href style="font-weight: 500;" class="nav-item nav-link"><i class="fab fa-twitter text-dark"></i></a>
            <a href style="font-weight: 500;" class="nav-item nav-link border-start"><i
                    class="fab fa-linkedin text-dark"></i></a>
        </div>
    </nav>


</header>
