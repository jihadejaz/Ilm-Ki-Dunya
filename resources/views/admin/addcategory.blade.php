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
                                        if ($msg == 'Category successfully added') {
                                            $c = 'text-success';
                                        } else {
                                            $c = 'text-danger';
                                        }
                                        ?>
                                    @endif

                                    @if (isset($msg))
                                        <p class="{{ $c }}">{{ $msg }} </p>
                                    @endif
                                    <div class="row">
                                        <div class="col-md-7">

                                            <h4 class="card-title">Category Portal</h4>
                                        </div>
                                        <div class="col-md-3">

                                        </div>
                                        <div class="row">

                                            <div class="col-md-5">
                                                <img id="imagepreview" width="100%" height="70px" alt="">

                                            </div>
                                            <div class="col-md-5">
                                                <img id="logopreview" width="100%" height="70px" alt="">
                                            </div>
                                        </div>
                                    </div>

                                    <form action="{{ route('insert_category') }}" method="post"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group">
                                            <label>Category Name</label>

                                            <input name="name" type="text" class="form-control"
                                                id="exampleInputName1" placeholder="SEO">
                                            @error('name')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>


                                        <div class="form-group">
                                            <label>Category Image</label>
                                            <input type="file" name="image" class="file-upload-default"
                                                placeholder="df" id="uploadFile">
                                            <div class="input-group col-xs-12">
                                                <input type="" name="im"
                                                    class="form-control file-upload-inf">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-dark" type="button"
                                                        onclick="$('#uploadFile').trigger('click')">Upload</button>
                                                </span>
                                            </div>
                                            @error('image')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>

                                        </div>

                                        <div class="form-group">
                                            <label>Select Logo Png </label>
                                            <input type="file" name="logo" class="file-upload-default"
                                                placeholder="df" id="uploadlogo">
                                            <div class="input-group col-xs-12">
                                                <input type="" name="im"
                                                    class="form-control file-upload-inf">
                                                <span class="input-group-append">
                                                    <button class="file-upload-browse btn btn-dark" type="button"
                                                        onclick="$('#uploadlogo').trigger('click')">Upload</button>
                                                </span>
                                            </div>
                                            @error('logo')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                            <br>

                                        </div>


                                        <div class="form-group">
                                            <label for="exampleTextarea1">Category Description</label>
                                            <textarea name="desc" class="form-control" id="exampleTextarea1" rows="4"></textarea>
                                            @error('desc')
                                                <div class="text-danger">{{ $message }}</div>
                                            @enderror
                                        </div>
                                        <input type="submit" class="btn btn-dark btn-lg mr-2"
                                            style="border-radius: 0;" value="Submit" name="" id="">
                                    </form>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

        <script>
            function readURL(input) {

                if (input.files && input.files[0]) {

                    var reader = new FileReader();
                    reader.onload = function(e) {

                        if (input.id === 'uploadlogo') {

                            $('#logopreview').attr('src', e.target.result);
                        } else {

                            $('#imagepreview').attr('src', e.target.result);
                        }
                    };

                    reader.readAsDataURL(input.files[0]);

                }
            }

            $("#uploadlogo").change(function() {
                readURL(this);

            });

            $("#uploadFile").change(function() {
                readURL(this);
            });
        </script>


        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        {{-- FOOTER START  --}}
        @include('admin.headerFooter.footer')

        {{-- FOOTER END  --}}
        <!-- partial -->
    </div>
    <!-- main-panel ends -->
    </div>
    <!-- page-body-wrapper ends -->
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
