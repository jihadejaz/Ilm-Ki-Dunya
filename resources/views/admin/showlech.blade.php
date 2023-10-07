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
            <div class="page-header">
                <h3 class="page-title">All Lectures</h3>
                <nav aria-label="breadcrumb">

                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="card-title">Basic Table</h4>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Lecture Id</th>
                                        <th>Lecture Name</th>
                                        <th>Lectures</th>
                                        <th>Category Id</th>
                                        <th>Uploaded at</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($lecture as $item)
                                        <tr>
                                            <td>{{ $item['id'] }}</td>
                                            <td>{{ $item['lec_Name'] }}</td>

                                            <td><video controls width="40" height="60" muted>
                                                    <source src="../videos/{{ $item['lec_video_path'] }}" 
                                                        type="video/mp4">
                                                    Your browser does not support the video tag.
                                                </video>
                                            </td>
                                            <td>{{ $item['category_id'] }}</td>
                                            <td>{{ $item['created_at'] }}</td>
                                            
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>


            </div>
        </div>
        <!-- content-wrapper ends -->
        <!-- partial:../../partials/sss.html -->
        <footer class="footer">
            <div class="footer-inner-wraper">
                <div class="d-sm-flex justify-content-center justify-content-sm-between">
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
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
