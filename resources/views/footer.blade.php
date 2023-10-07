<footer class="footer bg-dark">
    <div class="footer__addr">

        <h1 class="footer__logo class-name text-white">Ilmkiduniya</h1>

        <h2 class="text-white">Contact</h2>
        <br>
        <address>


            <a class="footer__btn text-white" href="mailto:example@gmail.com"><i class="fab fa"></i>Email us: Admin123@gmail.com</a>

        </address>
    </div>



    <ul class="footer__nav">
        <li class="nav__item">
            <h2 class="nav__title text-white">Media</h2>
            <hr class="bg-white">

            <ul class="nav__ul">
                <li>
                    <a href="#"><i class="fab fa-facebook"> Ilmkiduniya</i></a>
                </li>

                <li>
                    <a href="#"><i class="fab fa-twitter"> Ilmkiduniya</i></a>

                </li>

                <li>
                    <a href="#"><i class="fab fa-whatsapp"> 03112805656</i></a>

                </li>
                <li>
                    <a href="#"><i class="fab fa-linkedin"> Ilmkiduniya</i></a>

                </li>
            </ul>
        </li>


        <li class="nav__item">
            <h2 class="nav__title text-white">Technology</h2>
            <hr class="bg-white">

            <ul class="nav__ul">

                <li>
                    <a href="#">SEO</a>
                </li>

                <li>
                    <a href="#">Laravel PHP framework</a>
                </li>

                <li>
                    <a href="#">Angular Javascript Framework</a>
                </li>
                <li>
                    <a href="#">Python</a>
                </li>
                <li>
                    <a href="#">MySQL Database</a>
                </li>
                <li>
                    <a href="#">React JS</a>
                </li>
            </ul>
        </li>

        <!-- Add more nav items here if needed -->

        <li class="nav__item">
            <h2 class="nav__title text-white text-bold">Site Map</h2>
            <hr class="bg-white">

            <ul class="nav__ul">
                <li>
                    <a href="{{ route('indexpage') }}">Home</a>
                </li>

                <li>
                    <a href="{{ route('aboutpage') }}">About</a>
                </li>
                <li>
                    <a href="{{ route('coursespage') }}">Courses</a>
                </li>

                <li>
                    <a href="{{ route('contactpage') }}">Contact</a>
                </li>
            </ul>
        </li>
        <li class="nav__item">
            <h2 class="nav__title text-white text-bold">Features</h2>
            <hr class="bg-white">


            <ul class="nav__ul">
                <li>
                    <a href="{{ route('coursespage') }}">Free courses</a>
                </li>

                <li>
                    <a href="{{ route('view_mcqs') }}">Get Certificate</a>
                </li>

                <li>
                    <a href="{{ route('cvmakerpage') }}">Cv Macker</a>
                </li>
                <li>
                    <a href="{{ route('userdailytask') }}">Daily Home Task</a>
                </li>
                <li>
                    <a href="{{ route('chatpage') }}">Chatting</a>
                </li>
                <li>
                    <a href="{{ route('bookslab') }}">Book Library</a>
                </li>
            </ul>
        </li>
    </ul>

    <!-- Add more content here if needed -->

    <div class="legal">
        <p>&copy; Created in 2023 by Laravel </p>

        <div class="legal__links">
            <span>Made with <span class="heart">♥</span> Aptech Metro Star Gate</span>
        </div>
    </div>
</footer>
