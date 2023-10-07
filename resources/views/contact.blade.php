<!doctype html>
<html lang="en">

<head>
    <title>Contact</title>
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
    <main>

        <section class="section bg-white" id="contactus">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="section-title">
                            <h2>Get In Touch</h2>
                            <p>I design and develop services for customers of all sizes, specializing in creating
                                stylish, modern websites</p>
                        </div>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-primary text-white" style="border-radius: 0px; background: purple">
                        {{ session('success') }}
                    </div>
                @endif
                @if (session('error'))
                    <div class="alert bg-light alert-danger text-danger" style="border-radius: 0px;">
                        {{ session('error') }}
                    </div>
                @endif
                <div class="row flex-row-reverse">
                    <div class="col-md-7 col-lg-8 m-15px-tb">
                        <div class="contact-form">
                            <form action="{{ route('contactus') }}" method="POST" enctype="multipart/form-data"
                                class="contactform contact_form" id="contact_form">@csrf
                                <div class="returnmessage valid-feedback p-15px-b"
                                    data-success="Your message has been received, We will contact you soon."></div>
                                <div class="empty_notice invalid-feedback p-15px-b"><span>Please Fill Required
                                        Fields</span></div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="name" name="fullname" type="text"
                                                value="{{ old('fullname') }}" placeholder="Full Name"
                                                class="form-control">
                                            <span> @error('fullname')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input id="email" name="email" value="{{ old('email') }}"
                                                type="email" placeholder="Email Address" class="form-control">
                                            <span> @error('email')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group">
                                            <input id="subject" name="subject" type="text"
                                                value="{{ old('subject') }}" placeholder="Subject"
                                                class="form-control">
                                            <span> @error('subject')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea id="message" name="message" value="{{ old('message') }}" placeholder="Message" class="form-control"
                                                rows="3"></textarea>
                                            <span> @error('message')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="send">
                                            <button class="px-btn theme" type="submit">Send</button>

                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-5 col-lg-4 m-15px-tb">
                        <div class="contact-name">
                            <h5>Mail</h5>
                            <p>ilmkidukaanstore@gmail.com</p>
                        </div>
                        <div class="contact-name">
                            <h5>Visit Our Center</h5>
                            <p>Aptech Star Gate, <br>Airport Karachi</p>
                        </div>
                        <div class="contact-name">
                            <h5>Phone</h5>
                            <p>+92 123456</p>
                        </div>
                        <div class="social-share nav">
                            <a class="" href="#">
                                <i class="fab fa-instagram text-dark"></i>
                            </a>
                            <a class="" href="#">
                                <i class="fab fa-facebook text-dark"></i>
                            </a>
                            <a class="" href="#">
                                <i class="fab fa-linkedin-in text-dark"></i>
                            </a>
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
