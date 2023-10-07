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
                <h3 class="page-title">All Student</h3>
                <nav aria-label="breadcrumb">

                </nav>
            </div>
            <div class="row">
                <div class="col-lg-12 grid-margin stretch-card">
                    <div class="card">
                        <div class="card-body">
                            <p class="text-danger">
                                @isset($msg)
                                    @if ($msg)
                                        {{ $msg }}
                                    @endif
                                @endisset
                            </p>
                            <h4 class="card-title">Basic Table</h4>
                            </p>
                            <table class="table">
                                <thead>
                                    <tr>

                                        <th>Id</th>
                                        <th>Candidate Name</th>
                                        <th>Candidate Id</th>
                                        <th>User Profile</th>
                                        <th>Request Time</th>
                                        <th>Action</th>

                                    </tr>
                                </thead>
                                <tbody>


                                    @if (count($inroll) == 0)
                                        <p class="text-danger text-center">Student Are not Enroll</p>
                                    @else
                                        @foreach ($inroll as $item)
                                            <tr>

                                                <td>{{ $item['id'] }}</td>
                                                <td>{{ $item['firstname'] }}</td>
                                                <td>{{ $item['student'] }}</td>
                                                <th><img src="../images/{{ $item['image'] }}" alt="no image"></th>
                                                <th>{{ $item['created_at'] }}</th>
                                                <td><a href="{{ route('removeEnroll', ['id' => $item['id']]) }}"><label
                                                            class="btn btn-danger btn-sm" style="border-radius: 0;">Remove</label></a></td>

                                            </tr>
                                        @endforeach

                                    @endif

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

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
