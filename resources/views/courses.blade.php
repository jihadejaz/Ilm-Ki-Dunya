<!doctype html>
<html lang="en">

<head>
    <title>Courses</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>

</head>
<style>

</style>

<body>
    <header>
        <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->
        <!-- Navbar Start -->
        @include('navbar')
        <!-- Navbar End -->
    </header>

    <div class="container-fluid p-5"
        style="background: url(images/1692267985_1576000.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        <div class="container">
            <h1 class="text-white text-center p-3">Courses</h1>
            <center><a href="{{ route('view_mcqs') }}" class="btn btn-light btn-lg" style="border-radius: 0; border: black solid 0.5px;">Get Certificate</a></center>

        </div>

    </div>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <br>
                    <br>
                    {{-- <h3 class="text-dark text-center">Inroll</h3> --}}
                </div>
            </div>
        </div>
        <!-- Header End -->

        <!-- Courses Start -->
        <div class="container-fluid ">
            <br>

            <div class="row p-lg-5">

                @foreach ($category as $item)
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('allcategory', ['id' => $item['id']]) }}">
                            <div class="course-item ">
                                <div class="position-relative overflow-hidden">
                                    <img class="img-thumbnail" src="images/{{ $item['category_img'] }}" alt="">
                                    <div
                                        class="w-100 d-flex justify-content-center position-absolute bottom-0 start-0 mb-4">


                                    </div>
                                </div>
                                <div class="text-center p-4 pb-0">
                                    <h5 class="mb-4 text-dark">{{ $item['name'] }}</h5>
                                    <h3 class="mb-0"></h3>
                                    <div class="mb-3">
                                        <a href="{{ route('courseEnrol', ['id' => $item['id'], 'name' => $item['name']]) }}"
                                            class="flex-shrink-0 btn-sm btn-dark px-3"
                                            style="border: 0.5px black solid; border-radius: 0;">Join Now <i
                                                class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>

                            </div>
                        </a>
                    </div>
                @endforeach


            </div>
        </div>
        <!-- Courses End -->



    </main>
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
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
