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
</style>

<body>
    <header>
        <!-- Navbar -->
        @include('navbar')
        {{-- Navbar  --}}
    </header>
    {{-- <nav class="navbar navbar-expand-sm navbar-dark" style="background: purple">
        <div class="container-fluid justify-content-end">


            <form class="d-flex">
                <input class="form-control me-2" type="text" placeholder="Search">
                <button class="btn btn-primary" type="button">Search</button>
            </form>
        </div>
    </nav> --}}
    <main>
        <!--Start of Tawk.to Script-->
        <script type="text/javascript">
            var Tawk_API = Tawk_API || {},
                Tawk_LoadStart = new Date();
            (function() {
                var s1 = document.createElement("script"),
                    s0 = document.getElementsByTagName("script")[0];
                s1.async = true;
                s1.src = 'https://embed.tawk.to/64e0dbf294cf5d49dc6b58da/1h875mbjj';
                s1.charset = 'UTF-8';
                s1.setAttribute('crossorigin', '*');
                s0.parentNode.insertBefore(s1, s0);
            })();
        </script>
        <!--End of Tawk.to Script-->
        <!-- Carousel Start -->
        <div class="container-fluid p-0  mb-5">
            <div class="owl-carousel  header-carousel position-relative">
                <div class="owl-carousel-item position-relative">
                    <img class="img-fluid" src="{{ asset('images/banner3.jpg') }}"
                        style="background-attachment: fixed; background-position: center; background-size: cover;">
                    <div class="position-absolute  top-0 start-0 w-100 h-100 d-flex align-items-center"
                        style="background: rgba(24, 29, 56, .7); margin-top: px">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="col-sm-10 col-lg-9">
                                    {{-- <p class="text-white">Welcome Student</p> --}}

                                    <h1 class="display-3 text-white animated fs-1 slideInDown" style="font-weight: 150;"
                                        id="">Acquire
                                        knowledge and
                                        impart it to the people.</h1>
                                    <br>


                                    <a href="{{ route('courseEnrol') }}"
                                        class="btn py-md-3 px-md-5 animated slideInRight bg-light">Enroll Now <i
                                            class="fa fa-arrow-circle-up"></i></a>
                                    <a href="{{ route('cvmakerpage') }}"
                                        class="btn btn-primary py-md-3 px-md-5 animated slideInRight bg-dark text-light"
                                        style="border-radius: 0; border: transparent;">Create free Cv <i
                                            class="fa fa-arrow-circle-down"></i></a>


                                </div>


                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <div class="container">
            <hr>
        </div>
        <!-- slider script   -->
        <script type="text/javascript">
            window.jssor_1_slider_init = function() {

                var jssor_1_options = {
                    $AutoPlay: 1,
                    $Idle: 0,
                    $SlideDuration: 5000,
                    $SlideEasing: $Jease$.$Linear,
                    $PauseOnHover: 4,
                    $SlideWidth: 140,
                    $Align: 0
                };

                var jssor_1_slider = new $JssorSlider$("jssor_1", jssor_1_options);

                /*#region responsive code begin*/

                var MAX_WIDTH = 980;

                function ScaleSlider() {
                    var containerElement = jssor_1_slider.$Elmt.parentNode;
                    var containerWidth = containerElement.clientWidth;

                    if (containerWidth) {

                        var expectedWidth = Math.min(MAX_WIDTH || containerWidth, containerWidth);

                        jssor_1_slider.$ScaleWidth(expectedWidth);
                    } else {
                        window.setTimeout(ScaleSlider, 30);
                    }
                }

                ScaleSlider();

                $Jssor$.$AddEvent(window, "load", ScaleSlider);
                $Jssor$.$AddEvent(window, "resize", ScaleSlider);
                $Jssor$.$AddEvent(window, "orientationchange", ScaleSlider);
                /*#endregion responsive code end*/
            };
        </script>
        {{-- <nav class="navbar navbar-expand-sm navbar-dark">
            <div class="container-fluid">


                <form class="d-flex">
                    <input class="form-control me-2" type="text" placeholder="Search">
                    <button class="btn btn-dark" type="button">Search</button>
                </form>
            </div>
        </nav> --}}
        <!-- About Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
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
        <div class="container">
            <hr>
        </div>
        <!-- Service Start -->
        <div class="container-xxl py-5">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.1s">
                        <div class="service-item text-center pt-3">
                            <div class="p-4" style="height: 270px;">
                                <i class="fa fa-3x fa-play text-black mb-4" style=""></i>
                                <h5 class="mb-3">Recorded Lectures</h5>
                                <hr>
                                <p class="">Ba a part of our most skilled and well knowledged teachers</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.3s">
                        <a href="{{ route('view_mcqs') }}">
                            <div class="service-item text-center pt-3">
                                <div class="p-4" style="height: 270px;">
                                    <i class="fa fa-3x fa-globe text-black mb-4"></i>
                                    <h5 class="mb-3">Get Certificate</h5>
                                    <hr>

                                    <p class="text-black">

                                        Get your certificate, showcase achievements, boost credential
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.5s">
                        <div class="service-item text-center pt-3">
                            <a href="{{ route('userdailytask') }}">
                                <div class="p-4" style="height: 270px;">
                                    <i class="fa fa-3x fa-home text-black mb-4"></i>
                                    <h5 class="mb-3">Home Tasks</h5>
                                    <hr>

                                    <p class="text-black">You can get daily tasks for any
                                        course.</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 wow fadeInUp" data-wow-delay="0.7s">
                        <a href="{{ route('bookslab') }}">
                            <div class="service-item text-center pt-3">
                                <div class="p-4" style="height: 270px;">
                                    <i class="fa fa-3x fa-book-open text-black mb-4"></i>
                                    <h5 class="mb-3">Library</h5>
                                    <hr>

                                    <p class="text-black">You can read different Books online here completely for free.
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Service End -->
        <div class="container">
            <hr>
        </div>

        <!-- Courses Start -->
        <div class="container-fluid">
            <br>
            <div class="row p-lg-5">
                <div class="text-center wow" data-wow-delay="0.1s">
                    <h1 class="mb-5">Popular Lectures</h1>
                </div>
                @foreach ($category as $item)
                    <div class="col-lg-4 col-md-4 wow fadeInUp" data-wow-delay="0.1s">
                        <a href="{{ route('allcategory', ['id' => $item['id']]) }}">
                            <div class="course-item ">
                                <div class="position-relative overflow-hidden">
                                    <img class="rounded-3 img-thumbnail" src="images/{{ $item['category_img'] }}"
                                        alt="">
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


        <br>
        <script type="text/javascript">
            jssor_1_slider_init();
        </script>




        <div class="container-fluid fact wow fadeInUp bg-dark my-5 py-5">
            <div class="container-fluid">
                <div class="row g-4">
                    <div class="col-md-6 col-lg-3 text-center " data-wow-delay="0.1s">
                        <i class="fa fa-check wow fadeInUp fa-2x text-white mb-3"></i>
                        <h2 id="categoryCount" class="text-white mb-2 wow fadeInUp" data-toggle="counter-up">0</h2>
                        <p class="text-white mb-0 wow fadeInUp">Total Category</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.3s">
                        <i class="fa fa-users-cog wow fadeInUp fa-2x text-white mb-3"></i>
                        <h2 id="studentCount" class="text-white mb-2" data-toggle="counter-up">0</h2>
                        <p id="" class="text-white mb-0 wow fadeInUp">Enrolled Students </p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.5s">
                        <i class="fa fa-users fa-2x wow fadeInUp text-white mb-3"></i>
                        <h2 id="lectureCount" class="text-white wow fadeInUp mb-2" data-toggle="counter-up">0</h2>
                        <p class="text-white mb-0 wow fadeInUp">Total Lectures</p>
                    </div>
                    <div class="col-md-6 col-lg-3 text-center wow fadeIn" data-wow-delay="0.7s">
                        <i class="fa fa-wrench fa-2x wow fadeInUp text-white mb-3"></i>
                        <h2 id="certificateCount" class="text-white wow fadeInUp mb-2" data-toggle="counter-up">0
                        </h2>
                        <p class="text-white mb-0 wow fadeInUp">Certified Students</p>
                    </div>

                </div>
            </div>
        </div>
        <div class="container">
            <hr>
        </div>

        <script>
            const targetCategoryCount = JSON.parse('{{ json_encode($categoryCount) }}');
            const targetStudentCount = JSON.parse('{{ json_encode($EnrollCount) }}');
            const targetLectureCount = JSON.parse('{{ json_encode($lectureCount) }}');
            const targetCertificateCount = JSON.parse('{{ json_encode($mcqsCount) }}');

            let categoryCount = 0;
            let studentCount = 0;
            let lectureCount = 0;
            let certificateCount = 0;

            function updateCounters() {
                if (categoryCount < targetCategoryCount) {
                    categoryCount++;
                    document.getElementById("categoryCount").textContent = categoryCount;
                }

                if (studentCount < targetStudentCount) {
                    studentCount++;
                    document.getElementById("studentCount").textContent = studentCount;
                }

                if (lectureCount < targetLectureCount) {
                    lectureCount++;
                    document.getElementById("lectureCount").textContent = lectureCount;
                }

                if (certificateCount < targetCertificateCount) {
                    certificateCount++;
                    document.getElementById("certificateCount").textContent = certificateCount;
                }

                if (
                    categoryCount < targetCategoryCount ||
                    studentCount < targetStudentCount ||
                    lectureCount < targetLectureCount ||
                    certificateCount < targetCertificateCount
                ) {
                    setTimeout(updateCounters, 90); // Update counters every 10 milliseconds
                }
            }

            updateCounters(); // Start updating counters
        </script>

        <!-- Fact End -->
        @include('sweetalert::alert')



        <br>
        <br>



        <br>
        <br>






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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('js/main.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
