<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>

<style>
    .custom-container {
        border: 4px solid black;
        background-color: wheat;
        padding: 20px;
        height: 94%;
    }

    .tittle {
        margin-left: 280px !important;
        font-family: "Lucida Handwriting";
        font-style: italic;
        letter-spacing: 4px;
        position: relative;
        top: 60px;
    }



    .p {

        margin-left: 340px !important;
        font-family: "Lucida Handwriting";
        font-size: 19px;
        position: relative;

        font-style: italic;
    }

    .name {

        margin-left: 350px !important;
        font-family: "Lucida Handwriting";
        font-size: 30px;
        position: relative;
        top: 40px;
        font-style: italic;

    }

    .name1 {

        margin-left: 550px !important;
        font-family: "Lucida Handwriting";
        font-size: 30px;
        position: relative;
        bottom: 16px;
        font-style: italic;

    }

    .one {
        position: relative;
        top: 20px;
        width: 400px;
        right: 30px;
    }

    p {
        margin-left: 70px !important;
        font-family: "Lucida Handwriting";
        font-size: 25px;
        position: relative;
        top: 70px;
    }

    .two {

        width: 240px;
        position: relative;
        margin-right: 40px;
        bottom: 40px;

    }

    .sig {

        margin-left: 850px !important;
        font-family: "Lucida Handwriting";
        font-size: 25px;
        position: relative;
        bottom: 50px;
    }

    .three {
        width: 240px;
        position: relative;
        right: 360px;
        top: 130px;

    }

    .pra {
        position: relative;
        font-style: italic;
        right: 10px;

    }

    .date {
        position: relative;
        top: 60px !important;
        left: 140px;
        font-size: 25px;
    }

    .d {

        position: relative;
        top: 60px;
        left: 40px;
    }

    .signature {

        position: relative;
        left: 800px;


    }

    .ss {
        position: relative;
        left: 780px;
        top: 100px;
        font-style: italic;
    }

    .img {
        width: 50px;
        position: relative;
        height: 50px;
        background-image: url("{{ asset('border') }}");
    }
</style>

<body>
    <div class="container custom-container">
        <div class="row">
            <div class="col-md-12">

                <h1 class="text-center tittle">Certificate of Compitation</h1>

                <p class="p">The Certificate To Proudly Presented To</p>



                <hr class="one">

                <h1 class="name">Congratulation: </h1>
                <h1 class="name1">{{ $mcqResult['candidate_name'] }}</h1>

                <p class="pra">Diligent student, has achieved commendable
                    results in the recent examination. With a total of 6
                    attempted questions, he has correctly answered @php echo $mcqResult['correct_answers'] @endphp questions,
                    while his incorrect responses amount to @php echo $mcqResult['wrong_answers'] @endphp as well.
                    This performance leads to an impressive overall
                    percentage of @php echo number_format($mcqResult['percentage_earned'], 2) @endphp%. His dedication to learning and his
                    commitment to academic excellence are truly praiseworthy.
                    It is with great pleasure that we award you
                    this certificate, acknowledging his remarkable
                    achievements and wishing him continued success in his
                    educational journey

                </p>

                <div class="img">

                </div>
                <p class="ss">{{ $mcqResult['candidate_name'] }}</p>
                <hr class="three">
                <p class="d">{{ $mcqResult['created_at']->format('d-m-Y') }}</p>
                <h3 class="date">Date</h3>
                <hr class="two">
                <h3 class="sig">Signature</h3>
                <!-- <p class="signature">dh</p> -->


            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
