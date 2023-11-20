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

    <script src="https://cdn.jsdelivr.net/combine/npm/chart.js@3.7.1,npm/sweetalert2@11.7.0"></script>

    <title>Mine</title>

    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            font-family: sans-serif;
        }

        h1 {
            color: coral;
        }

        .grid-container {
            columns: 5 200px;
            column-gap: 1.5rem;
            width: 90%;
            margin: 0 auto;
        }

        .grid-container div {
            width: 150px;
            margin: 0 1.5rem 1.5rem 0;
            display: inline-block;
            width: 100%;
            border: solid 2px black;
            padding: 5px;
            box-shadow: 5px 5px 5px rgba(0, 0, 0, 0.5);
            border-radius: 5px;
            transition: all 0.25s ease-in-out;
        }

        .grid-container div:hover img {
            filter: grayscale(0);
        }

        .grid-container div:hover {
            border-color: coral;
        }

        .grid-container div img {
            width: 100%;
            filter: grayscale(100%);
            border-radius: 5px;
            transition: all 0.25s ease-in-out;
        }

        .grid-container div p {
            margin: 5px 0;
            padding: 0;
            text-align: center;
            font-style: italic;
        }
    </style>
</head>

<body>
    <div class="row">
        <div class="col-md-12 text-center">
            <h4 class="mt-3 mb-3">Tekan salah satu foto ya yaang..</h4>
            <div class="grid-container">
                <div>
                    <img class='grid-item grid-item-1' src='{{ asset('images/nurrahma/36.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-2' src='{{ asset('images/nurrahma/19.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-3' src='{{ asset('images/nurrahma/21.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-4' src='{{ asset('images/nurrahma/4.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-5' src='{{ asset('images/nurrahma/33.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-6' src='{{ asset('images/nurrahma/9.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-7' src='{{ asset('images/nurrahma/42.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-8' src='{{ asset('images/nurrahma/11.jpeg') }}' alt=''
                        onclick="right()">
                </div>
                <div>
                    <img class='grid-item grid-item-9' src='{{ asset('images/nurrahma/12.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
                <div>
                    <img class='grid-item grid-item-10' src='{{ asset('images/nurrahma/15.jpeg') }}' alt=''
                        onclick="wrong()">
                </div>
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
        function right() {
            Swal.fire({
                icon: 'success',
                title: 'Yeayy',
                text: 'Tekan lanjut ya',
                confirmButtonText: 'Lanjut'
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    window.location.href = "{{ route('nurrahma-page3') }}";
                }
            })
        }

        function wrong() {
            Swal.fire({
                title: 'Oops...',
                text: 'Bukan foto ini yaang, coba lagi yaa',
                icon: 'error',
                confirmButtonText: 'Cari Lagi'
            })
        }
    </script>
</body>

</html>
