<!doctype html>

<html lang="en">

<head>
    <title>Home</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">

    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style1.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />

    <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <script src="js/jssor.slider-28.1.0.min.js" type="text/javascript"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

</head>
<style>
    /*jssor slider loading skin spin css*/
    .jssorl-009-spin img {
        animation-name: jssorl-009-spin;
        animation-duration: 1.6s;
        animation-iteration-count: infinite;
        animation-timing-function: linear;
        border-radius: 10px;
    }

    .crd {
        padding-top: 5px;
        padding-bottom: 5px;
        background-color: #b2b2b6;
    }

    @keyframes jssorl-009-spin {
        from {
            transform: rotate(0deg);
        }

        to {
            transform: rotate(360deg);
        }
    }

    .jssor_1 {
        background-color: #f2f2f2;
    }


    .hover:hover {

        widows: 100px !important;
        background-color: black;
        background-color: #f2f2f2;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        transition: transform 0.3s ease;
    }

    .video-container {
        display: flex;
        justify-content: flex-start;
    }

    .a {
        position: relative;
        left: 4px;
        overflow-x: hidden !important;

    }

    input[type="text"] {
        border: none;
        /* Remove the default border */
        border-bottom: 2px solid #000;
        /* Add a bottom border */
        outline: none;
        width: 100% !important;
        /* Remove the default input focus outline */

    }

    .d {
        padding-right: 10px;
        padding-left: 10px;
    }

    .circular-image2 {
        width: 60px;
        /* Adjust the width and height as needed */
        height: 55px;
        border-radius: 50%;
        /* Create a circular shape */
        border: 2px solid #000;
        /* Add a border around the circle */
    }

    .desc {
        padding-left: 10px;
        padding-right: 10px;
    }
</style>

<body>
    <!-- Spinner Start -->

    <!-- Navbar -->
    @include('navbar')

    {{-- Navbar  --}}



    <div class="container-fluid">
        <div class="row">
            <br>
            <div class="col-md-8">
                <br>
                <div class="card">
                    <video id="player" width="100%">

                    </video>
                </div>
                <script>
                    document.addEventListener('DOMContentLoaded', () => {
                        var video = document.getElementById('player');
                        var lectures = @json($lectures); // Convert the PHP array to a JavaScript object

                        if (lectures.length > 0) {
                            var source = "{{ asset('videos/') }}" + '/' + lectures[0]['lec_video_path'];
                            video.src = source;

                            var player = new Plyr(video);

                            player.on('ready', () => {
                                // Video player is ready (you can add custom logic here)
                            });

                            player.on('play', () => {
                                // Video playback has started (you can add custom logic here)
                            });

                            video.onerror = function() {
                                console.error('Error loading the video.');
                            };
                        } else {
                            console.error('No lecture data available.');
                        }
                    });
                </script>
                <div class="row">
                    <div class="col-md-10">
                        <h2 class="text-black mt-2">
                            @if (!count($lectures) == 0)
                                {{ $lectures[0]['lec_Name'] }}
                            @else
                                No data Found
                            @endif
                        </h2>
                    </div>

                    

                </div>

                <!-- Move the button inside the col-md-5 div -->
                <!-- <button id="playPauseButton">Play</button> -->
            </div>
            <div class="col-md-4">
                <div class="card">
                    <br>

                    <div class="card">
                        <div class="row">
                            <div class="card-header bg-primary">
                                <h5 class="text-center">Playlist of {{ $lectures[0]['name'] }}</h5>
                            </div>
                            <div class="card-body a" style="max-height: 300px; overflow-y: auto;">
                                <ul class="list-group">
                                    <!-- List of products (add more items as needed) -->
                                    <li class="list-group-item">

                                        @foreach ($all_lectures as $data)
                                            @if ($data['id'] == $lectures[0]['id'])
                                                <div class="card">
                                                    <div class="row crd">
                                                        <div class="col-md-5 ">
                                                            <video id="myVideo" class="mt-2" width="100%">
                                                                <source
                                                                    src="{{ asset('videos/' . $data['lec_video_path']) }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <p class="text-black mt-2">
                                                                {{ strlen($data['lec_Name']) > 13 ? substr($data['lec_Name'], 0, 25) . '...' : $data['lec_Name'] }}
                                                            </p>

                                                        </div>
                                                    </div>
                                                </div>
                                            @else
                                                <a href="">
                                                    <div class="row">
                                                        <div class="col-md-5">
                                                            <video id="myVideo" class="mt-2" width="100%">
                                                                <source
                                                                    src="{{ asset('videos/' . $data['lec_video_path']) }}"
                                                                    type="video/mp4">
                                                                Your browser does not support the video tag.
                                                            </video>
                                                        </div>
                                                        <div class="col-md-7">
                                                            <p class="text-black mt-2">
                                                                {{ strlen($data['lec_Name']) > 13 ? substr($data['lec_Name'], 0, 25) . '...' : $data['lec_Name'] }}


                                                        </div>
                                                    </div>
                                                </a>
                                            @endif
                                        @endforeach()
                                    </li>



                                    <!-- Add more product items here -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-8">
                    <br>

                    <div class="card desc" style="width: 100%;">


                        <p>{{ $lectures[0]['desc'] }}</p>
                    </div>
                </div>

            </div>
            <div class="row">


                <div class="col-md-1">
                    <br>
                    <img class="circular-image2 mt-3" src="{{ asset('images/' . $userdata[0]['image']) }}"
                        width="100%" alt="">
                </div>

                <div class="col-md-7">
                    <br>
                    <div class="row">
                        <div class="col-md-10">

                        </div>

                        <div class="col-md-2">
                            <form action="{{ route('push_comment') }}" method="post">
                                @csrf
                                <input class="btn btn-primary " id="submitButton" disabled class="mt-2" type="submit"
                                    value="Submit">
                                <input type="hidden" name="lec_id" value="{{ $lectures[0]['id'] }}">
                        </div>
                        <input type="text" name="comment" id="myInput" placeholder="Add a Comment">
                        </form>
                    </div>
                </div>

            </div>
        </div>

        <br>
        <br>
        <p>{{ count($comment) }} Comments</p>

        <script>
            const commentInput = document.getElementById('myInput');
            const submitButton = document.getElementById('submitButton');
        
            commentInput.addEventListener('input', checkInput);
        
            function checkInput() {
                if (commentInput.value.trim() !== '') {
                    submitButton.removeAttribute('disabled');
                } else {
                    submitButton.setAttribute('disabled', 'disabled');
                }
            }
        </script>
        


        <div class="row">
            <div class="col-md-8">
                <div class="card d">
                    @foreach ($comment as $data)
                        <div class="row">

                            <div class="col-md-1">
                                <img src="{{ asset('images/' . $data['image']) }}" class="circular-image2"
                                    width="100%" alt="">

                            </div>
                            <div class="col-md-8">

                                <p class="text-black mt-3 mr-10">{{ $data['email'] }}</p>
                                <p class="text-black mr-lg-1">{{ $data['Comment'] }}</p>
                            </div>


                        </div>
                        <hr>
                    @endforeach

                </div>
            </div>

        </div>

        <hr>










        {{-- footer  --}}
        @include('footer')
        {{-- footer end  --}}
        <!-- Bootstrap JavaScript Libraries -->
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
            integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
        </script>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
            integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
        </script>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/wow.min.js') }}"></script>
        <script src="{{ asset('js/easing.min.js') }}"></script>
        <script src="{{ asset('js/waypoints.min.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
        <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('js/main.js') }}"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
</body>

</html>
