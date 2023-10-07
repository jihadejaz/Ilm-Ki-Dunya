<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"
        integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</head>

<body>


    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}

    <div class="container-fluid">
        <div class="row bg-dark">
            <h1 class="text-center text-white mb-5 mt-5">Choose the Course</h1>


        </div>
        <hr>
        <div class="row">
            <div class="col-md-12">
                <div class="row">

                    @if (count($category) == 0)
                        <p>Category Not Available</p>
                    @else
                        @foreach ($category as $item)
                            <div class="col-md-3">
                                <a href="{{ route('test_mcqs', ['id' => $item['id']]) }}">
                                    <div class="card mb-3" style="border: 0 transparent;">
                                        <img class="img-fluid" style="width: 100%"
                                            src="{{ asset('images/' . $item['icon']) }}" alt="">
                                            <hr>
                                        <h4 class="text-center" style="font-weight: 200;">{{ $item['name'] }}</h4>
                                        <p class="text-muted text-center">{{ $item['desc'] }}</p>
                                    </div>
                                </a>
                            </div>
                        @endforeach
                    @endif

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    {{-- footer  --}}
    @include('footer')
    {{-- footer end  --}}
</body>

</html>
