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
                                    @if (isset($msg))
                                        <?php
                                        if ($msg == 'lecture sucessfully uploaded') {
                                            $class = 'text-success';
                                        } else {
                                            $class = 'text-danger';
                                        }
                                        ?>
                                        <p class="{{ $class }}">{{ $msg }}</p>
                                    @endif

                                    <h4 class="card-title">Lecture Portal</h4>
                                    <form class="form" action="{{ route('insert_lecture') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <input name="name" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="Name">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            @if (count($category) == 0)
                                                <label for="exampleSelect">Select a Category:</label>
                                                <p class="text-danger">First, upload some categories.</p>
                                            @else
                                                <select name="category" class="form-control">
                                                    <option value="">-- Select Category --</option>
                                                    @foreach ($category as $item)
                                                        <option value="{{ $item['id'] }}">
                                                            {{ $item['name'] }}</option>
                                                    @endforeach
                                                </select>

                                            @endif

                                            @error('category')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>

                                        <div class="form-group">
                                            <input type="file" name="image" class="file-upload-default"
                                                placeholder="df" id="uploadFile">
                                            <div class="input-group col-xs-12">
                                                <input type="text" class="form-control file-upload-info"
                                                    placeholder="Lecture">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-primary" type="button"
                                                        onclick="$('#uploadFile').trigger('click')">Upload</button>
                                                </span>
                                            </div>
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <div class="form-group">
                                            <textarea name="desc" placeholder="Description" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                            @error('desc')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="submit" class="btn btn-primary btn-lg mr-2" value="Submit"
                                            style="border-radius: 0;" id="">
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
        {{-- FOOTER START  --}}
        @include('admin.headerFooter.footer')

        {{-- FOOTER END  --}}
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
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
