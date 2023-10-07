<!doctype html>
<html lang="en">

<head>
    <title>About</title>
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


<body>
    <header>

        <!-- Navbar -->
        @include('navbar')
        {{-- Navbar  --}}

    </header>
    <main>

        <!-- Coded by a designer™ -->
      
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                        <h6 class="text-secondary text-uppercase">About Us</h6>
                        <h1 class="mb-4">Welcome to E-learning</h1>
                        <p class="mb-4">
                            Sharing knowledge empowers successors, propels innovation, and bridges eras for enduring
                            progress. This exchange fuels growth, enabling each new wave to surpass the last, fostering
                            a cycle of advancement. Imparting insights invests in a dynamic future, where the past
                            informs and drives innovation for generations ahead.</p>
                        <p class="fw-medium" style="color: black; font-weight: 150;"><i
                                class="fa fa-dot-circle me-3"></i>Instant Cv</p>
                        <p class="fw-medium" style="color: black; font-weight: 150;"><i
                                class="fa fa-dot-circle me-3"></i>Recorded Lectures
                        </p>
                        <p class="fw-medium" style="color: black; font-weight: 150;"><i
                                class="fa fa-dot-circle me-3"></i>Daily Tasks</p>
                        <p class="fw-medium" style="color: black; font-weight: 150;"><i
                                class="fa fa-dot-circle me-3"></i>Complete Free Courses</p>
                        <p class="fw-medium" style="color: black; font-weight: 150;"><i
                                class="fa fa-dot-circle me-3"></i>Instant Certificate

                        </p>

                    </div>
                    <div class="col-lg-6 pt-4" style="min-height: 500px;">
                        <div class="position-relative h-100 wow fadeInUp" data-wow-delay="0.5s">
                            <img class="position-absolute img-fluid w-100 h-100"
                                src="{{ asset('images/fbcc75107e.jpg') }}"
                                style="object-fit: cover; padding: 0 0 50px 100px;" alt="">
                            <img class="position-absolute start-0 bottom-0 img-fluid bg-white pt-2 pe-2 w-50 h-50"
                                src="{{ asset('images/aboutus.jpg') }}" style="object-fit: cover;" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- ABOUT SECTION END  --}}

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
