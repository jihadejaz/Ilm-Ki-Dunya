<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css">
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Nunito:wght@600;700;800&display=swap" rel="stylesheet">

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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>
</head>

<style>
    .logo {
        height: 50px;
        background-color: #3498db;
        border-radius: 50%;
        /* Ek perfect circle ke liye single value */
    }
</style>

<body>


    @include('navbar')

    <br>
    <br>

    <h3 class="text-center text-black">Student Chat</h3>
    <br>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table>
                    <tbody>

                        @foreach($all as $data)


                        <div class="row">
                            <div class="col-md-1">
                                <img class="logo" style="width: 100%;" src="images/{{$data['image']}}" alt="">
                            </div>
                            <div class="col-md-9">
                                <h5 class=" text-black">{{$data['firstname']}} {{$data['lastname']}}</h5>
                                @if($data['status']=="online")

                                <small>
                                    <p style="margin-left: 20px;" class=" text-success">{{$data['status']}}</p>
                                </small>
                                @elseif($data['status']=="offline")

                                <p class="">{{ \Carbon\Carbon::parse($data['updated_at'])->format('h:i A') }}</p>
                                @endif
                            </div>
                            <div class="col-md-1">
                                <a href="{{route('chatdetail',['id'=>$data['id']])}}" class=" mt-4 btn btn-success badge badge-success">chat</a>
                            </div>
                            
                            <div class="col-md-1">
                                <a href="{{route('chatdetail',['id'=>$data['id']])}}" class=" mt-4 btn btn-danger badge badge-danger">block</a>
                            </div>
                        </div>

                        <hr>
                        @endforeach


                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @include('footer')
</body>

</html>