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
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Tangerine">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Sofia">
    <title>Mine</title>

    <style>
        html,
        body,
        section {
            block-size: 100%;
        }

        #section1 {

            background-image: url({{ url('images/background/background5.jpg') }});
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;

        }

        #section3 {
            background-image: url({{ url('images/background/background4.png') }});
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .sofia {
            font-family: "Sofia", sans-serif;
            font-size: 40px;
            text-shadow: 3px 3px 3px #ababab;
        }

        .tangerine {
            font-family: 'Tangerine', serif;
        }

        html {
            scroll-snap-type: y mandatory;
        }

        section {
            scroll-snap-align: start;
            scroll-snap-stop: always;

            display: flex;
            align-items: center;
            justify-content: center;
        }

        section:nth-of-type(even) {
            color: #FDFDFD;
            background: #EE8B8B;
        }

        section:nth-of-type(odd) {
            color: #1E1E1E;
            background: #FDFDFD;
        }

        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            font-size: 4rem;
        }

        h2 {
            letter-spacing: 2px;
        }

        .card1 {
            color: #FDFDFD;
            background: #EE8B8B;
            border-radius: 25px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }

        .card2 {
            color: #62656A;
            background: #FDFDFD;
            border-radius: 25px;
            box-shadow: rgba(0, 0, 0, 0.35) 0px 5px 15px;
        }
    </style>
</head>

<body>
    <section class="p-5" id="section1">
        <div class="card card1">
            <div class="card-body p-5">
                <h2 class="sofia">Assalamualaikum..
                    <img src="{{ asset('emoticon/happy.png') }}" class="ml-3" width="40px" alt="emot">
                </h2>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="card card2">
            <div class="card-body p-5">
                <h2>Selamat ulang tahun yang ke-22 sayang
                </h2>
            </div>
        </div>
    </section>
    <section>
        <div class="card card1">
            <div class="card-body p-5">
                <h2>Ini pertama kalinya abg ucapin ini ke ayang</h2>
            </div>
        </div>
    </section>
    <section class="p-5 text-center">
        <div class="card card2">
            <div class="card-body p-5">
                <h2>Tapi mulai sekarang, setiap tahun bakal jadi tradisi kita ya</h2>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="card card1">
            <div class="card-body p-5">
                <h2>Meskipun abang ga selalu bisa ada di samping ayang tiap hari</h2>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="card card2">
            <div class="card-body p-5">
                <h2>Tapi abang selalu nyimpan cerita-cerita ayang di hati abang</h2>
            </div>
        </div>
    </section>
    <section class="p-5">
        <div class="card card1">
            <div class="card-body p-5">
                <h2>Selamat ulang tahun celengan rindu nya abang</h2>
            </div>
        </div>
    </section>
    <section class="p-5 text-left">
        <div class="card card2">
            <div class="card-body p-5">
                <h2>Semoga tahun ini penuh kebahagiaan buat ayang</h2>
            </div>
        </div>
    </section>
    <section class="p-5" id="section3">
        <div class="card card1">
            <div class="card-body p-5">
                <h2>Ayang tulis disini yaa harapannya..<br>
                    <button id="lanjut3" type="button" class="mt-3 btn btn-outline-light btn-lg"
                        onclick="lanjut3()"><b>Okeey
                            <i class="fa-solid fa-arrow-right"></i></b></button>
                </h2>
            </div>
        </div>
    </section>
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
        function lanjut3() {
            window.location.href = "{{ route('nurrahma-page4') }}";
        }
    </script>
</body>

</html>
