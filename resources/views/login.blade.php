<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

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
    <main>


        <!-- Section: Design Block -->
        <section class="">
            <!-- Jumbotron -->
            <div class="px-4 py-5 px-md-5 text-center text-lg-start">
                <div class="container">
                    <div class="row gx-lg-5 align-items-center">
                        <div class="col-lg-6 mb-5 mb-lg-0">
                            @if (session('success'))
                                <div class="alert bg-light alert-primary text-primary" style="border-radius: 0px;">
                                    {{ session('success') }}
                                </div>
                            @endif
                            @if (session('error'))
                                <div class="alert bg-light alert-danger text-danger" style="border-radius: 0px;">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <h1 class="my-5 display-3 ls-tight" style="font-weight: 100;">
                                The best place for<br />
                                <span class="text-primary">E-learning</span>
                            </h1>
                            <p style="color: hsl(217, 10%, 50.8%)">

                            </p>
                        </div>

                
                        <div class="col-lg-6 mb-5 mt-5 mb-lg-0 p-sm-0">
                            <div class="card">
                                

                                <div class="card-body py-5 px-md-5">
                                    <form action="{{ route('sign') }}" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <!-- 2 column grid layout with text inputs for the first and last names -->


                                        <!-- Email input -->
                                        <div class="form-outline mb-4">
                                            <input type="email" id="form3Example3" name="email"
                                                style="border: black 0.5px solid; color: blaack;"
                                                placeholder="Enter Email" class="form-control" />
                                            {{-- <label class="form-label" for="form3Example3">Email address</label> --}}
                                            <span> @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>


                                        <!-- Password input -->
                                        <div class="form-outline mb-4">
                                            <input type="password" id="form3Example4" name="pswd"
                                                style="border: black 0.5px solid; color: blaack;"
                                                placeholder="Enter Password" class="form-control" />
                                            {{-- <label class="form-label" for="form3Example4">Password</label> --}}
                                            <span> @error('pswd')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>

                                        <!-- Checkbox -->
                                        <div class="form-check d-flex justify-content-center mb-4">

                                            <label class="form-check-label" for="form2Example33">
                                                <a class="text-black" style="border-bottom: black 0.5px solid;"
                                                    href="{{ route('registrationpage') }}">Create free account
                                                </a>
                                            </label>
                                        </div>

                                        <!-- Submit button -->
                                        <button type="submit" class="btn btn-primary text-light btn-lg bg-dark mb-4"
                                            style="border-radius: 0">
                                            Log in
                                        </button>


                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Jumbotron -->
        </section>
        <!-- Section: Design Block -->

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
