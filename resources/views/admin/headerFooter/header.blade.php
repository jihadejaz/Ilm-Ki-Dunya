<div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    <nav class="navbar default-layout-navbar col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
        <div class="text-center navbar-brand-wrapper d-flex align-items-center justify-content-center">
            <a class="navbar-brand brand-logo" href=""><img src="{{ asset('web_logo.png') }}" alt="logo" /></a>
            <a class="navbar-brand brand-logo-mini" hef=""><img src="{{ asset('web_logo.png') }}"
                    alt="logo" /></a>
        </div>
        <div class="navbar-menu-wrapper d-flex align-items-stretch">
            <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
                <span class="mdi mdi-menu"></span>
            </button>
           
            <ul class="navbar-nav navbar-nav-right">
                <li class="nav-item  dropdown d-none d-md-block">
                    <a class="nav-link dropdown-toggle" id="reportDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">Students</a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="reportDropdown">
                        <a class="dropdown-item" href="{{ route('showuser') }}">
                            <i class="mdi mdi-file-pdf mr-2"></i>Registered Students</a>
                        <div class="dropdown-divider"></div>

                        <a class="dropdown-item" href="{{ route('dailytask') }}">
                            <i class="mdi mdi-file-word mr-2"></i>upload Daily Task</a>
                        <a class="dropdown-item" href="{{ route('go_page_msqs') }}">
                            <i class="mdi mdi-file-word mr-2"></i>upload Mcqs</a>
                    </div>
                </li>
                <li class="nav-item  dropdown d-none d-md-block">
                    <a class="nav-link dropdown-toggle" id="projectDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false"> Projects </a>
                    <div class="dropdown-menu navbar-dropdown" aria-labelledby="projectDropdown">
                        <a class="dropdown-item" href="{{ route('indexpage') }}">
                            <i class="mdi mdi-eye-outline mr-2"></i>View website
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">
                            </a>
                    </div>
                </li>

                <li class="nav-item nav-profile dropdown">
                    <a class="nav-link dropdown-toggle" id="profileDropdown" href="#" data-toggle="dropdown"
                        aria-expanded="false">
                        <div class="nav-profile-img">
                            <img src="{{ asset('images/' . $adminpic) }}" alt="Image">

                        </div>
                        <div class="nav-profile-text">
                            <p class="mb-1 text-black">{{ $adminname }}</p>
                        </div>
                    </a>
                    <div class="dropdown-menu navbar-dropdown dropdown-menu-right cp-0 border-0 font-size-sm"
                        aria-labelledby="profileDropdown" data-x-placement="bottom-end">
                        <div class="p-3 text-center bg-primary">
                            <img class="img-avatar img-avatar48 img-avatar-thumb"
                                src="{{ asset('images/' . $adminpic) }}"alt="">
                        </div>
                        <div class="p-2">
                            <h5 class="dropdown-header text-uppercase pl-2 text-dark">
                                {{ session()->get('adminemail') }}</h5>



                            <div role="separator" class="dropdown-divider"></div>
                            <h5 class="dropdown-header text-uppercase  pl-2 text-dark mt-2">Actions</h5>

                            <a class="dropdown-item py-1 d-flex align-items-center justify-content-between"
                                href="{{ route('adminlogout') }}">
                                <span>Log Out</span>
                                <i class="mdi mdi-logout ml-1"></i>
                            </a>
                        </div>
                    </div>
                </li>


            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button"
                data-toggle="offcanvas">
                <span class="mdi mdi-menu"></span>
            </button>
        </div>
    </nav>


    <div class="container-fluid page-body-wrapper">


        <!-- Navigation bar-->
        <nav class="sidebar sidebar-offcanvas" id="sidebar">
            <ul class="nav">
                <li class="nav-item nav-category">Main</li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('upload_lec') }}">
                        <span class="icon-bg"><i class="mdi mdi-cube menu-icon"></i></span>
                        <span class="menu-title">Lecture upload</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                        <span class="menu-title">Category</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('showcategory') }}">Categories</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('add_category') }}">Upload Category</a></li>
                        </ul>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('coursespageAdmin') }}">
                        <span class="icon-bg"><i class="mdi mdi-contacts menu-icon"></i></span>
                        <span class="menu-title">Course</span>
                    </a>
                </li>
                {{-- <li class="nav-item">
                    <a class="nav-link" href="{{ route('admincvtemplete') }}">
                        <span class="icon-bg"><i class="mdi mdi-format-list-bulleted menu-icon"></i></span>
                        <span class="menu-title">Cv Templets</span>
                    </a>
                </li> --}}
                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                        <span class="menu-title">My Lecture</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('show_lec') }}">Tabular
                                    Form</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('video_lec') }}">Video
                                    Lectures</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('pdf_lecture') }}"> Pfd
                                    Document</a></li>
                        </ul>
                    </div>
                </li>

                <li class="nav-item">
                    <a class="nav-link" data-toggle="collapse" href="#auth" aria-expanded="false"
                        aria-controls="auth">
                        <span class="icon-bg"><i class="mdi mdi-lock menu-icon"></i></span>
                        <span class="menu-title">Enroll Student</span>
                        <i class="menu-arrow"></i>
                    </a>
                    <div class="collapse" id="auth">
                        <ul class="nav flex-column sub-menu">
                            <li class="nav-item"> <a class="nav-link" href="{{ route('fetchinrollstdent') }}">Show
                                    Student</a></li>
                            <li class="nav-item"> <a class="nav-link" href="{{ route('Enroll_approve') }}">Student
                                    Request</a></li>

                        </ul>
                    </div>
                </li>



                <li class="nav-item sidebar-user-actions">
                    <div class="user-details">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <div class="d-flex align-items-center">
                                    <div class="sidebar-profile-img">
                                        <img style="height: 24px" class="img-fluid" src="images/{{ $adminpic }}"
                                            alt="image">
                                    </div>
                                    <div class="sidebar-profile-text">
                                        <p class="mb-1">{{ session()->get('adminemail') }}</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </li>


                <li class="nav-item sidebar-user-actions">
                    <div class="sidebar-user-menu">
                        <a href="{{ route('adminlogout') }}" class="nav-link"><i
                                class="mdi mdi-logout menu-icon"></i>
                            <span class="menu-title">Log Out</span></a>
                    </div>
                </li>
            </ul>
        </nav>
        <!-- Navigation-->
