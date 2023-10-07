<!DOCTYPE html>
<html lang="en">

<head>
    <title>Test Mcqs</title>
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
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous">
    </script>



</head>

<body>

    {{-- NAVBAR START  --}}
    @include('navbar')
    {{-- NAVBAR END  --}}
    <br>
    <br>


    <!DOCTYPE html>
    <html>

    <head>
        <!-- Add your stylesheet and other meta information here -->
    </head>

    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 " style="height: 450px; overflow-y:scroll-behavior: smooth;">
                    <!-- Left Column for Category -->

                    <div class="" style="height: 100%; overflow-y: scroll;">
                        <h3 class="display-6 mx-4" style="font-weight: 200;">Categories</h3>
                        <br>
                        <br>
                        <ul>
                            @foreach ($allcategory as $item)
                            <a href="{{ route('test_mcqs', ['id' => $item['id']]) }}">
                                <p class="text-black">{{ $item['name'] }}<br /></p>
                            </a>
                            <hr>
                            @endforeach

                            <!-- Add more categories as needed -->
                        </ul>
                    </div>
                </div>
                <div class="col-md-8">
                    <!-- Right Column for Content -->
                    <h3 class="display-6" style="font-weight: 200;">Mulitple Choice Questions</h3>
                    @if (count($mcqs) == 0)
                    @else
                    <p class="text-muted">Test your {{ $mcqs[0]['name'] }}
                        skills with ILM Ki Dunya Quiz Portal.</p>
                    @endif



                    <p class="text-danger">
                        @if (session('msg'))
                        {{ session('msg') }}
                        @endif
                    </p>


                    <br>
                    {{-- <h4>Question : 1 of {{ $count }}</h4> --}}
                    <br>


                    @if (count($mcqs) == 0)
                    @else
                    @php $question = 1; @endphp
                    @foreach ($mcqs as $index => $item)
                    {{ $question++ }}: {{ $item['ques'] }}<br><br>

                    <form action="{{ route('check_msqs') }}" method="post">
                        @csrf
                        <input type="hidden" name="answer[]" value="{{ $item['right_ans'] }}">
                        <input type="hidden" name="category" value="{{ $item['name'] }}">
                        <input type="hidden" name="id[]" value="{{ $item['id'] }}">

                        <input id="" type="radio" name="selected_option[{{ $index }}]" value="{{ $item['ans_1'] }}">
                        <label for="">{{ $item['ans_1'] }}</label><br>

                        <input id="" type="radio" name="selected_option[{{ $index }}]" value="{{ $item['ans_2'] }}">
                        <label for="">{{ $item['ans_2'] }}</label><br>

                        <input id="" type="radio" name="selected_option[{{ $index }}]" value="{{ $item['ans_3'] }}">
                        <label for="">{{ $item['ans_3'] }}</label><br>

                        <input id="" type="radio" name="selected_option[{{ $index }}]" value="{{ $item['ans_4'] }}">
                        <label for="">{{ $item['ans_4'] }}</label><br><br>
                        <hr>
                        <br>
                        <br>
                        @endforeach

                        @endif

                        <div id="timer-expired" style="display: none;">
                            <p>Time's up! You cannot answer any more questions.</p>
                        </div>
                        <br>
                        @if (count($mcqs) == 0)
                        <br>
                        <br>
                        <br>
                        <br>
                        <h5 class="text-black text-center">Not Found Data</h5>
                        @else
                        <input class="btn btn-dark btn-lg" style="border-radius: 0;" type="submit" value="End Test">
                        @endif
                    </form>
                    <br>
                    <br>










                </div>
            </div>
        </div>
    </body>
    <br>
    <br>
    <br>
    {{-- footer  --}}
    @include('footer')
    {{-- footer end  --}}

    </html>






</body>

</html>