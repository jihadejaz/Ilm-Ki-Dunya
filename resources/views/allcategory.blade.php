<!doctype html>
<html lang="en">

<head>
    <title>Categories</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/owl.carousel.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
     <script src="//cdn.jsdelivr.net/npm/hls.js@latest"></script>
     <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

</head>

<body>
    <header>

        {{-- NAVBAR START  --}}
        @include('navbar')
        {{-- NAVBAR END  --}}




    </header>

    <main>

        <div class="container-fluid bg-dark py-5 mb-5 page-header">
            <div class="container py-5">
                <div class="row justify-content-center">
                    <div class="col-lg-10 text-center">
                        <h1 class="display-3 text-white animated slideInDown">Courses</h1>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb justify-content-center">
                                
                                {{-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> --}}
                                <li class="breadcrumb-item text-white active" aria-current="page">

                                    <h4 class="text-white"><?php echo $course_name; ?></h4>
                                </li>
                            </ol>
                        </nav>

                    </div>
                </div>
            </div>
        </div>


        {{-- video lecturres --}}

        <div class="container-fluid">
            <br>
            <div class="row">
                <div class="text-center wow" data-wow-delay="0.1s">
                    <h6 class="section-title bg-white text-center text-primary px-3">Course of</h6>
                    <h1 class="mb-5">Popular Lectures</h1>
                </div>
                @if(Session::has('uemail'))

                @isset($lectures)

                @if (count($lectures) === 0)
                <div class="col-md-12 text-center">
                    <h4>No lectures available...!</h4>
                </div>
                @else
                @foreach ($lectures as $item)
                <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="course-item bg-light">
                      
                            <div style="height: 200px" class="position-relative overflow-hidden">
                                <video id="player_{{ $item['id'] }}" style="height: 200px" controls width="100%">
                                    Your browser does not support the video tag.
                                </video>
                
                                <script>
                                    document.addEventListener('DOMContentLoaded', () => {
                                        var video = document.getElementById('player_{{ $item['id'] }}');
                                        var source = "{{ asset('videos/' . $item['lec_video_path']) }}";
                
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
                                    });
                                </script>
                                <div class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">
                                    <!-- Some content related to the video (optional) -->
                                </div>
                            </div>
                            <a href="{{ route('detaillecture',['id' => $item['id']]) }}">
                            <h5>{{ $item['lec_Name'] }}</h5>
                            <p class="text-black"> {{ strlen($item['desc']) > 70 ? substr($item['desc'], 0, 70) . '...' : $item['desc'] }}</p>
                        </a>
                    </div>
                </div>
                <br>
                @endforeach
                
                @endif

                @endisset
                @else
                <p class="text-center text-black">Login your Account</p>
                
                @endif
            </div>
        </div>




        </div>
        </div>
    </main>


    {{-- footer  --}}
    @include('footer')
    {{-- footer end  --}}
</body>








<!-- Bootstrap JavaScript Libraries -->
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js" integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
</script>
<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="{{ asset('js/wow.min.js') }}"></script>
<script src="{{ asset('js/easing.min.js') }}"></script>
<script src="{{ asset('js/waypoints.min.js') }}"></script>
<script src="{{ asset('js/owl.carousel.min.js') }}"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
</body>

</html>