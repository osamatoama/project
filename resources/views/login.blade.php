<!DOCTYPE>
<html>
<head>
    <title>  Imam Abdulrahman Bin Faisal University </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        h1{color:darkblue;}
        body{background-color:#B2AD9B ;}

    </style>

</head>
<body>
@include('menue')
    <div class="row">
        <div class="m-auto">
            <img class="" src="{{asset('university Logo.png')}}" align="right" width="651" height="151" alt="logo">
        </div>
    </div>
<br><br><br>
    <div class="row">
        <div class="m-auto">
            <h1 align="center"> Login  </h1>
            @include('layouts.component.flash-message')

            <form method="POST" action="{{ route('login') }}">
                @csrf
            <center>
                <br><br>
                <label for="uname"><b>Email</b></label>
                <input type="text" placeholder="Enter Username" name="email" required>
                <br><br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="password" required>
                <br><br>
                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <br>
                <span class="psw">Forgot <a href="#">password?</a></span>
            </center>
        </form>
        </div>
    </div>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>



