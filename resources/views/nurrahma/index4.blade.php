<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



    <script src="https://cdn.jsdelivr.net/combine/npm/chart.js@3.7.1,npm/sweetalert2@11.7.0"></script>
    <meta name="csrf-token" content="{{ csrf_token() }}" />
    <title>Mine</title>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Dancing+Script:400,700);

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            padding: 0;
            background-color: #c8e7d8;
            color: #4e5e72;
            text-align: center;
            font-family: monospace;
            overflow: hidden;
            height: 100%;
        }

        h1,
        p {
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 2rem;
            font-family: 'Dancing Script';
        }

        small {
            display: block;
            padding: 1rem 0;
            font-size: 0.8rem;
            transition: opacity 0.33s;
        }

        textarea,
        input,
        button {
            line-height: 1.5rem;
            border: 0;
            outline: none;
            font-family: inherit;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
        }

        textarea,
        input {
            color: #4e5e72;
            background-color: transparent;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgb(229, 225, 187)' x='0' y='23' width='10' height='1'/></svg>");
        }

        textarea {
            width: 100%;
            height: 8rem;
            resize: none;
        }

        input {
            width: 50%;
            margin-bottom: 1rem;
        }

        input[type=text]:invalid,
        input [type=email]:invalid {
            box-shadow: none;
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(240, 132, 114, 0.5)' x='0' y='23' width='10' height='1'/></svg>");
        }

        button {
            padding: 0.5rem 1rem;
            border-radius: 0.25rem;
            background-color: rgba(78, 94, 114, 0.9);
            color: white;
            font-size: 1rem;
            transition: background-color 0.2s;
        }

        button:hover,
        button :focus {
            outline: none;
            background-color: rgba(78, 94, 114, 1);
        }

        input[type=text]:focus,
        input[type=email]:focus,
        textarea:focus {
            background-image: url("data:image/svg+xml;utf8,<svg xmlns='http://www.w3.org/2000/svg' width='10' height='24'><rect fill='rgba(78, 94, 114, 0.3)' x='0' y='23' width='10' height='1'/></svg>");
            outline: none;
        }

        .wrapper {
            width: 35rem;
            background-color: white;
        }

        .letter {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            width: 30rem;
            margin: auto;
            perspective: 60rem;
        }

        .side {
            height: 12rem;
            background-color: #fcfcf8;
            outline: 1px solid transparent;
        }

        .side:nth-of-type(1) {
            padding: 2rem 2rem 0;
            border-radius: 1rem 1rem 0 0;
            box-shadow: inset 0 0.75rem 2rem rgba(229, 225, 187, 0.5);
        }

        .side.side:nth-of-type(2) {
            padding: 2rem;
            border-radius: 0 0 1rem 1rem;
            box-shadow: 0 0.3rem 0.3rem rgba(0, 0, 0, 0.05), inset 0 -0.57rem 2rem rgba(229, 225, 187, 0.5);
            text-align: right;
        }

        .envelope {
            position: absolute;
            left: 0;
            right: 0;
            top: 0;
            margin: auto;
        }

        .envelope.front {
            width: 10rem;
            height: 6rem;
            border-radius: 0 0 1rem 1rem;
            overflow: hidden;
            z-index: 9999;
            opacity: 0;
        }

        .envelope.front::before,
        .envelope.front::after {
            position: absolute;
            display: block;
            width: 12rem;
            height: 6rem;
            background-color: #e9dc9d;
            transform: rotate(30deg);
            transform-origin: 0 0;
            box-shadow: 0 0 1rem rgba(0, 0, 0, 0.1);
            content: '';
        }

        .envelope.front::after {
            right: 0;
            transform: rotate(-30deg);
            transform-origin: 100% 0;
        }

        .envelope.back {
            top: -4rem;
            width: 10rem;
            height: 10rem;
            overflow: hidden;
            z-index: -9998;
            opacity: 0;
            transform: translateY(-6rem);
        }

        .envelope.back::before {
            display: block;
            width: 10rem;
            height: 10rem;
            background-color: #e9dc9d;
            border-radius: 1rem;
            content: '';
            transform: scaleY(0.6) rotate(45deg)
        }

        .result-message {
            opacity: 0;
            transition: all 0.3s 2s;
            transform: translateY(9rem);
            z-index: -9999;
        }

        .sent .letter {
            -webkit-animation: scaleLetter 1s forwards ease-in
                /*,
               pushLetter 0.5s 1.33s forwards ease-out*/
            ;
            animation: scaleLetter 1s forwards ease-in
                /*,
               pushLetter 0.5s 1.33s forwards ease-out*/
            ;
        }

        .sent .side:nth-of-type(1) {
            transform-origin: 0 100%;
            -webkit-animation: closeLetter 0.66s forwards ease-in;
            animation: closeLetter 0.66s forwards ease-in;
        }

        .sent .side:nth-of-type(1) h1,
        .sent .side:nth-of-type(1) textarea {
            -webkit-animation: fadeOutText 0.66s forwards linear;
            animation: fadeOutText 0.66s forwards linear;
        }

        .sent button {
            background-color: rgba(78, 94, 114, 0.2);
        }

        .sent .envelope {
            -webkit-animation: fadeInEnvelope 0.5s 1.33s forwards ease-out;
            animation: fadeInEnvelope 0.5s 1.33s forwards ease-out;
        }

        .sent .result-message {
            opacity: 1;
            transform: translateY(12rem);
        }

        .sent small {
            opacity: 0;
        }

        .centered {
            position: absolute;
            left: 0;
            right: 0;
            margin: 1rem auto;
        }

        @-webkit-keyframes closeLetter {
            50% {
                transform: rotateX(-90deg);
            }

            100% {
                transform: rotateX(-180deg);
            }
        }

        @keyframes closeLetter {
            50% {
                transform: rotateX(-90deg);
            }

            100% {
                transform: rotateX(-180deg);
            }
        }

        @-webkit-keyframes fadeOutText {
            49% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @keyframes fadeOutText {
            49% {
                opacity: 1;
            }

            50% {
                opacity: 0;
            }

            100% {
                opacity: 0;
            }
        }

        @-webkit-keyframes fadeInEnvelope {
            0% {
                opacity: 0;
                transform: translateY(8rem);
            }

            /*90% {opacity: 1; transform: translateY(4rem);}*/
            100% {
                opacity: 1;
                transform: translateY(4.5rem);
            }
        }

        @keyframes fadeInEnvelope {
            0% {
                opacity: 0;
                transform: translateY(8rem);
            }

            /*90% {opacity: 1; transform: translateY(4rem);}*/
            100% {
                opacity: 1;
                transform: translateY(4.5rem);
            }
        }

        @-webkit-keyframes scaleLetter {
            66% {
                transform: translateY(-8rem) scale(0.5, 0.5);
            }

            75% {
                transform: translateY(-8rem) scale(0.5, 0.5);
            }

            90% {
                transform: translateY(-8rem) scale(0.3, 0.5);
            }

            97% {
                transform: translateY(-8rem) scale(0.33, 0.5);
            }

            100% {
                transform: translateY(-8rem) scale(0.3, 0.5);
            }
        }

        @keyframes scaleLetter {
            66% {
                transform: translateY(-8rem) scale(0.5, 0.5);
            }

            75% {
                transform: translateY(-8rem) scale(0.5, 0.5);
            }

            90% {
                transform: translateY(-8rem) scale(0.3, 0.5);
            }

            97% {
                transform: translateY(-8rem) scale(0.33, 0.5);
            }

            100% {
                transform: translateY(-8rem) scale(0.3, 0.5);
            }
        }

        /*
@keyframes pushLetter {
  0% {transform: translateY(-8rem) scale(0.3, 0.5);}
  50% {transform: translateY(-8rem) scale(0.3, 0.5);}
  90% {transform: translateY(-8.5rem) scale(0.3, 0.5);}
  100% {transform: translateY(-8rem) scale(0.3, 0.5);}
}
*/
    </style>
</head>

<body>
    <small class="mt-5"></small>
    <div class="wrapper centered">
        <article class="letter">
            <div class="side">
                <h1>Tulis harapannya di sini ya</h1>
                <br>
                <p>
                    <textarea name="alamat" placeholder="Harapannya apa ?"></textarea>
                </p>
            </div>
            <div class="side">
                <p>
                    <input name="nama" type="text" placeholder="Nama Lengkap" value="Kesayangan Abang : "
                        readonly>
                </p>
                <p>
                    <input name="nomorhp" type="text" placeholder="-" value="Nurrahma" readonly>
                </p>
                <p>
                    <button type="button" id="sendLetter" onclick="send()">Lanjut</button>
                </p>
            </div>
        </article>
        <div class="envelope front"></div>
        <div class="envelope back"></div>
    </div>
    <p class="result-message centered">Aamiin..</p>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>

    <script>
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        function send() {
            var alamat = $("textarea[name=alamat]").val();
            var nama = $("input[name=nama]").val();
            var nomorhp = $("input[name=nomorhp]").val();
            //  console.log(alamat);

            if (alamat == null || alamat == '') {
                Swal.fire({
                    title: 'Oops...',
                    text: 'Harapannya diisi Sayang !',
                    icon: 'error',
                    confirmButtonText: 'Ok'
                })
            } else {
                document.body.classList.add("sent");
                $.ajax({
                    type: 'POST',
                    url: "{{ route('save-alamat') }}",
                    data: {
                        alamat: alamat,
                        nama: nama,
                        nomorhp: nomorhp
                    },
                    success: function(data) {
                        // alert(data.success);
                        setTimeout(() => {
                            window.location.href = "{{ route('nurrahma-page5') }}";
                        }, 5000);
                    }
                });
            }
        }
    </script>
</body>

</html>
