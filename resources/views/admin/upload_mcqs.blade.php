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
            <div class="tab-content tab-transparent-content">
                <div class="tab-pane fade show active" id="business-1" role="tabpanel" aria-labelledby="business-tab">
                    <div class="row">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    @if ($a = session('msg'))

                                        @if ($a == 'Data succfully uploaded')
                                            <?php $class = 'text-success'; ?>
                                        @else
                                            <?php $class = 'text-danger'; ?>
                                        @endif

                                        <p class="{{ $class }}">{{ $a }}</p>
                                    @endif


                                    <h4 class="card-title"> Quiz upload </h4>
                                    <p class="card-description"> Basic form elements </p>
                                    <form class="form" action="{{ route('upload_mcqs') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label for="exampleInputName1">question</label>
                                            <input name="question" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('question')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputName1">Answer 1</label>
                                            <input name="Answer_one" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('Answer_one')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Answer 2</label>
                                            <input name="Answer_two" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('Answer_two')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label for="exampleInputName1">Answer 3</label>
                                            <input name="Answer_three" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('Answer_three')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Answer 4</label>
                                            <input name="Answer_four" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('Answer_four')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <label for="exampleInputName1">Right Answer</label>
                                            <input name="right_answer" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Write Question here">
                                            @error('right_answer')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            @if (count($category) == 0)
                                                <label for="exampleSelect">Select a Category:</label>
                                                <p class="text-danger">First, upload some categories.</p>
                                            @else
                                                <select name="category" class="form-control">
                                                    <option value="">-- Select One Category --</option>
                                                    @foreach ($category as $item)
                                                        <option value="{{ $item['id'] }}">{{ $item['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>

                                            @endif

                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <input type="submit" class="btn btn-primary mr-2" value="submit" name=""
                                            id="">

                                        <br>
                                        <br>
                                        <br>
                                    </form>
                                </div>

                            </div>
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
                    <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright ©
                        bootstrapdash.com 2020</span>
                    <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                            href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard templates</a>
                        from Bootstrapdash.com</span>
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
