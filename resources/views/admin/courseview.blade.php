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
                            <span class="d-flex align-items-center purchase-popup">
                                <p>Like what you see? Check out our premium version for more.</p>
                                <a href="https://github.com/BootstrapDash/ConnectPlusAdmin-Free-Bootstrap-Admin-Template"
                                    target="_blank" class="btn ml-auto download-button">Download Free Version</a>
                                <a href="http://www.bootstrapdash.com/demo/connect-plus/jquery/template/"
                                    target="_blank" class="btn purchase-button">Upgrade To Pro</a>
                                <i class="mdi mdi-close" id="bannerClose"></i>
                            </span>
                        </div>
                    </div>
                    <div class="d-xl-flex justify-content-between align-items-start">
                        <h2 class="text-dark font-weight-bold mb-2"> Over All Course </h2>

                        <div class="row">
                            <div class="col-md-12">

                                <div class="tab-content tab-transparent-content">
                                    <div class="tab-pane fade show active" id="business-1" role="tabpanel"
                                        aria-labelledby="business-tab">
                                        <div class="row">


                                            @foreach ($category as $item)
                                                <div class="col-md-4">




                                                    <a href="{{ route('showleccategoryvs', ['id' => $item['id']]) }}">
                                                        <p class="text-black text-right">{{ $item['created_at'] }}</p>
                                                        <img width="100%" height="60%"
                                                            src="{{ asset('images/' . $item['category_img']) }}"
                                                            alt="">

                                                        <h3 class="text-black">{{ $item['name'] }}</h3>

                                                    </a>
                                                    <br>
                                                    <br>

                                                </div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- content-wrapper ends -->
                        <!-- partial:partials/_footer.html -->
                        <footer class="footer">
                            <div class="footer-inner-wraper">
                                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                                    <span
                                        class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright
                                        © bootstrapdash.com 2020</span>
                                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                            templates</a> from Bootstrapdash.com</span>
                                </div>
                            </div>
                        </footer>
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
