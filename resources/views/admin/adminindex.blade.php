<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- plugins:css -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/flag-icon-css/css/flag-icon.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/css/vendor.bundle.base.css') }}">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="{{ asset('assets/vendors/font-awesome/css/font-awesome.min.css') }}" />
    <link rel="stylesheet" href="assets/vendors/bootstrap-datepicker/bootstrap-datepicker.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="{{ asset('assets/images/favicon.png') }}" />
</head>

<body>
    {{-- HEADER START  --}}
    @include('admin.headerFooter.header')
    {{-- HEADER END  --}}

    <div class="main-panel">
        <div class="content-wrapper">
            <div class="row" id="proBanner">
                <div class="col-12">

                    <i class="" id="bannerClose"></i>
                </div>
            </div>
            <h2 class="text-dark font-weight-bold mb-2">Dashboard</h2>

            <div class="d-xl-flex justify-content-between align-items-start">

                <div class="row">
                    <div class="col-md-12">

                        <div class="tab-content tab-transparent-content">
                            <div class="tab-pane fade show active" id="business-1" role="tabpanel"
                                aria-labelledby="business-tab">
                                <div class="row">
                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Registered user
                                                </h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">
                                                    {{ $usercount }}</h2>
                                                <div
                                                    class="dashboard-progress dashboard-progress-1 d-flex align-items-center justify-content-center item-parent">
                                                    <i class="mdi mdi-lightbulb icon-md absolute-center text-dark"></i>
                                                </div>
                                                <p class="mt-4 mb-0">Active</p>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">Total user
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">uploaded Lectures
                                                </h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">
                                                    {{ $lecturescount }}</h2>
                                                <div
                                                    class="dashboard-progress dashboard-progress-2 d-flex align-items-center justify-content-center item-parent">
                                                    <i
                                                        class="mdi mdi-account-circle icon-md absolute-center text-dark"></i>
                                                </div>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">Total Count
                                                </h3>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xl-3  col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">Courses</h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">
                                                    {{ $categorycount }}</h2>
                                                <div
                                                    class="dashboard-progress dashboard-progress-3 d-flex align-items-center justify-content-center item-parent">
                                                    <i class="mdi mdi-eye icon-md absolute-center text-dark"></i>
                                                </div>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">Total Courses
                                                </h3>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-xl-3 col-lg-6 col-sm-6 grid-margin stretch-card">
                                        <div class="card">
                                            <div class="card-body text-center">
                                                <h5 class="mb-2 text-dark font-weight-normal">In Roll Student
                                                </h5>
                                                <h2 class="mb-4 text-dark font-weight-bold">
                                                    {{ $inrollcount }}</h2>
                                                <div
                                                    class="dashboard-progress dashboard-progress-4 d-flex align-items-center justify-content-center item-parent">
                                                    <i class="mdi mdi-cube icon-md absolute-center text-dark"></i>
                                                </div>
                                                <h3 class="mb-0 font-weight-bold mt-2 text-dark">in overAll
                                                    Course</h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
            <!-- partial:partials/_footer.html -->
            {{-- FOOTER START  --}}
            @include('admin.headerFooter.footer')

            {{-- FOOTER END  --}}

            <!-- partial -->
        </div>
        <!-- main-panel ends -->
    </div>
    <!-- side pannel-->
    </div>
    <script src="{{ asset('assets/vendors/js/vendor.bundle.base.js') }}"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="{{ asset('assets/vendors/chart.js/Chart.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/jquery-circle-progress/js/circle-progress.min.js') }}"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="{{ asset('assets/js/off-canvas.js') }}"></script>
    <script src="{{ asset('assets/js/hoverable-collapse.js') }}"></script>
    <script src="{{ asset('assets/js/misc.js') }}"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="{{ asset('assets/js/dashboard.js') }}"></script>
    <!-- End custom js for this page -->
</body>

</html>
