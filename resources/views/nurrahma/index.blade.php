<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" rel="stylesheet">

    <title>Mine</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Covered+By+Your+Grace);

        body {

            font-family: 'Exo', sans-serif;
            background: #1E1E1E;
            height: 100vh;
        }

        #days {
            font-size: 200px;
            color: #db4844;
        }

        #hours {
            font-size: 150px;
            color: #f07c22;
        }

        #minutes {
            font-size: 100px;
            color: #f6da74;
        }

        #seconds {
            font-size: 50px;
            color: #abcd58;
        }

        span {
            display: block;
            font-size: 20px;
        }

        html {
            height: 100%;
        }

        #timer {
            font-family: 'Covered By Your Grace', cursive;
            width: 100%;
            min-height: 100%;
            margin: auto;
        }

        .time {
            display: inline-block;
            line-height: 1;
            padding: 20px;
            font-size: 40px;
            text-align: center;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        button {
            letter-spacing: 2px;
        }

        h1 {
            font-family: 'Covered By Your Grace', cursive;
            letter-spacing: 5px;
            font-size: 50px;
        }

        p {
            font-family: 'Covered By Your Grace', cursive;
            letter-spacing: 3px;
            font-size: 20px;
            color: #fdfdfd;
        }

        @import url('https://fonts.googleapis.com/css?family=Exo:400,700');

        * {
            margin: 0px;
            padding: 0px;
        }

        .context {
            width: 100%;
            position: absolute;
            top: 30vh;

        }

        .context h1 {
            text-align: center;
            color: #fff;
            font-size: 50px;
        }


        .area {
            /* background: #4e54c8; */
            /* background: -webkit-linear-gradient(to left, #8f94fb, #4e54c8); */
            width: 100%;
            height: 100vh;
        }

        .circles {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .circles li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            animation: animate 25s linear infinite;
            bottom: -150px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .circles .color1 {
            background: #db4844;
        }

        .circles .color2 {
            background: #f07c22;
        }

        .circles .color3 {
            background: #f6da74;
        }

        .circles .color4 {
            background: #abcd58;
        }

        .circles li:nth-child(1) {
            left: 25%;
            width: 80px;
            height: 80px;
            animation-delay: 0s;
        }


        .circles li:nth-child(2) {
            left: 10%;
            width: 20px;
            height: 20px;
            animation-delay: 2s;
            animation-duration: 12s;
        }

        .circles li:nth-child(3) {
            left: 70%;
            width: 20px;
            height: 20px;
            animation-delay: 4s;
        }

        .circles li:nth-child(4) {
            left: 40%;
            width: 60px;
            height: 60px;
            animation-delay: 0s;
            animation-duration: 18s;
        }

        .circles li:nth-child(5) {
            left: 65%;
            width: 20px;
            height: 20px;
            animation-delay: 0s;
        }

        .circles li:nth-child(6) {
            left: 75%;
            width: 110px;
            height: 110px;
            animation-delay: 3s;
        }

        .circles li:nth-child(7) {
            left: 35%;
            width: 150px;
            height: 150px;
            animation-delay: 7s;
        }

        .circles li:nth-child(8) {
            left: 50%;
            width: 25px;
            height: 25px;
            animation-delay: 15s;
            animation-duration: 45s;
        }

        .circles li:nth-child(9) {
            left: 20%;
            width: 15px;
            height: 15px;
            animation-delay: 2s;
            animation-duration: 35s;
        }

        .circles li:nth-child(10) {
            left: 85%;
            width: 150px;
            height: 150px;
            animation-delay: 0s;
            animation-duration: 11s;
        }



        @keyframes animate {

            0% {
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }

            100% {
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }

        }
    </style>
</head>

<body>
    <div id="page1">

        <div class="area">
            <ul class="circles">
                <li class="color1"></li>
                <li class="color2"></li>
                <li class="color3"></li>
                <li class="color4"></li>
                <li class="color1"></li>
                <li class="color2"></li>
                <li class="color3"></li>
                <li class="color4"></li>
                <li class="color1"></li>
                <li class="color2"></li>
                <li class="color3"></li>
                <li class="color4"></li>
            </ul>
        </div>


        <div class="context">
            <div id="timer" class="time">
                <div id="days" class="time"></div>
                <div id="hours" class="time"></div>
                <div id="minutes" class="time"></div>
                <div id="seconds" class="time"></div>
            </div>
            <h1 id="text1" style="color: #EE8B8B; display: none;">Only for you</h1>
            <br>
            <div class="d-flex align-items-center justify-content-center">
                <p id="text2" class="float-left mr-2" style="display: none;">Tekan balonnya yaang... </p>
                <img id="emot1" src="{{ asset('emoticon/kiss1.png') }}" class="float-left mb-3" width="25px"
                    alt="emot1" style="display: none;">
                <img id="emot2" src="{{ asset('emoticon/smile1.png') }}" class="float-left mb-3" width="25px"
                    alt="emot2" style="display: none;">
                <img id="emot3" src="{{ asset('emoticon/tongue1.png') }}" class="float-left mb-3" width="25px"
                    alt="emot3"style="display: none;">
            </div>
            <div class="clearfix"></div>

            <div class="d-flex align-items-center justify-content-center">
                <button id="lanjut1" style="display: none;" type="button" class="btn btn-link btn-md p-3"
                    onclick="lanjut1()">
                    <img id="emot3" src="{{ asset('images/icon/2.png') }}" width="100px" alt="emot3">
                </button>
                <button id="lanjut2" style="display: none;" type="button" class="btn btn-link btn-md p-3"
                    onclick="lanjut2()">
                    <img id="emot3" src="{{ asset('images/icon/21.png') }}" width="100px" alt="emot3">
                </button>
                <button id="lanjut3" style="display: none;" type="button" class="btn btn-link btn-md p-3"
                    onclick="lanjut3()">
                    <img id="emot3" src="{{ asset('images/icon/22.png') }}" width="100px" alt="emot3">
                </button>
            </div>
        </div>

    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
    <!-- Bootstrap core JavaScript-->

    <script>
        // Set the date we're counting down to

        var tanggal_waktu = new Date("2023-01-25 09:45:00").getTime();

        // Update the count down every 1 second
        var x = setInterval(function() {

            // Get todays date and time
            var now = new Date().getTime();

            // Find the distance between now and the count down date
            var distance = tanggal_waktu - now;

            // Time calculations for days, hours, minutes and seconds
            var days = Math.floor(distance / (1000 * 60 * 60 * 24));
            var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
            var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
            var seconds = Math.floor((distance % (1000 * 60)) / 1000);

            // Output the result in an element with id="demo"
            document.getElementById("days").innerHTML = days;
            document.getElementById("hours").innerHTML = hours;
            document.getElementById("minutes").innerHTML = minutes;
            document.getElementById("seconds").innerHTML = seconds;

            // If the count down is over, write some text 
            if (distance < 0) {
                clearInterval(x);
                document.getElementById("timer").style.display = 'none';
                document.getElementById("text1").style.display = 'block';
                document.getElementById("lanjut1").style.display = 'block';
                document.getElementById("text2").style.display = 'block';
                document.getElementById("emot1").style.display = 'block';
            }
        }, 1000);


        function lanjut1() {
            console.log("test");
            document.getElementById("lanjut1").style.display = 'none';
            document.getElementById("lanjut2").style.display = 'block';
            document.getElementById("text2").innerHTML = "Tekan lilin yaang...";
            document.getElementById("emot1").style.display = 'none';
            document.getElementById("emot2").style.display = 'block';
        }

        function lanjut2() {
            document.getElementById("lanjut2").style.display = 'none';
            document.getElementById("lanjut3").style.display = 'block';
            document.getElementById("text2").innerHTML = "Tekan kue nya hihi";
            document.getElementById("emot2").style.display = 'none';
            document.getElementById("emot3").style.display = 'block';
        }

        function lanjut3() {
            window.location.href = "{{ route('nurrahma-page2') }}";
        }
    </script>
</body>

</html>
