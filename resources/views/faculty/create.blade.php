<!DOCTYPE html>
<html>
<head><title> GP-Support</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <style>
        body {background-color:	#e6e6e6;}

        footer {
            background:#001133 ;
            color: white;
            text-align: center;
            padding: 10px 15px;
        }

        footer a {
            color: cadetblue;
            text-decoration: none;
        }
    </style>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">

</head>
<body>
<center>
    @include('menue')

    <img src="{{asset('iau.png')}}" width ="700" height="200"  ></img><br><br>


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Create {{$type}}</h1>

    <div class="container">
        @include('layouts.component.flash-message')

        <form method="post" action="{{route('user.store')}}"
              enctype="multipart/form-data">
            @csrf
            @if($type != 'faculty')
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="name" type="text" required>
                    </div>
                </div>
            @else
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">First name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="first_name" type="text" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Last name</label>
                    <div class="col-sm-10">
                        <input class="form-control" name="last_name" type="text" required>
                    </div>
                </div>
            @endif
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input class="form-control" name="email" type="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input class="form-control" name="password" type="password" required>
                </div>
            </div>
            @if($type == 'faculty')
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Research group interested</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="research_group_id">
                            <option value=""></option>
                            @foreach($researchGroups as $researchGroup)
                                <option value="{{$researchGroup->id}}">{{$researchGroup->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif
            <input type="hidden" name="type" value="{{$type}}">
            <div class="text-center mt-3">
                <a href="{{route('cancel-home')}}" class="btn btn-warning waves-effect waves-light">Cancel
                </a>

                <button type="submit" class="btn btn-primary waves-effect waves-light">Create
                </button>
            </div>
        </form>
<hr>
    </div>

</center>
<br><br>
<footer>
    <p >  <i><b>2021Community College- Imam Abdulrahman Bin Faisal University. All rights reserved &copy;</b> </i></p>

</footer>


<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>
