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

        .sofia {
            font-family: "Sofia", sans-serif;
            font-size: 40px;
            text-shadow: 1px 1px 1px #ababab;
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
            color: white;
            background: #EE8B8B;
        }

        section:nth-of-type(odd) {
            color: white;
            background: black;
        }

        body {
            margin: 0;
            font-family: system-ui, sans-serif;
            font-size: 4rem;
        }

        h2 {
            letter-spacing: 2px;
        }

        //----
        html,
        body {
            height: 100%;
        }

        body {
            background: url(https://i.pinimg.com/originals/44/6e/3b/446e3b79395a287ca32f7977dd83b290.jpg);
            background-size: cover;
        }

        .firefly {
            position: fixed;
            left: 50%;
            top: 50%;
            width: 0.4vw;
            height: 0.4vw;
            margin: -0.2vw 0 0 9.8vw;
            animation: ease 200s alternate infinite;
            pointer-events: none;
        }

        .firefly::before,
        .firefly::after {
            content: "";
            position: absolute;
            width: 100%;
            height: 100%;
            border-radius: 50%;
            transform-origin: -10vw;
        }

        .firefly::before {
            background: black;
            opacity: 0.4;
            animation: drift ease alternate infinite;
        }

        .firefly::after {
            background: white;
            opacity: 0;
            box-shadow: 0 0 0vw 0vw yellow;
            animation: drift ease alternate infinite, flash ease infinite;
        }

        .firefly:nth-child(1) {
            animation-name: move1;
        }

        .firefly:nth-child(1)::before {
            animation-duration: 18s;
        }

        .firefly:nth-child(1)::after {
            animation-duration: 18s, 9396ms;
            animation-delay: 0ms, 6458ms;
        }

        @keyframes move1 {
            0% {
                transform: translateX(-33vw) translateY(27vh) scale(0.95);
            }

            5.2631578947% {
                transform: translateX(10vw) translateY(41vh) scale(0.36);
            }

            10.5263157895% {
                transform: translateX(10vw) translateY(40vh) scale(0.45);
            }

            15.7894736842% {
                transform: translateX(-41vw) translateY(-30vh) scale(0.72);
            }

            21.0526315789% {
                transform: translateX(44vw) translateY(-37vh) scale(0.47);
            }

            26.3157894737% {
                transform: translateX(1vw) translateY(0vh) scale(0.92);
            }

            31.5789473684% {
                transform: translateX(-36vw) translateY(23vh) scale(0.6);
            }

            36.8421052632% {
                transform: translateX(-9vw) translateY(6vh) scale(0.69);
            }

            42.1052631579% {
                transform: translateX(-5vw) translateY(31vh) scale(0.84);
            }

            47.3684210526% {
                transform: translateX(-40vw) translateY(-2vh) scale(0.58);
            }

            52.6315789474% {
                transform: translateX(20vw) translateY(37vh) scale(0.75);
            }

            57.8947368421% {
                transform: translateX(31vw) translateY(-30vh) scale(0.95);
            }

            63.1578947368% {
                transform: translateX(44vw) translateY(-28vh) scale(0.54);
            }

            68.4210526316% {
                transform: translateX(-27vw) translateY(-39vh) scale(0.89);
            }

            73.6842105263% {
                transform: translateX(-24vw) translateY(-36vh) scale(0.26);
            }

            78.9473684211% {
                transform: translateX(50vw) translateY(28vh) scale(0.42);
            }

            84.2105263158% {
                transform: translateX(-21vw) translateY(-21vh) scale(0.62);
            }

            89.4736842105% {
                transform: translateX(-33vw) translateY(-6vh) scale(0.9);
            }

            94.7368421053% {
                transform: translateX(47vw) translateY(-26vh) scale(0.96);
            }

            100% {
                transform: translateX(-2vw) translateY(27vh) scale(0.53);
            }
        }

        .firefly:nth-child(2) {
            animation-name: move2;
        }

        .firefly:nth-child(2)::before {
            animation-duration: 10s;
        }

        .firefly:nth-child(2)::after {
            animation-duration: 10s, 5084ms;
            animation-delay: 0ms, 6633ms;
        }

        @keyframes move2 {
            0% {
                transform: translateX(41vw) translateY(9vh) scale(0.71);
            }

            4.7619047619% {
                transform: translateX(-16vw) translateY(39vh) scale(0.67);
            }

            9.5238095238% {
                transform: translateX(-29vw) translateY(-32vh) scale(0.48);
            }

            14.2857142857% {
                transform: translateX(18vw) translateY(-18vh) scale(0.43);
            }

            19.0476190476% {
                transform: translateX(30vw) translateY(12vh) scale(0.92);
            }

            23.8095238095% {
                transform: translateX(22vw) translateY(-33vh) scale(0.95);
            }

            28.5714285714% {
                transform: translateX(-7vw) translateY(43vh) scale(0.87);
            }

            33.3333333333% {
                transform: translateX(-12vw) translateY(15vh) scale(0.63);
            }

            38.0952380952% {
                transform: translateX(42vw) translateY(25vh) scale(0.79);
            }

            42.8571428571% {
                transform: translateX(-1vw) translateY(-48vh) scale(0.59);
            }

            47.619047619% {
                transform: translateX(-6vw) translateY(-13vh) scale(0.89);
            }

            52.380952381% {
                transform: translateX(37vw) translateY(32vh) scale(0.82);
            }

            57.1428571429% {
                transform: translateX(-45vw) translateY(5vh) scale(0.63);
            }

            61.9047619048% {
                transform: translateX(28vw) translateY(-43vh) scale(0.33);
            }

            66.6666666667% {
                transform: translateX(-15vw) translateY(41vh) scale(0.38);
            }

            71.4285714286% {
                transform: translateX(33vw) translateY(15vh) scale(0.73);
            }

            76.1904761905% {
                transform: translateX(50vw) translateY(15vh) scale(0.66);
            }

            80.9523809524% {
                transform: translateX(34vw) translateY(-49vh) scale(0.9);
            }

            85.7142857143% {
                transform: translateX(-26vw) translateY(-27vh) scale(0.34);
            }

            90.4761904762% {
                transform: translateX(-25vw) translateY(-39vh) scale(0.94);
            }

            95.2380952381% {
                transform: translateX(-33vw) translateY(32vh) scale(0.34);
            }

            100% {
                transform: translateX(33vw) translateY(-11vh) scale(0.81);
            }
        }

        .firefly:nth-child(3) {
            animation-name: move3;
        }

        .firefly:nth-child(3)::before {
            animation-duration: 13s;
        }

        .firefly:nth-child(3)::after {
            animation-duration: 13s, 9851ms;
            animation-delay: 0ms, 7956ms;
        }

        @keyframes move3 {
            0% {
                transform: translateX(38vw) translateY(-31vh) scale(0.94);
            }

            3.7037037037% {
                transform: translateX(6vw) translateY(50vh) scale(0.95);
            }

            7.4074074074% {
                transform: translateX(-3vw) translateY(46vh) scale(0.38);
            }

            11.1111111111% {
                transform: translateX(-35vw) translateY(-26vh) scale(0.94);
            }

            14.8148148148% {
                transform: translateX(-3vw) translateY(1vh) scale(0.95);
            }

            18.5185185185% {
                transform: translateX(18vw) translateY(-20vh) scale(0.61);
            }

            22.2222222222% {
                transform: translateX(31vw) translateY(-13vh) scale(0.35);
            }

            25.9259259259% {
                transform: translateX(-13vw) translateY(-33vh) scale(0.34);
            }

            29.6296296296% {
                transform: translateX(-23vw) translateY(17vh) scale(0.66);
            }

            33.3333333333% {
                transform: translateX(13vw) translateY(7vh) scale(0.92);
            }

            37.037037037% {
                transform: translateX(32vw) translateY(-26vh) scale(0.92);
            }

            40.7407407407% {
                transform: translateX(-35vw) translateY(-46vh) scale(0.73);
            }

            44.4444444444% {
                transform: translateX(-13vw) translateY(10vh) scale(0.66);
            }

            48.1481481481% {
                transform: translateX(-38vw) translateY(3vh) scale(0.83);
            }

            51.8518518519% {
                transform: translateX(18vw) translateY(-14vh) scale(0.74);
            }

            55.5555555556% {
                transform: translateX(44vw) translateY(-13vh) scale(0.51);
            }

            59.2592592593% {
                transform: translateX(-36vw) translateY(47vh) scale(0.76);
            }

            62.962962963% {
                transform: translateX(11vw) translateY(43vh) scale(0.33);
            }

            66.6666666667% {
                transform: translateX(27vw) translateY(-41vh) scale(0.7);
            }

            70.3703703704% {
                transform: translateX(-12vw) translateY(-24vh) scale(0.87);
            }

            74.0740740741% {
                transform: translateX(-43vw) translateY(31vh) scale(0.89);
            }

            77.7777777778% {
                transform: translateX(27vw) translateY(34vh) scale(1);
            }

            81.4814814815% {
                transform: translateX(-45vw) translateY(-13vh) scale(0.28);
            }

            85.1851851852% {
                transform: translateX(-16vw) translateY(46vh) scale(0.64);
            }

            88.8888888889% {
                transform: translateX(45vw) translateY(-27vh) scale(0.62);
            }

            92.5925925926% {
                transform: translateX(-25vw) translateY(-24vh) scale(0.8);
            }

            96.2962962963% {
                transform: translateX(-42vw) translateY(-44vh) scale(0.74);
            }

            100% {
                transform: translateX(-33vw) translateY(-41vh) scale(0.7);
            }
        }

        .firefly:nth-child(4) {
            animation-name: move4;
        }

        .firefly:nth-child(4)::before {
            animation-duration: 13s;
        }

        .firefly:nth-child(4)::after {
            animation-duration: 13s, 8818ms;
            animation-delay: 0ms, 4340ms;
        }

        @keyframes move4 {
            0% {
                transform: translateX(-10vw) translateY(8vh) scale(0.67);
            }

            3.8461538462% {
                transform: translateX(12vw) translateY(12vh) scale(0.92);
            }

            7.6923076923% {
                transform: translateX(45vw) translateY(-18vh) scale(0.88);
            }

            11.5384615385% {
                transform: translateX(24vw) translateY(-42vh) scale(0.38);
            }

            15.3846153846% {
                transform: translateX(-25vw) translateY(3vh) scale(0.4);
            }

            19.2307692308% {
                transform: translateX(35vw) translateY(-2vh) scale(0.5);
            }

            23.0769230769% {
                transform: translateX(5vw) translateY(39vh) scale(0.81);
            }

            26.9230769231% {
                transform: translateX(41vw) translateY(-17vh) scale(0.55);
            }

            30.7692307692% {
                transform: translateX(13vw) translateY(32vh) scale(0.45);
            }

            34.6153846154% {
                transform: translateX(12vw) translateY(31vh) scale(0.48);
            }

            38.4615384615% {
                transform: translateX(42vw) translateY(3vh) scale(0.87);
            }

            42.3076923077% {
                transform: translateX(44vw) translateY(5vh) scale(0.79);
            }

            46.1538461538% {
                transform: translateX(43vw) translateY(24vh) scale(0.97);
            }

            50% {
                transform: translateX(32vw) translateY(10vh) scale(0.78);
            }

            53.8461538462% {
                transform: translateX(-43vw) translateY(31vh) scale(0.29);
            }

            57.6923076923% {
                transform: translateX(-12vw) translateY(-49vh) scale(0.99);
            }

            61.5384615385% {
                transform: translateX(-30vw) translateY(-29vh) scale(0.96);
            }

            65.3846153846% {
                transform: translateX(-2vw) translateY(36vh) scale(0.46);
            }

            69.2307692308% {
                transform: translateX(25vw) translateY(-6vh) scale(0.59);
            }

            73.0769230769% {
                transform: translateX(-23vw) translateY(0vh) scale(0.97);
            }

            76.9230769231% {
                transform: translateX(-35vw) translateY(-18vh) scale(0.43);
            }

            80.7692307692% {
                transform: translateX(-46vw) translateY(30vh) scale(0.9);
            }

            84.6153846154% {
                transform: translateX(11vw) translateY(49vh) scale(0.3);
            }

            88.4615384615% {
                transform: translateX(-36vw) translateY(21vh) scale(0.84);
            }

            92.3076923077% {
                transform: translateX(-40vw) translateY(-41vh) scale(0.73);
            }

            96.1538461538% {
                transform: translateX(46vw) translateY(-40vh) scale(0.46);
            }

            100% {
                transform: translateX(-46vw) translateY(-35vh) scale(0.94);
            }
        }

        .firefly:nth-child(5) {
            animation-name: move5;
        }

        .firefly:nth-child(5)::before {
            animation-duration: 9s;
        }

        .firefly:nth-child(5)::after {
            animation-duration: 9s, 10712ms;
            animation-delay: 0ms, 7045ms;
        }

        @keyframes move5 {
            0% {
                transform: translateX(49vw) translateY(5vh) scale(0.29);
            }

            4.5454545455% {
                transform: translateX(-36vw) translateY(36vh) scale(0.7);
            }

            9.0909090909% {
                transform: translateX(-27vw) translateY(-41vh) scale(0.83);
            }

            13.6363636364% {
                transform: translateX(-19vw) translateY(-15vh) scale(0.29);
            }

            18.1818181818% {
                transform: translateX(-31vw) translateY(38vh) scale(0.89);
            }

            22.7272727273% {
                transform: translateX(26vw) translateY(-10vh) scale(0.76);
            }

            27.2727272727% {
                transform: translateX(8vw) translateY(17vh) scale(0.27);
            }

            31.8181818182% {
                transform: translateX(48vw) translateY(-21vh) scale(0.37);
            }

            36.3636363636% {
                transform: translateX(12vw) translateY(-35vh) scale(0.82);
            }

            40.9090909091% {
                transform: translateX(39vw) translateY(39vh) scale(0.42);
            }

            45.4545454545% {
                transform: translateX(38vw) translateY(31vh) scale(0.99);
            }

            50% {
                transform: translateX(-29vw) translateY(35vh) scale(0.82);
            }

            54.5454545455% {
                transform: translateX(-38vw) translateY(31vh) scale(0.26);
            }

            59.0909090909% {
                transform: translateX(-24vw) translateY(-6vh) scale(0.82);
            }

            63.6363636364% {
                transform: translateX(-38vw) translateY(38vh) scale(0.81);
            }

            68.1818181818% {
                transform: translateX(-8vw) translateY(6vh) scale(0.79);
            }

            72.7272727273% {
                transform: translateX(15vw) translateY(-28vh) scale(0.52);
            }

            77.2727272727% {
                transform: translateX(-17vw) translateY(7vh) scale(0.86);
            }

            81.8181818182% {
                transform: translateX(11vw) translateY(-28vh) scale(0.93);
            }

            86.3636363636% {
                transform: translateX(16vw) translateY(23vh) scale(0.28);
            }

            90.9090909091% {
                transform: translateX(-46vw) translateY(34vh) scale(0.89);
            }

            95.4545454545% {
                transform: translateX(-35vw) translateY(-42vh) scale(0.43);
            }

            100% {
                transform: translateX(38vw) translateY(-25vh) scale(0.95);
            }
        }

        .firefly:nth-child(6) {
            animation-name: move6;
        }

        .firefly:nth-child(6)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(6)::after {
            animation-duration: 12s, 6192ms;
            animation-delay: 0ms, 5652ms;
        }

        @keyframes move6 {
            0% {
                transform: translateX(21vw) translateY(3vh) scale(0.89);
            }

            4.5454545455% {
                transform: translateX(18vw) translateY(-23vh) scale(0.54);
            }

            9.0909090909% {
                transform: translateX(3vw) translateY(37vh) scale(0.71);
            }

            13.6363636364% {
                transform: translateX(40vw) translateY(35vh) scale(0.99);
            }

            18.1818181818% {
                transform: translateX(-41vw) translateY(-1vh) scale(0.51);
            }

            22.7272727273% {
                transform: translateX(-46vw) translateY(-15vh) scale(0.3);
            }

            27.2727272727% {
                transform: translateX(12vw) translateY(-28vh) scale(0.92);
            }

            31.8181818182% {
                transform: translateX(-38vw) translateY(17vh) scale(0.9);
            }

            36.3636363636% {
                transform: translateX(29vw) translateY(-16vh) scale(0.33);
            }

            40.9090909091% {
                transform: translateX(-5vw) translateY(24vh) scale(0.76);
            }

            45.4545454545% {
                transform: translateX(-17vw) translateY(3vh) scale(0.8);
            }

            50% {
                transform: translateX(47vw) translateY(-1vh) scale(0.44);
            }

            54.5454545455% {
                transform: translateX(40vw) translateY(-40vh) scale(0.88);
            }

            59.0909090909% {
                transform: translateX(-31vw) translateY(25vh) scale(0.81);
            }

            63.6363636364% {
                transform: translateX(10vw) translateY(12vh) scale(0.96);
            }

            68.1818181818% {
                transform: translateX(-30vw) translateY(-48vh) scale(0.84);
            }

            72.7272727273% {
                transform: translateX(-26vw) translateY(15vh) scale(0.44);
            }

            77.2727272727% {
                transform: translateX(0vw) translateY(10vh) scale(0.54);
            }

            81.8181818182% {
                transform: translateX(14vw) translateY(46vh) scale(0.88);
            }

            86.3636363636% {
                transform: translateX(-14vw) translateY(43vh) scale(0.34);
            }

            90.9090909091% {
                transform: translateX(-4vw) translateY(-15vh) scale(0.38);
            }

            95.4545454545% {
                transform: translateX(38vw) translateY(-30vh) scale(0.45);
            }

            100% {
                transform: translateX(12vw) translateY(35vh) scale(0.54);
            }
        }

        .firefly:nth-child(7) {
            animation-name: move7;
        }

        .firefly:nth-child(7)::before {
            animation-duration: 17s;
        }

        .firefly:nth-child(7)::after {
            animation-duration: 17s, 7978ms;
            animation-delay: 0ms, 4948ms;
        }

        @keyframes move7 {
            0% {
                transform: translateX(16vw) translateY(31vh) scale(0.95);
            }

            4.1666666667% {
                transform: translateX(13vw) translateY(12vh) scale(0.31);
            }

            8.3333333333% {
                transform: translateX(16vw) translateY(36vh) scale(0.61);
            }

            12.5% {
                transform: translateX(-31vw) translateY(-23vh) scale(0.55);
            }

            16.6666666667% {
                transform: translateX(-20vw) translateY(0vh) scale(0.46);
            }

            20.8333333333% {
                transform: translateX(-17vw) translateY(-17vh) scale(0.28);
            }

            25% {
                transform: translateX(-39vw) translateY(10vh) scale(0.97);
            }

            29.1666666667% {
                transform: translateX(-21vw) translateY(-7vh) scale(0.5);
            }

            33.3333333333% {
                transform: translateX(26vw) translateY(50vh) scale(0.93);
            }

            37.5% {
                transform: translateX(22vw) translateY(25vh) scale(0.82);
            }

            41.6666666667% {
                transform: translateX(45vw) translateY(31vh) scale(0.49);
            }

            45.8333333333% {
                transform: translateX(1vw) translateY(-44vh) scale(0.99);
            }

            50% {
                transform: translateX(39vw) translateY(-28vh) scale(0.7);
            }

            54.1666666667% {
                transform: translateX(5vw) translateY(18vh) scale(0.71);
            }

            58.3333333333% {
                transform: translateX(-33vw) translateY(39vh) scale(0.31);
            }

            62.5% {
                transform: translateX(5vw) translateY(19vh) scale(0.72);
            }

            66.6666666667% {
                transform: translateX(48vw) translateY(-45vh) scale(0.51);
            }

            70.8333333333% {
                transform: translateX(34vw) translateY(-40vh) scale(0.53);
            }

            75% {
                transform: translateX(-32vw) translateY(-31vh) scale(0.6);
            }

            79.1666666667% {
                transform: translateX(-2vw) translateY(27vh) scale(0.27);
            }

            83.3333333333% {
                transform: translateX(7vw) translateY(-20vh) scale(0.92);
            }

            87.5% {
                transform: translateX(11vw) translateY(42vh) scale(0.65);
            }

            91.6666666667% {
                transform: translateX(35vw) translateY(18vh) scale(0.57);
            }

            95.8333333333% {
                transform: translateX(50vw) translateY(26vh) scale(0.93);
            }

            100% {
                transform: translateX(10vw) translateY(-12vh) scale(0.71);
            }
        }

        .firefly:nth-child(8) {
            animation-name: move8;
        }

        .firefly:nth-child(8)::before {
            animation-duration: 10s;
        }

        .firefly:nth-child(8)::after {
            animation-duration: 10s, 10811ms;
            animation-delay: 0ms, 2803ms;
        }

        @keyframes move8 {
            0% {
                transform: translateX(-41vw) translateY(39vh) scale(0.88);
            }

            3.5714285714% {
                transform: translateX(15vw) translateY(20vh) scale(0.72);
            }

            7.1428571429% {
                transform: translateX(-5vw) translateY(-41vh) scale(0.61);
            }

            10.7142857143% {
                transform: translateX(28vw) translateY(-19vh) scale(0.63);
            }

            14.2857142857% {
                transform: translateX(-47vw) translateY(-8vh) scale(0.64);
            }

            17.8571428571% {
                transform: translateX(-7vw) translateY(4vh) scale(0.62);
            }

            21.4285714286% {
                transform: translateX(-40vw) translateY(-12vh) scale(0.27);
            }

            25% {
                transform: translateX(-48vw) translateY(8vh) scale(0.43);
            }

            28.5714285714% {
                transform: translateX(-29vw) translateY(38vh) scale(0.71);
            }

            32.1428571429% {
                transform: translateX(-39vw) translateY(-43vh) scale(0.74);
            }

            35.7142857143% {
                transform: translateX(19vw) translateY(42vh) scale(0.79);
            }

            39.2857142857% {
                transform: translateX(-10vw) translateY(30vh) scale(0.83);
            }

            42.8571428571% {
                transform: translateX(-20vw) translateY(-32vh) scale(0.27);
            }

            46.4285714286% {
                transform: translateX(-17vw) translateY(47vh) scale(0.93);
            }

            50% {
                transform: translateX(19vw) translateY(-28vh) scale(0.3);
            }

            53.5714285714% {
                transform: translateX(-5vw) translateY(25vh) scale(0.34);
            }

            57.1428571429% {
                transform: translateX(-39vw) translateY(-35vh) scale(0.36);
            }

            60.7142857143% {
                transform: translateX(-25vw) translateY(-23vh) scale(0.44);
            }

            64.2857142857% {
                transform: translateX(-1vw) translateY(-2vh) scale(0.4);
            }

            67.8571428571% {
                transform: translateX(40vw) translateY(-9vh) scale(0.39);
            }

            71.4285714286% {
                transform: translateX(19vw) translateY(26vh) scale(0.76);
            }

            75% {
                transform: translateX(-13vw) translateY(-13vh) scale(1);
            }

            78.5714285714% {
                transform: translateX(-28vw) translateY(-38vh) scale(0.33);
            }

            82.1428571429% {
                transform: translateX(-32vw) translateY(-41vh) scale(0.39);
            }

            85.7142857143% {
                transform: translateX(4vw) translateY(20vh) scale(0.5);
            }

            89.2857142857% {
                transform: translateX(-38vw) translateY(-2vh) scale(0.51);
            }

            92.8571428571% {
                transform: translateX(-33vw) translateY(-38vh) scale(0.58);
            }

            96.4285714286% {
                transform: translateX(30vw) translateY(32vh) scale(0.44);
            }

            100% {
                transform: translateX(30vw) translateY(-26vh) scale(0.69);
            }
        }

        .firefly:nth-child(9) {
            animation-name: move9;
        }

        .firefly:nth-child(9)::before {
            animation-duration: 17s;
        }

        .firefly:nth-child(9)::after {
            animation-duration: 17s, 9138ms;
            animation-delay: 0ms, 6521ms;
        }

        @keyframes move9 {
            0% {
                transform: translateX(-22vw) translateY(35vh) scale(0.68);
            }

            5.2631578947% {
                transform: translateX(28vw) translateY(2vh) scale(0.55);
            }

            10.5263157895% {
                transform: translateX(-38vw) translateY(-7vh) scale(0.4);
            }

            15.7894736842% {
                transform: translateX(44vw) translateY(-25vh) scale(0.8);
            }

            21.0526315789% {
                transform: translateX(18vw) translateY(1vh) scale(0.27);
            }

            26.3157894737% {
                transform: translateX(30vw) translateY(-25vh) scale(0.28);
            }

            31.5789473684% {
                transform: translateX(-34vw) translateY(-28vh) scale(0.67);
            }

            36.8421052632% {
                transform: translateX(11vw) translateY(29vh) scale(0.66);
            }

            42.1052631579% {
                transform: translateX(47vw) translateY(46vh) scale(0.78);
            }

            47.3684210526% {
                transform: translateX(26vw) translateY(42vh) scale(0.9);
            }

            52.6315789474% {
                transform: translateX(0vw) translateY(33vh) scale(0.39);
            }

            57.8947368421% {
                transform: translateX(-27vw) translateY(-17vh) scale(0.35);
            }

            63.1578947368% {
                transform: translateX(-33vw) translateY(-35vh) scale(0.68);
            }

            68.4210526316% {
                transform: translateX(32vw) translateY(-6vh) scale(0.54);
            }

            73.6842105263% {
                transform: translateX(-42vw) translateY(-36vh) scale(0.28);
            }

            78.9473684211% {
                transform: translateX(-6vw) translateY(31vh) scale(0.28);
            }

            84.2105263158% {
                transform: translateX(-25vw) translateY(-24vh) scale(0.27);
            }

            89.4736842105% {
                transform: translateX(-43vw) translateY(-44vh) scale(0.43);
            }

            94.7368421053% {
                transform: translateX(46vw) translateY(-29vh) scale(0.34);
            }

            100% {
                transform: translateX(-4vw) translateY(5vh) scale(0.46);
            }
        }

        .firefly:nth-child(10) {
            animation-name: move10;
        }

        .firefly:nth-child(10)::before {
            animation-duration: 11s;
        }

        .firefly:nth-child(10)::after {
            animation-duration: 11s, 5566ms;
            animation-delay: 0ms, 3849ms;
        }

        @keyframes move10 {
            0% {
                transform: translateX(-33vw) translateY(22vh) scale(0.54);
            }

            5.8823529412% {
                transform: translateX(-1vw) translateY(-38vh) scale(0.48);
            }

            11.7647058824% {
                transform: translateX(-49vw) translateY(-9vh) scale(0.73);
            }

            17.6470588235% {
                transform: translateX(-15vw) translateY(21vh) scale(0.86);
            }

            23.5294117647% {
                transform: translateX(15vw) translateY(-20vh) scale(0.46);
            }

            29.4117647059% {
                transform: translateX(-12vw) translateY(35vh) scale(0.54);
            }

            35.2941176471% {
                transform: translateX(2vw) translateY(11vh) scale(0.83);
            }

            41.1764705882% {
                transform: translateX(-25vw) translateY(-32vh) scale(0.88);
            }

            47.0588235294% {
                transform: translateX(39vw) translateY(38vh) scale(0.3);
            }

            52.9411764706% {
                transform: translateX(-13vw) translateY(46vh) scale(0.38);
            }

            58.8235294118% {
                transform: translateX(24vw) translateY(22vh) scale(0.54);
            }

            64.7058823529% {
                transform: translateX(-16vw) translateY(40vh) scale(0.84);
            }

            70.5882352941% {
                transform: translateX(-25vw) translateY(30vh) scale(0.82);
            }

            76.4705882353% {
                transform: translateX(-27vw) translateY(-28vh) scale(0.75);
            }

            82.3529411765% {
                transform: translateX(-31vw) translateY(40vh) scale(0.48);
            }

            88.2352941176% {
                transform: translateX(-43vw) translateY(11vh) scale(0.95);
            }

            94.1176470588% {
                transform: translateX(40vw) translateY(49vh) scale(0.91);
            }

            100% {
                transform: translateX(39vw) translateY(36vh) scale(0.33);
            }
        }

        .firefly:nth-child(11) {
            animation-name: move11;
        }

        .firefly:nth-child(11)::before {
            animation-duration: 18s;
        }

        .firefly:nth-child(11)::after {
            animation-duration: 18s, 9094ms;
            animation-delay: 0ms, 5573ms;
        }

        @keyframes move11 {
            0% {
                transform: translateX(-14vw) translateY(-38vh) scale(0.66);
            }

            4.7619047619% {
                transform: translateX(-4vw) translateY(35vh) scale(0.91);
            }

            9.5238095238% {
                transform: translateX(1vw) translateY(-19vh) scale(0.95);
            }

            14.2857142857% {
                transform: translateX(37vw) translateY(-28vh) scale(0.92);
            }

            19.0476190476% {
                transform: translateX(4vw) translateY(22vh) scale(0.43);
            }

            23.8095238095% {
                transform: translateX(-37vw) translateY(48vh) scale(0.86);
            }

            28.5714285714% {
                transform: translateX(8vw) translateY(11vh) scale(0.74);
            }

            33.3333333333% {
                transform: translateX(42vw) translateY(39vh) scale(0.85);
            }

            38.0952380952% {
                transform: translateX(-28vw) translateY(2vh) scale(0.53);
            }

            42.8571428571% {
                transform: translateX(-39vw) translateY(-17vh) scale(0.62);
            }

            47.619047619% {
                transform: translateX(45vw) translateY(33vh) scale(0.32);
            }

            52.380952381% {
                transform: translateX(1vw) translateY(30vh) scale(0.86);
            }

            57.1428571429% {
                transform: translateX(41vw) translateY(39vh) scale(0.84);
            }

            61.9047619048% {
                transform: translateX(2vw) translateY(-41vh) scale(0.59);
            }

            66.6666666667% {
                transform: translateX(49vw) translateY(-46vh) scale(0.42);
            }

            71.4285714286% {
                transform: translateX(-1vw) translateY(-45vh) scale(0.36);
            }

            76.1904761905% {
                transform: translateX(38vw) translateY(-11vh) scale(0.93);
            }

            80.9523809524% {
                transform: translateX(-17vw) translateY(20vh) scale(0.3);
            }

            85.7142857143% {
                transform: translateX(-42vw) translateY(10vh) scale(0.72);
            }

            90.4761904762% {
                transform: translateX(-2vw) translateY(41vh) scale(0.81);
            }

            95.2380952381% {
                transform: translateX(-42vw) translateY(-35vh) scale(0.48);
            }

            100% {
                transform: translateX(-34vw) translateY(-32vh) scale(0.55);
            }
        }

        .firefly:nth-child(12) {
            animation-name: move12;
        }

        .firefly:nth-child(12)::before {
            animation-duration: 17s;
        }

        .firefly:nth-child(12)::after {
            animation-duration: 17s, 10438ms;
            animation-delay: 0ms, 8353ms;
        }

        @keyframes move12 {
            0% {
                transform: translateX(8vw) translateY(-42vh) scale(0.91);
            }

            5.8823529412% {
                transform: translateX(8vw) translateY(3vh) scale(0.47);
            }

            11.7647058824% {
                transform: translateX(38vw) translateY(-14vh) scale(0.49);
            }

            17.6470588235% {
                transform: translateX(-36vw) translateY(-9vh) scale(0.44);
            }

            23.5294117647% {
                transform: translateX(21vw) translateY(21vh) scale(0.39);
            }

            29.4117647059% {
                transform: translateX(42vw) translateY(11vh) scale(0.54);
            }

            35.2941176471% {
                transform: translateX(26vw) translateY(36vh) scale(0.67);
            }

            41.1764705882% {
                transform: translateX(48vw) translateY(-13vh) scale(0.54);
            }

            47.0588235294% {
                transform: translateX(-25vw) translateY(-43vh) scale(0.6);
            }

            52.9411764706% {
                transform: translateX(17vw) translateY(-37vh) scale(0.83);
            }

            58.8235294118% {
                transform: translateX(-18vw) translateY(-3vh) scale(0.36);
            }

            64.7058823529% {
                transform: translateX(-19vw) translateY(4vh) scale(0.96);
            }

            70.5882352941% {
                transform: translateX(14vw) translateY(-27vh) scale(0.86);
            }

            76.4705882353% {
                transform: translateX(-26vw) translateY(-5vh) scale(0.67);
            }

            82.3529411765% {
                transform: translateX(38vw) translateY(6vh) scale(0.86);
            }

            88.2352941176% {
                transform: translateX(-39vw) translateY(-10vh) scale(0.76);
            }

            94.1176470588% {
                transform: translateX(-27vw) translateY(5vh) scale(0.51);
            }

            100% {
                transform: translateX(-46vw) translateY(-39vh) scale(0.43);
            }
        }

        .firefly:nth-child(13) {
            animation-name: move13;
        }

        .firefly:nth-child(13)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(13)::after {
            animation-duration: 12s, 8325ms;
            animation-delay: 0ms, 4157ms;
        }

        @keyframes move13 {
            0% {
                transform: translateX(-2vw) translateY(-35vh) scale(0.81);
            }

            4% {
                transform: translateX(-20vw) translateY(-21vh) scale(0.32);
            }

            8% {
                transform: translateX(48vw) translateY(18vh) scale(0.98);
            }

            12% {
                transform: translateX(31vw) translateY(-41vh) scale(0.93);
            }

            16% {
                transform: translateX(13vw) translateY(20vh) scale(0.74);
            }

            20% {
                transform: translateX(-32vw) translateY(5vh) scale(0.67);
            }

            24% {
                transform: translateX(-17vw) translateY(48vh) scale(0.69);
            }

            28% {
                transform: translateX(-17vw) translateY(9vh) scale(0.32);
            }

            32% {
                transform: translateX(39vw) translateY(-2vh) scale(0.91);
            }

            36% {
                transform: translateX(49vw) translateY(12vh) scale(0.41);
            }

            40% {
                transform: translateX(10vw) translateY(-37vh) scale(0.81);
            }

            44% {
                transform: translateX(12vw) translateY(-49vh) scale(0.73);
            }

            48% {
                transform: translateX(-17vw) translateY(24vh) scale(0.95);
            }

            52% {
                transform: translateX(29vw) translateY(-46vh) scale(0.93);
            }

            56% {
                transform: translateX(-29vw) translateY(-14vh) scale(0.33);
            }

            60% {
                transform: translateX(-49vw) translateY(16vh) scale(1);
            }

            64% {
                transform: translateX(-45vw) translateY(48vh) scale(0.62);
            }

            68% {
                transform: translateX(44vw) translateY(42vh) scale(0.98);
            }

            72% {
                transform: translateX(12vw) translateY(23vh) scale(0.73);
            }

            76% {
                transform: translateX(-8vw) translateY(39vh) scale(0.97);
            }

            80% {
                transform: translateX(-40vw) translateY(-24vh) scale(0.99);
            }

            84% {
                transform: translateX(24vw) translateY(-1vh) scale(0.87);
            }

            88% {
                transform: translateX(-46vw) translateY(-49vh) scale(0.62);
            }

            92% {
                transform: translateX(23vw) translateY(-27vh) scale(0.47);
            }

            96% {
                transform: translateX(-5vw) translateY(29vh) scale(0.35);
            }

            100% {
                transform: translateX(12vw) translateY(-36vh) scale(0.46);
            }
        }

        .firefly:nth-child(14) {
            animation-name: move14;
        }

        .firefly:nth-child(14)::before {
            animation-duration: 12s;
        }

        .firefly:nth-child(14)::after {
            animation-duration: 12s, 9251ms;
            animation-delay: 0ms, 2727ms;
        }

        @keyframes move14 {
            0% {
                transform: translateX(12vw) translateY(-19vh) scale(0.75);
            }

            5% {
                transform: translateX(-43vw) translateY(27vh) scale(0.47);
            }

            10% {
                transform: translateX(24vw) translateY(43vh) scale(0.52);
            }

            15% {
                transform: translateX(-45vw) translateY(-1vh) scale(0.84);
            }

            20% {
                transform: translateX(11vw) translateY(40vh) scale(0.96);
            }

            25% {
                transform: translateX(43vw) translateY(-46vh) scale(0.97);
            }

            30% {
                transform: translateX(32vw) translateY(-45vh) scale(0.44);
            }

            35% {
                transform: translateX(-45vw) translateY(2vh) scale(0.86);
            }

            40% {
                transform: translateX(39vw) translateY(-38vh) scale(0.74);
            }

            45% {
                transform: translateX(-9vw) translateY(13vh) scale(0.29);
            }

            50% {
                transform: translateX(-22vw) translateY(1vh) scale(0.99);
            }

            55% {
                transform: translateX(1vw) translateY(28vh) scale(0.48);
            }

            60% {
                transform: translateX(4vw) translateY(26vh) scale(0.41);
            }

            65% {
                transform: translateX(35vw) translateY(-29vh) scale(0.26);
            }

            70% {
                transform: translateX(4vw) translateY(-24vh) scale(0.83);
            }

            75% {
                transform: translateX(-12vw) translateY(-11vh) scale(0.92);
            }

            80% {
                transform: translateX(-21vw) translateY(-9vh) scale(0.8);
            }

            85% {
                transform: translateX(-34vw) translateY(26vh) scale(0.6);
            }

            90% {
                transform: translateX(-8vw) translateY(23vh) scale(0.75);
            }

            95% {
                transform: translateX(50vw) translateY(14vh) scale(0.78);
            }

            100% {
                transform: translateX(-31vw) translateY(-9vh) scale(0.74);
            }
        }

        .firefly:nth-child(15) {
            animation-name: move15;
        }

        .firefly:nth-child(15)::before {
            animation-duration: 9s;
        }

        .firefly:nth-child(15)::after {
            animation-duration: 9s, 9862ms;
            animation-delay: 0ms, 3541ms;
        }

        @keyframes move15 {
            0% {
                transform: translateX(-25vw) translateY(27vh) scale(0.3);
            }

            5.5555555556% {
                transform: translateX(20vw) translateY(-34vh) scale(0.41);
            }

            11.1111111111% {
                transform: translateX(46vw) translateY(30vh) scale(0.89);
            }

            16.6666666667% {
                transform: translateX(-27vw) translateY(13vh) scale(0.61);
            }

            22.2222222222% {
                transform: translateX(0vw) translateY(0vh) scale(0.26);
            }

            27.7777777778% {
                transform: translateX(45vw) translateY(15vh) scale(0.8);
            }

            33.3333333333% {
                transform: translateX(31vw) translateY(-22vh) scale(0.39);
            }

            38.8888888889% {
                transform: translateX(-46vw) translateY(30vh) scale(0.62);
            }

            44.4444444444% {
                transform: translateX(25vw) translateY(-24vh) scale(0.76);
            }

            50% {
                transform: translateX(12vw) translateY(-29vh) scale(0.91);
            }

            55.5555555556% {
                transform: translateX(-33vw) translateY(-5vh) scale(0.48);
            }

            61.1111111111% {
                transform: translateX(7vw) translateY(7vh) scale(0.49);
            }

            66.6666666667% {
                transform: translateX(-15vw) translateY(0vh) scale(0.83);
            }

            72.2222222222% {
                transform: translateX(-49vw) translateY(23vh) scale(0.28);
            }

            77.7777777778% {
                transform: translateX(24vw) translateY(-32vh) scale(0.53);
            }

            83.3333333333% {
                transform: translateX(29vw) translateY(26vh) scale(0.53);
            }

            88.8888888889% {
                transform: translateX(-18vw) translateY(11vh) scale(0.29);
            }

            94.4444444444% {
                transform: translateX(-19vw) translateY(23vh) scale(0.54);
            }

            100% {
                transform: translateX(6vw) translateY(-39vh) scale(0.31);
            }
        }

        @keyframes drift {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }

        @keyframes flash {

            0%,
            30%,
            100% {
                opacity: 0;
                box-shadow: 0 0 0vw 0vw yellow;
            }

            5% {
                opacity: 1;
                box-shadow: 0 0 2vw 0.4vw yellow;
            }
        }
    </style>
</head>

<body>
    <audio src="{{ asset('music/happybirthday.mp3') }}" loop autoplay>
        <p>If you are reading this, it is because your browser does not support the audio element. </p>
        <embed src="{{ asset('music/happybirthday.mp3') }}" width="180" height="90" hidden="true" />
    </audio>
    <section class="p-5 text-center">
        <h2 class="tangerine">
            Happy Birthday Babe
            <br>
            <p class="tangerine text-center">
                <br>Semoga urusan ayang lancar terus <br>Semoga selalu dikelilingi orang-orang baik, <br>Dan Semoga
                makin jadi versi terbaik dari diri ayang. <br> Yang pasti, <br>
                abang yakin ayang bakal sukses terus
                <br><br>Aamiin..
            </p>
        </h2>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
        <div class="firefly"></div>
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

    <script></script>
</body>

</html>
