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
            <h1 align="center"> Log in  </h1>
            @include('layouts.component.flash-message')

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <br><br>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Email</label>
                    <div class="col-sm-9">
                        <input autocomplete="false" class="form-control" name="email" type="email" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-3 col-form-label">Password</label>
                    <div class="col-sm-9">
                        <input class="form-control" name="password" type="password" required>
                    </div>
                </div>
                <a href="{{ route('password.request') }}"> <i
                        class="mdi mdi-lock"></i>
                    Forget Password ?
                </a>
                <div class="row">
                    <div class="col-3 text-center mt-3">
                        <a  href="{{route('cancel-home')}}" class="btn btn-warning waves-effect waves-light">
                            Cancel
                        </a>
                    </div>
                    <div class="col-6 text-center mt-3">
                        <button type="submit" class="btn btn-primary waves-effect waves-light">
                            Submit
                        </button>
                    </div>
                </div>


        </form>
        </div>
    </div>

<br><br>
<footer>
    <p >  <i><b>2021Community College- Imam Abdulrahman Bin Faisal University. All rights reserved &copy;</b> </i></p>

</footer>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>



