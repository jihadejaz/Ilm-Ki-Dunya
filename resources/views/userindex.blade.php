<?php use App\Http\Controllers\dunyacontroller; ?>

<?php if (session('uemail')) {
} ?>
<!doctype html>
<html lang="en">

<head>
    <title>User Panel</title>
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
    .card-style1 {
        box-shadow: 0px 0px 10px 0px rgb(89 75 128 / 9%);
    }

    .border-0 {
        border: 0 !important;
    }

    .card {
        position: relative;
        display: flex;
        flex-direction: column;
        min-width: 0;
        word-wrap: break-word;
        background-color: #fff;
        background-clip: border-box;
        border: 1px solid rgba(0, 0, 0, .125);
        border-radius: 0.25rem;
    }

    section {
        padding: 120px 0;
        overflow: hidden;
        background: #fff;
    }

    .mb-2-3,
    .my-2-3 {
        margin-bottom: 2.3rem;
    }

    .section-title {
        font-weight: 600;
        letter-spacing: 2px;
        text-transform: uppercase;
        margin-bottom: 10px;
        position: relative;
        display: inline-block;
    }

    .text-primary {
        color: #ceaa4d !important;
    }

    .text-secondary {
        color: #15395A !important;
    }

    .font-weight-600 {
        font-weight: 600;
    }

    .display-26 {
        font-size: 1.3rem;
    }

    @media screen and (min-width: 992px) {
        .p-lg-7 {
            padding: 4rem;
        }
    }

    @media screen and (min-width: 768px) {
        .p-md-6 {
            padding: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {
        .p-sm-2-3 {
            padding: 2.3rem;
        }
    }

    .p-1-9 {
        padding: 1.9rem;
    }

    .bg-secondary {
        background: #15395A !important;
    }

    @media screen and (min-width: 576px) {

        .pe-sm-6,
        .px-sm-6 {
            padding-right: 3.5rem;
        }
    }

    @media screen and (min-width: 576px) {

        .ps-sm-6,
        .px-sm-6 {
            padding-left: 3.5rem;
        }
    }

    .pe-1-9,
    .px-1-9 {
        padding-right: 1.9rem;
    }

    .ps-1-9,
    .px-1-9 {
        padding-left: 1.9rem;
    }

    .pb-1-9,
    .py-1-9 {
        padding-bottom: 1.9rem;
    }

    .pt-1-9,
    .py-1-9 {
        padding-top: 1.9rem;
    }

    .mb-1-9,
    .my-1-9 {
        margin-bottom: 1.9rem;
    }

    @media (min-width: 992px) {
        .d-lg-inline-block {
            display: inline-block !important;
        }
    }

    .rounded {
        border-radius: 0.25rem !important;
    }
</style>

<body>
    <header>
        <!-- Navbar Start -->
        @include('navbar')
        <!-- Navbar End -->
    </header>
    <main>
        {{-- <h1>hello {{ session('uemail') }}</h1> --}}
        @php
            $userData = session('uemail');
            $data;
        @endphp
        <section class="bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 mb-4 mb-sm-5">
                        <div class="card card-style1 border-0">
                            <div class="card-body p-1-9 p-sm-2-3 p-md-6 p-lg-7">
                                <div class="row align-items-center">
                                    <div class="col-lg-6 mb-4 mb-lg-0">
                                        <img src="/images/{{ $data['image'] }}" class="img-fluid" style="width: 50%"
                                            alt="...">
                                    </div>
                                    <div class="col-lg-6 px-xl-10">
                                        <div
                                            class="bg-secondary d-lg-inline-block py-1-9 px-1-9 px-sm-6 mb-1-9 rounded">
                                            <h3 class="h2 text-white mb-0">{{ $data['firstname'] }}
                                                {{ $data['lastname'] }}</h3>
                                            <span class="text-primary">Student</span>
                                        </div>
                                        <ul class="list-unstyled mb-1-9">
                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Position:</span>
                                                Junior Laravel</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Experience:</span>
                                                5 Months</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Email:</span>
                                                {{ $data['email'] }}</li>
                                            <li class="mb-2 mb-xl-3 display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Date of
                                                    Birth:</span>
                                                {{ $data['dob'] }}</li>
                                            <li class="display-28"><span
                                                    class="display-26 text-secondary me-2 font-weight-600">Phone:</span>
                                                507 - 541 - 4567</li>
                                        </ul>
                                        <ul class="social-icon-style1 list-unstyled mb-0 ps-0">
                                            <li><a href="#!"><i class="ti-twitter-alt"></i></a></li>
                                            <li><a href="#!"><i class="ti-facebook"></i></a></li>
                                            <li><a href="#!"><i class="ti-pinterest"></i></a></li>
                                            <li><a href="#!"><i class="ti-instagram"></i></a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </section>



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
<?php ?>
