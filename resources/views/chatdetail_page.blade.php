<!DOCTYPE html>
<html>

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
    .main-section small {
        font-size: 12px;
    }

    .main-section h3,
    .main-section h5 {
        margin: 0px;
    }

    .main-section {
        width: 960px;
        background-color: #fff;
        margin: auto;
    }

    .head-section {
        border-bottom: 1px solid #E6E6E6;
        clear: both;
        overflow: hidden;
        width: 100%;
    }

    .headLeft-section {
        width: calc(30% - 1px);
        float: left;
        border-right: 1px solid #E6E6E6;
    }

    .headLeft-sub {
        padding: 15px;
        text-align: center;
    }

    .headLeft-sub input {
        width: 60%;
        border-radius: 0px;
        border: 1px solid #E6E6E6;
        padding: 7px;
    }

    .headLeft-sub button {
        background: #009EF7;
        color: #fff;
        border: 1px solid #E6E6E6;
        padding: 7px 15px;
    }

    .headRight-section {
        width: 70%;
        float: left;
    }

    .headRight-sub {
        padding: 10px 15px 0px 15px;
    }

    .body-section {
        clear: both;
        overflow: hidden;
        width: 100%;
    }

    .left-section {
        width: calc(30% - 1px);
        float: left;
        height: 500px;
        border-right: 1px solid #E6E6E6;
        background-color: #FFF;
        z-index: 1;
        position: relative;
    }

    .left-section ul {
        padding: 0px;
        margin: 0px;
        list-style: none;
    }

    .left-section ul li {
        padding: 15px 0px;
        cursor: pointer;
    }

    .left-section ul li.active {
        background: #009EF7;
        color: #fff;
        position: relative;
    }

    .mCustomScrollBox,
    .mCSB_container {
        overflow: unset !important;
    }

    .left-section ul li.active .desc .time {
        color: #fff;
    }

    .left-section ul li.active:before {
        position: absolute;
        content: '';
        right: -10px;
        border: 5px solid #009EF7;
        top: 0px;
        bottom: 0px;
        border-radius: 0px 3px 3px 0px;
    }

    .left-section ul li.active:after {
        position: absolute;
        content: "";
        bottom: 0px;
        right: 0px;
        left: auto;
        width: 100%;
        top: 0px;
        -webkit-box-shadow: -8px 4px 10px #a1a1a1;
        -moz-box-shadow: -8px 4px 10px #a1a1a1;
        box-shadow: -8px 4px 10px #a1a1a1;
    }

    .left-section .chatList {
        overflow: hidden;
    }

    .left-section .chatList .img {
        width: 60px;
        float: left;
        text-align: center;
        position: relative;
    }

    .left-section .chatList .img img {
        width: 30px;
        border-radius: 50%;
    }

    .left-section .chatList .img i {
        position: absolute;
        font-size: 10px;
        color: #52E2A7;
        border: 1px solid #fff;
        border-radius: 50%;
        left: 10px;
    }

    .left-section .chatList .desc {
        width: calc(100% - 60px);
        float: left;
        position: relative;
    }

    .left-section .chatList .desc h5 {
        margin-top: 6px;
        line-height: 5px;
    }

    .left-section .chatList .desc .time {
        position: absolute;
        right: 15px;
        color: #c1c1c1;
    }

    .right-section {
        width: 70%;
        float: left;
        height: 500px;
        background-color: #F6F6F6;
        position: relative;
    }

    .message {
        height: calc(100% - 68px);
        font-family: sans-serif;
    }

    .message ul {
        padding: 0px;
        list-style: none;
        margin: 0px auto;
        width: 90%;
        overflow: hidden;
    }

    .message ul li {
        position: relative;
        width: 80%;
        padding: 15px 0px;
        clear: both;
    }

    .message ul li.msg-left {
        float: left;
    }

    .message ul li.msg-left img {
        position: absolute;
        width: 40px;
        bottom: 30px;
    }

    .message ul li.msg-left .msg-desc {
        margin-left: 70px;
        font-size: 12px;
        background: #E8E8E8;
        padding: 5px 10px;
        border-radius: 5px 5px 5px 0px;
        position: relative;
    }

    .message ul li.msg-left .msg-desc:before {
        position: absolute;
        content: '';
        border: 10px solid transparent;
        border-bottom-color: #E8E8E8;
        bottom: 0px;
        left: -10px;
    }

    .message ul li.msg-left small {
        float: right;
        color: #c1c1c1;
    }

    .message ul li.msg-right {
        float: right;
    }

    .message ul li.msg-right img {
        position: absolute;
        width: 40px;
        right: 0px;
        bottom: 30px;
    }

    .message ul li.msg-right .msg-desc {
        margin-right: 70px;
        font-size: 12px;
        background: #cce5ff;
        color: #004085;
        padding: 5px 10px;
        border-radius: 5px 5px 5px 0px;
        position: relative;
    }

    .message ul li.msg-right .msg-desc:before {
        position: absolute;
        content: '';
        border: 10px solid transparent;
        border-bottom-color: #cce5ff;
        bottom: 0px;
        right: -10px;
    }

    .message ul li.msg-right small {
        float: right;
        color: #c1c1c1;
        margin-right: 70px;
    }

    .message ul li.msg-day {
        border-top: 1px solid #EBEBEB;
        width: 100%;
        padding: 0px;
        margin: 15px 0px;
    }

    .message ul li.msg-day small {
        position: absolute;
        top: -10px;
        background: #F6F6F6;
        color: #c1c1c1;
        padding: 3px 10px;
        left: 50%;
        transform: translateX(-50%);
    }

    .right-section-bottom {
        background: #fff;
        width: 100%;
        padding: 15px;
        position: absolute;
        bottom: 0px;
        border-top: 1px solid #E6E6E6;
        text-align: center;
    }

    .right-section-bottom input {
        border: 0px;
        padding: 8px 5px;
        width: calc(100% - 150px);
    }

    .right-section-bottom .btn-send {
        border: 0px;
        padding: 8px 10px;
        float: right;
        margin-right: 30px;
        color: #009EF7;
        font-size: 18px;
        background: #fff;
        cursor: pointer;
    }

    .upload-btn {
        position: relative;
        overflow: hidden;
        display: inline-block;
        float: left;
    }

    .upload-btn .btn {
        border: 0px;
        padding: 8px 10px;
        color: #009EF7;
        font-size: 18px;
        background: #fff;
        cursor: pointer;
    }

    .upload-btn input[type=file] {
        font-size: 100px;
        position: absolute;
        left: 0;
        top: 0;
        opacity: 0;
    }

    .pro {
        border-radius: 15px;
        height: 40px;
    }
</style>

<body>

    @include('navbar')
    <br>
    <br>

    <div class="main-section">
        <div class="head-section">
            <div class="headLeft-section">
                <div class="headLeft-sub">
                    <input type="text" name="search" placeholder="Search...">
                    <button> <i class="fa fa-search"></i> </button>
                </div>
            </div>
            <div class="headRight-section">
                <div class="headRight-sub">
                    <div class="row">
                        <div class="col-md-1">
                            <img width="100%" class="mt-2 pro" src="{{asset('images/'.$all['image'])}}" alt="">
                        </div>
                        <div class="col-md-10">
                            <h3 class="mt-2">{{$all['firstname']}} {{$all['lastname']}}</h3>
                            @if($all['status']=="online")
                            <small>
                                <p style="margin-left: 20px;" class="text-success">{{$all['status']}}</p>
                            </small>
                            @elseif($all['status']=="offline")
                            <small>
                                <p style="margin-left: 20px;" class="text-black">{{ \Carbon\Carbon::parse($all['updated_at'])->format('h:i A') }}</p>
                            </small>
                            @endif




                        </div>
                        <div class="col-md-1 mt-2">
                            <a href="{{route('chatpage')}}" class="btn btn-danger">X</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="body-section">
            <div class="left-section mCustomScrollbar" data-mcs-theme="minimal-dark">
                <br>
                <ul>

                    @foreach($all_user as $data)

                    <a href="{{route('chatdetail',['id'=>$data['id']])}}">
                        <li>
                            <div class="chatList">
                                <div class="img">
                                    <img class="pro" src="{{ asset('images/' . $data['image']) }}">
                                </div>
                                <div class="desc">
                                    <small class="time"> @if($data['status']=="online")
                                        <small>
                                            <p style="margin-left: 20px;" class=" text-success">{{$all['status']}}</p>
                                        </small>
                                        @elseif($data['status']=="offline")
                                        <small>
                                            <p style="margin-left: 20px;" class="text-black">{{ \Carbon\Carbon::parse($all['updated_at'])->format('h:i A') }}</p>
                                        </small>
                                        @endif</small>
                                    <h5 class="mt-1">{{$data['firstname']}}{{$data['lastname']}}</h5>

                                    @if($lasted_chat)
                                   
                                    @php
                                    $messagePreview = substr($lasted_chat['Message'], 0, 20);
                                    @endphp
                                    <p class="mt-3">{{ $messagePreview }}...</p>
                                    
                                    @endif



                                </div>

                            </div>
                            <hr>
                        </li>
                    </a>
                    @endforeach


                </ul>
            </div>
            <div class="right-section">
                <div class="message mCustomScrollbar" data-mcs-theme="minimal-dark">
                    <ul>

                        <div class="row">
                            <div class="col-md-6">
                                <br>

                                @foreach($Opposite_chat as $opposite)

                                <li class="msg-left">
                                    <div class="msg-left-sub">
                                        <img class="pro" src="{{asset('images/'.$all['image'])}}">
                                        <div class="msg-desc">
                                            {{$opposite['Message']}}
                                        </div>
                                        <small>{{ \Carbon\Carbon::parse($opposite['updated_at'])->format('h:i A') }}</small>
                                    </div>

                                </li>
                                @endforeach

                            </div>
                            <div class="col-md-6">
                                @foreach($login_chat as $data)

                                <li class="msg-right">
                                    <div class="msg-left-sub">
                                        <img class="pro" src="{{asset('images/'.$loginuser_profile)}}">
                                        <div class="msg-desc">
                                            {{$data['Message']}}
                                        </div>
                                        <small>{{ \Carbon\Carbon::parse($data['updated_at'])->format('h:i A') }}</small>
                                    </div>

                                </li>
                                @endforeach
                            </div>

                        </div>




                    </ul>
                </div>
                <div class="right-section-bottom">
                    <form action="{{route('sendmessage')}}" method="post">
                        <div class="row">
                            @csrf
                           
                            <div class="col-md-8">
                                <input type="text" require name="msg" style="width: 100%;" class="form-control" name="" placeholder="Enter message Here" id="">
                            </div>
                            <input type="hidden" name="login_id" value="{{$loginuser['id']}}">
                            <input type="hidden" name="send_id" value="{{$all['id']}}">
                            <div class="col-md-4">
                                <input type="submit" class="btn btn-primary" value="Send">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


    @include('footer')
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <!-- custom scrollbar plugin -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.concat.min.js"></script>
</body>

</html>