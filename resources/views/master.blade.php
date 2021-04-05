<!DOCTYPE html>
<html>
<head>
    <script src="https://kit.fontawesome.com/06729ed357.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

    <style>
        body {
            background-color: #001133;
        }

        .myDiv {

            background-color: #DCD2C0;
            text-align: center;
            color: white;

        }

        .myDiv2 {
            background-color: #001133;

            text-align: center;
            color: white;
        }

        .myDiv3 {

            background-color: #001133;
            text-align: center;
            color: white;
            text-siz: 24px;

        }

        .myDiv4 {
            background-color: #DCD2C0;

            text-align: center;
            color: white;
        }



        .loginin {
            bolder: none;
            padding: 10px;
            padding-left: 15px;
            padding-right: 15px;
            color: #fff;
            background: #003366;
            border-radius: 50px;
            font-size: 20px;
            background-image: linear-georgian(45deg, #34495e, #2c3e50)
            background-size: 800px;
            background-position: right;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 2)
            align: right;
        }


        .loginin:hover {
            ainimation: hover 5s infinite;
        }

        @keyframes hover {
            0% {
                background-position: right;
            }
            100% {
                background-position: left;
            }
        }

        .slider {
            width: 1300px;
            margin: auto;
            overflow: hidden;
        }

        .slider ul {
            padding: 0;
            width: 5200px;
            list-style: none;
            position: relative;
            animation: sliding 10s ease-in-out infinite
        }

        .slider ul li {
            float: left;
            position: relative;
        }

        .slider h5 {
            margin: 0;
            background: #333;
            padding: 15px;
            color: #fff;
            text-align: center;
            position: absolute;
            button: 0;
            width: 100%;
        }

        .slider ul:hover {
            animation-play-state: paused;
        }


        @keyframes sliding {
            5%, 10% {
                left: 0
            }
            15%, 30% {
                left: -1300px;
            }
            35%, 50% {
                left: -2600px;
            }
            55%, 70% {
                left: -3900px;
            }
        }


    </style>

    @stack('css')

</head>
<body>

    @include('menue')

    @yield('content')

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>


</body>
</html>
