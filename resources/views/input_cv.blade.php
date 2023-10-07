<!doctype html>
<html lang="en">

<head>
    <title>Cv Generator</title>
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
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

</head>

<body>
    <header>
        {{-- <!-- Spinner Start -->
        <div id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End --> --}}
        <!-- Navbar Start -->
        @include('navbar')

        <!-- Navbar End -->
    </header>
    <div class="container-fluid p-5"
        style="background: url(images/1692267985_1576000.jpg); background-repeat: no-repeat; background-attachment: fixed; background-size: cover;">
        <div class="container">
            <h1 class="text-white text-center p-3">Make a Cv</h1>
            <center><a href="{{ route('coursespage') }}" class="btn btn-light btn-lg"
                    style="border-radius: 0; border: black solid 0.5px;">Learn Courses</a></center>

        </div>
    </div>
    <main>

        <div class="container-fluid">

            <div class="row p-lg-3">
                <div class="col-md-12">
                    <form action="{{ route('makecv') }}" method="post">
                        @csrf
                        <div class="row">

                            <div class="col-md-6">
                                <br>
                                <p class="text-black">First Name</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    placeholder="e.g. Hussain" value="{{ old('fname') }}" name="fname"
                                    id="">
                                <span> @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Surname</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    placeholder="e.g. Khan" value="{{ old('lname') }}" name="lname" id="">
                                <span> @error('lname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>


                            <div class="col-md-12">
                                <br>
                                <p class="text-black">Profession</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    value="{{ old('profession') }}" placeholder="e.g. Developer" name="profession"
                                    id=""> <span>
                                    @error('profession')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <p class="text-black">City</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    placeholder="e.g. Karachi" value="{{ old('city') }}" name="city"
                                    id=""> <span> @error('city')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Religion</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    placeholder="e.g. Islam" name="religion" value="{{ old('religion') }}"
                                    id=""> <span> @error('religion')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Address</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    value="{{ old('address') }}" placeholder="e.g. Shah Faisal" name="address"
                                    id=""> <span>
                                    @error('address')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>

                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Phone</p>
                                <input type="text" class="form-control" style="border: black solid 0.5px;"
                                    value="{{ old('phone') }}" placeholder="e.g. 0312-3456789" name="phone"
                                    id=""> <span>
                                    @error('phone')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Email</p>
                                <input type="email" class="form-control" style="border: black solid 0.5px;"
                                    value="{{ old('email') }}" placeholder="e.g. hussain@123gmail.com"
                                    name="email" id=""> <span>
                                    @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>

                            </div>

                            <div class="col-md-12">
                                <br>
                                <p class="text-black">About</p>
                                <input type="text"class="form-control scrolling-text"
                                    style="border: black solid 0.5px;" value="{{ old('about') }}"
                                    placeholder="e.g. Hobbies" name="about" id=""> <span> @error('about')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-12">
                                <br>
                                <p class="text-black">Education</p>
                                <input type="text"class="form-control scrolling-text"
                                    value="{{ old('education') }}" style="border: black solid 0.5px;"
                                    placeholder="e.g. Inter" name="education" id=""> <span>
                                    @error('education')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                            </div>

                            <div class="col-md-12">
                                <br>
                                <p class="text-black">Company & Working Experience<span> *first</span></p>
                                <input style="overflow: visible; border: black solid 0.5px;"
                                    value="{{ old('information') }}" placeholder="Experience 1"
                                    type="text"class="form-control scrolling-text" name="information"
                                    id=""> <span> @error('information')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>


                            <div class="col-md-12">
                                <br>
                                <p class="text-black">Company & Working Experience<span> *second</span></p>
                                <input style="overflow: visible; border: black solid 0.5px;"
                                    value="{{ old('information2') }}" placeholder="Experience 2"
                                    type="text"class="form-control scrolling-text" name="information2"
                                    id=""> <span> @error('information2')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>


                            <div class="col-md-6">
                                <br>
                                <p class="text-black">Experience<span> *Years</span></p>
                                <input type="number" min="0"
                                    style="overflow: visible; border: black solid 0.5px;"
                                    value="{{ old('experience') }}" placeholder="e.g. 2"
                                    type="text"class="form-control scrolling-text" placeholder=""
                                    name="experience" id=""> <span> @error('fname')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>
                            </div>
                            <div class="col-md-6">
                            </div>

                            <div class="col-md-6 ">

                                <br>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill1" value="HTML"
                                        id="htmlCheckbox">
                                    <label class="form-check-label" for="htmlCheckbox">
                                        HTML
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill2" value="CSS"
                                        id="cssCheckbox">
                                    <label class="form-check-label" for="cssCheckbox">
                                        CSS
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill3"
                                        value="JAVASCRIPT" id="jsCheckbox">
                                    <label class="form-check-label" for="jsCheckbox">
                                        Laravel
                                    </label>
                                </div>

                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="skill4" value="PYTHON"
                                        id="pythonCheckbox">
                                    <label class="form-check-label" for="pythonCheckbox">
                                        Python
                                    </label>
                                </div>
                                <span> @error('skills')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </span>

                            </div>
                            <div class="col-md-6">

                            </div>
                            <div class="col-md-12">
                                <br>
                                <center><input type="submit" value="Generate" class="btn btn-dark btn-lg"
                                        style="border-radius: 0;"> </center>
                            </div>
                        </div>
                </div>

            </div>
        </div>

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
