<!doctype html>
<html lang="en">

<head>
    <title>Cv</title>
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

<style>
    .image-container {
        position: relative;
        display: inline-block;
    }

    .btn {
        position: absolute;
        bottom: 20px;
        /* Adjust the positioning of the button as per your preference */
        left: 50%;
        transform: translateX(-50%);
        padding: 10px 20px;
        background-color: #3498db;
        color: #ffffff;
        border: none;
        border-radius: 20px;
        font-size: 16px;
        cursor: pointer;
        opacity: 0;
        transition: opacity 0.3s ease;
    }

    .image-container:hover .btn {
        opacity: 1;
        color: #ffffff;
        background-color: purple
    }
</style>

<body>
    <header>
        @include('navbar')
    </header>
    <main>
        <br>
        <br>
        <br>
        <h3 class="text-center">Pick a Template for Your CV</h3>
        <br>
        <div class="row">

            <div class="col-4"></div>
            <div class="col-4">
                <p class="text-center">Choose a CV template, fill it out, and download in seconds. Create a professional
                    curriculum vitae in a few clicks. Just pick one of 18+ CV templates below, add ready-to-use
                    suggestions, and get the job.</p>
            </div>
        </div>
        <br>
        <hr>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6">
                    <h5>Modern</h5>

                    <p>Modern resume template. Elegant accents in the header, footer, and section titles.</p>

                    <div class="image-container">
                        <form action="{{ route('onecv') }}" method="post">
                            @csrf
                            <img width="100%" src="{{ asset('images/about.jpg') }}" alt="">

                            <input type="submit" value="use Templete" class="btn" name="" id="">

                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <h5>Muse</h5>
                    <p>Visual resume template. Two columns that help focus on your experience.</p>
                    <div class="image-container">
                        <form action="{{ route('onecv') }}" method="post">
                            @csrf

                            <img width="100%" src="{{ asset('images/about.jpg') }}" alt="">
                            <input type="submit" value="use Templete" class="btn" name="" id="">
                        </form>
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
