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

    <div class="main-panel">

        <div class="content-wrapper">

            <div class="d-xl-flex justify-content-between align-items-start">

                {{-- <div class="row">
                            <div class="col-md-12"> --}}

                <div class="tab-content tab-transparent-content">
                    <div class="tab-pane fade show active" id="business-1" role="tabpanel"
                        aria-labelledby="business-tab">
                        <div class="container p-0">
                            <h2 class="text-dark font-weight-bold mb-2"> Recorded Lectures </h2>

                            <div class="row">

                                @if (count($lecture) == 0)

                                    <h5 class="text-black text-center">Not Found Data</h5>
                                @else
                                    @foreach ($lecture as $item)
                                        <div class="col-md-6">
                                            <div class="aspect-ratio ratio-16x9">
                                                <video controls muted
                                                    src="{{ asset('videos/' . $item['lec_video_path']) }}"
                                                    frameborder="0"></video>


                                            </div>
                                            <p style="font-size: 20px" class="text-black">
                                                {{ $item->lec_Name }}</p>
                                            <p>{{ $item['desc'] }}</p>
                                        </div>
                                    @endforeach
                                @endif
                            </div>

                        </div>

                    </div>
                </div>
                {{-- </div> --}}
                {{-- </div> --}}
                <!-- content-wrapper ends -->

            </div>
            <!-- partial:partials/_footer.html -->
            <footer class="footer">
                <div class="footer-inner-wraper">
                    <div class="d-sm-flex justify-content-center justify-content-sm-between">
                        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright
                            © bootstrapdash.com 2020</span>
                        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a
                                href="https://www.bootstrapdash.com/" target="_blank">Bootstrap dashboard
                                templates</a> from Bootstrapdash.com</span>
                    </div>
                </div>
            </footer>
            <!-- partial -->
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
