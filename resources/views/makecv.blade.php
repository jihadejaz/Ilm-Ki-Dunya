<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Name - Curriculum Vitae</title>
    <!-- Include Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        @page {
            size: A4;
            margin: 0;
        }

        body {
            font-family: serif;
            margin: 0;
            padding: 0.2cm;
            /* Reduced the padding to 0.2cm */
        }

        main {
            max-width: 20cm;
            margin: auto;
            background-color: #f9f9f9;
            padding: 0.3cm;
            /* Reduced the padding to 0.2cm */
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        header {
            background-color: #0c2238;
            color: #fff;
            text-align: center;
            padding: 0.2cm;
            /* Reduced the padding to 0.2cm */
            border-radius: 0;
        }

        header h1 {
            font-size: 1.5rem;
            /* Reduced the font size for header to 1.5rem */
            margin-bottom: 0;
        }

        header p {
            font-size: 1rem;
            /* Reduced the font size for header to 1rem */
            margin-top: 0;
        }

        hr {
            border: none;
            height: 1px;
            background-color: #ddd;
            margin: 0.2cm 0;
            /* Reduced the margin to 0.2cm */
        }

        section {
            padding: 0.2cm 0;
            /* Reduced the padding to 0.2cm */
        }

        .section-title {
            font-size: 1.2rem;
            /* Reduced the font size for section titles to 1.2rem */
            font-weight: bold;
            margin-bottom: 0.2cm;
            /* Reduced the margin to 0.2cm */
        }

        .bg-info,
        .bg-danger {
            padding: 0.2cm;
            /* Reduced the padding to 0.2cm */
            border-radius: 8px;
            color: #000000;
        }

        /* .bg-info {
            background-color: #17a2b8;
        } */

        .bg-danger {
            background-color: #dc3545;
        }

        ul {
            list-style: none;
            padding: 0;
        }

        ul li {
            margin-bottom: 0.1cm;
            /* Reduced the margin to 0.1cm */
            padding-left: 0.5cm;
            /* Reduced the padding to 0.5cm */
            position: relative;
        }

        ul li::before {
            content: '\2022';
            position: absolute;
            left: 0;
            color: #007bff;
        }
    </style>
</head>

<body>
    <main>
        <header class="bg-primary text-white text-center py-2">
            <h1>{{ $data['firstname'] }}</h1>
            <p>Job Title / {{ $data['profession'] }}</p>
        </header>
        <hr>
        <section>
            <h2 class="section-title">Information</h2>
            <div class="container bg-info">
                <p>Email: {{ $data['email'] }}</p>
                <p>Religion: {{ $data['religion'] }}</p>
                <p>Phone: {{ $data['number'] }}</p>
                <p>Address: {{ $data['address'] }}</p>
                <p>City: {{ $data['city'] }}</p>
                {{-- <p>Portfolio Link:</p> --}}
                <!-- Add other contact information you want to include -->
            </div>
        </section>
        <hr>
        <section>
            <h2 class="section-title">Hobbies</h2>
            <p>
                {{ $data['about'] }}
            </p>
        </section>
        <hr>
        <section>
            <h2 class="section-title">Education</h2>
            <p>{{ $data['education'] }}</p>
            <!-- Add more education entries if applicable -->
        </section>
        <hr>
        <section>
            <h2 class="section-title">Work Experience</h2>
            <ul>
                <li>{{ $data['experience'] }} Years</li>
                <li>Work Experience 1: {{ $data['information'] }}</li>
                <li>Work Experience 2: {{ $data['information2'] }}</li>
                <!-- Add more job responsibilities/accomplishments as needed -->
            </ul>
            <!-- Add more work experience entries if applicable -->
        </section>
        <hr>
        <section>
            <h2 class="section-title">Skills</h2>
            <ul>
                @if ($data['skill1'])
                    <li>{{ $data['skill1'] }}</li>
                @endif

                @if ($data['skill2'])
                    <li>{{ $data['skill2'] }}</li>
                @endif

                @if ($data['skill3'])
                    <li>{{ $data['skill3'] }}</li>
                @endif

                @if ($data['skill4'])
                    <li>{{ $data['skill4'] }}</li>
                @endif
            </ul>

        </section>
    </main>
</body>

</html>
