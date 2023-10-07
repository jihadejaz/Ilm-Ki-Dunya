<!doctype html>
<html lang="en">

<head>
    <title>Course Enroll</title>
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
    .section {
        padding: 100px 0;
        position: relative;
    }



    /* Contact Us
---------------------*/
    .contact-name {
        margin-bottom: 30px;
    }

    .contact-name h5 {
        font-size: 22px;
        color: #20247b;
        margin-bottom: 5px;
        font-weight: 600;
    }

    .contact-name p {
        font-size: 18px;
        margin: 0;
    }

    .social-share a {
        width: 40px;
        height: 40px;
        line-height: 40px;
        border-radius: 50%;
        color: #ffffff;
        text-align: center;
        margin-right: 10px;
    }

    .social-share .dribbble {
        box-shadow: 0 8px 30px -4px rgba(234, 76, 137, 0.5);
        background-color: #ea4c89;
    }

    .social-share .behance {
        box-shadow: 0 8px 30px -4px rgba(0, 103, 255, 0.5);
        background-color: #0067ff;
    }

    .social-share .linkedin {
        box-shadow: 0 8px 30px -4px rgba(1, 119, 172, 0.5);
        background-color: #0177ac;
    }

    .contact-form .form-control {
        border: none;
        border-bottom: 1px solid #20247b;
        background: transparent;
        border-radius: 0;
        padding-left: 0;
        box-shadow: none !important;
    }

    .contact-form .form-control:focus {
        border-bottom: 1px solid #fc5356;
    }

    .contact-form .form-control.invalid {
        border-bottom: 1px solid #ff0000;
    }

    .contact-form .send {
        margin-top: 20px;
    }

    @media (max-width: 767px) {
        .contact-form .send {
            margin-bottom: 20px;
        }
    }

    .section-title h2 {
        font-weight: 700;
        color: #20247b;
        font-size: 45px;
        margin: 0 0 15px;
        border-left: 5px solid #fc5356;
        padding-left: 15px;
    }

    .section-title {
        padding-bottom: 45px;
    }

    .contact-form .send {
        margin-top: 20px;
    }

    .px-btn {
        padding: 0 50px 0 20px;
        line-height: 60px;
        position: relative;
        display: inline-block;
        color: #20247b;
        background: none;
        border: none;
    }

    .px-btn:before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        display: block;
        border-radius: 30px;
        background: transparent;
        border: 1px solid rgba(252, 83, 86, 0.6);
        border-right: 1px solid transparent;
        -moz-transition: ease all 0.35s;
        -o-transition: ease all 0.35s;
        -webkit-transition: ease all 0.35s;
        transition: ease all 0.35s;
        width: 60px;
        height: 60px;
    }

    .px-btn .arrow {
        width: 13px;
        height: 2px;
        background: currentColor;
        display: inline-block;
        position: absolute;
        top: 0;
        bottom: 0;
        margin: auto;
        right: 25px;
    }

    .px-btn .arrow:after {
        width: 8px;
        height: 8px;
        border-right: 2px solid currentColor;
        border-top: 2px solid currentColor;
        content: "";
        position: absolute;
        top: -3px;
        right: 0;
        display: inline-block;
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        -ms-transform: rotate(45deg);
        -webkit-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .c {
        position: relative;
        width: 300%;
        height: 320px;
        padding-top: 40px;
    }



    /* //////ye css carton animation ki ha// */
</style>

<body>
    <header>

        <!-- Navbar Start -->
        @include('navbar')
        <!-- Navbar End -->
    </header>
    <main>

        <section class="section gray-bg bg-white">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2 class="text-dark">Enrollment Portal</h2>
                            <p>We hope that you will benefit from being connected with us, and we will assist you in
                                reaching your educational goals.</p>
                            <br>

                            @if (isset($msg))
                                <?php
                                
                                if ($msg == 'Enrollment success, wait for the approval') {
                                    $class = 'text-success';
                                } else {
                                    $class = 'text-danger';
                                }
                                ?>
                            @endif

                            @if (isset($msg))
                                <p class="{{ $class }}"> {{ $msg }}</p>
                            @endif

                        </div>
                    </div>
               

                <div class="row form-group">
                    <div class="col-md-6">
                        <form action="{{ route('inrollreq') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            {{-- <label for="exampleSelect">Enter a Email:</label> --}}
                            @isset($email)
                                <input type="email" value="@if ($email) {{ $email }} @endif"
                                name="email" placeholder="e.g hk0527075@gmail.com" @endisset class="form-control"
                                name="" id="">
                            @error('email')
                                <p class="text-danger">{{ $message }}</p>
                            @enderror
                            <br>
                            <hr>
                            @isset($category)
                                @if (count($category) == 0)
                                    <p class="text-danger">No Categories at the moment, Check back later</p>
                                @else
                                    <select name="course" class="form-control">
                                        @isset($course)
                                            <option value="{{ $course->id }}">{{ $course->name }}</option>
                                        @else
                                            <option value="" class="text-dark">----Select a Course----</option>

                                            @foreach ($category as $item)
                                                <option class="text-dark" value="{{ $item['id'] }}">{{ $item['name'] }}
                                                </option>
                                            @endforeach
                                        @endisset
                                    </select>
                                    @error('course')
                                        <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                    <br>
                                @endif
                            @endisset



                            </select>

                            <br>

                            <input type="submit" value="Confirm" class="btn btn-dark btn-lg" style="border-radius: 0;">
                        </form>
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
