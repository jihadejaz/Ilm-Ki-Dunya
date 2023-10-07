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

<style>
    /* Basic styling for the video player */
    .video-player {
        max-width: 640px;
        margin: 0 auto;
    }

    .video-player video {
        width: 100%;
        height: auto;
        display: block;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }

    /* Custom styling for video controls */
    .video-player video::-webkit-media-controls {
        display: flex;
        justify-content: space-between;
        background-color: rgba(0, 0, 0, 0.5);
        border-radius: 8px;
    }

    .video-player video::-webkit-media-controls-enclosure {
        background: none;
        /* Hide default controls background */
        padding: 8px;
    }

    .video-player video::-webkit-media-controls-play-button {
        display: none;
        /* Hide default play button */
    }

    .video-player video::-webkit-media-controls-timeline {
        height: 6px;
    }

    .video-player video::-webkit-media-controls-time-remaining-display {
        color: #fff;
        font-size: 12px;
    }

    /* Customize the appearance of the progress bar */
    .video-player video::-webkit-media-controls-current-time-display,
    .video-player video::-webkit-media-controls-time-remaining-display {
        background-color: transparent;
        padding: 0 4px;
    }

    /* Customize the appearance of the volume control */
    .video-player video::-webkit-media-controls-volume-slider-container {
        width: 60px;
        display: flex;
        align-items: center;
    }

    .video-player video::-webkit-media-controls-volume-slider {
        width: 100%;
        height: 4px;
        background-color: #ccc;
        border-radius: 4px;
    }

    .video-player video::-webkit-media-controls-volume-slider::-webkit-slider-thumb {
        width: 10px;
        height: 10px;
        background-color: #fff;
        border-radius: 50%;
    }

    /* Customize the appearance of the fullscreen button */
    .video-player video::-webkit-media-controls-fullscreen-button {
        margin-right: 4px;
    }

    /* Hide the default fullscreen tooltip */
    .video-player video::-webkit-media-controls-fullscreen-button::before {
        content: none;
    }

    /* Show a custom fullscreen icon */
    .video-player video::-webkit-media-controls-fullscreen-button::after {
        content: "\f065";
        /* Unicode for the fullscreen icon (Font Awesome) */
        font-family: 'Font Awesome 5 Free';
        font-weight: 900;
        color: #fff;
    }
</style>

<body>
    {{-- HEADER START  --}}
    @include('admin.headerFooter.header')
    {{-- HEADER END  --}}

    {{-- MAIN BODY START  --}}
    <div class="main-panel">
        <div class="content-wrapper">






            <form action="{{ route('model.books') }}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (session('success'))
                    <div class="alert bg-light alert-primary text-white" style="border-radius: 0px;">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert bg-danger alert-danger text-white" style="border-radius: 0px;">
                        {{ session('error') }}
                    </div>
                @endif
                <h1>Upload Books</h1>

                <div class="container-fluid p-0">
                    <div class="mb-3 mt-3">
                        <label for="" class="text-muted">Title</label>
                        <input type="text" class="form-control" value="{{ old('name') }}" id="email"
                            placeholder="Enter Title" name="name">
                        <span> @error('name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </div>
                    <div class="mb-3">
                        <label for="" class="text-muted">Description</label>

                        <input type="text" class="form-control" value="{{ old('pdesc') }}" id="pwd"
                            placeholder="Enter Description" name="pdesc">
                        <span> @error('pdesc')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="" class="text-muted">PDF File</label>
                        <input type="file" class="form-control" accept="application/pdf" value="{{ old('file') }}"
                            id="pwd" name="file">
                        <span> @error('file')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </div>

                    <div class="mb-3">
                        <label for="" class="text-muted">Book Image</label>

                        <input type="file" class="form-control" value="{{ old('image') }}" id="pwd"
                            name="image">
                        <span> @error('image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </span>
                    </div>

                    <button type="submit" style="border-radius: 0;" class="btn btn-lg btn-primary">Submit</button>
                </div>

            </form>



            <!-- partial -->

            <!-- main-panel ends -->
        </div>
        {{-- FOOTER START  --}}
        @include('admin.headerFooter.footer')

        {{-- FOOTER END  --}}
        <!-- side pannel-->
    </div>

    {{-- MAIN BODY END  --}}

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
