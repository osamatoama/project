<!DOCTYPE html>
<html>
<head>
    <title> GP-Support</title>
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

</head>
<body>
<center>
    <img src="{{asset('iau.png')}}" width ="700" height="200"  ></img><br><br>


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Edit {{$type}}</h1>

    <div class="container">
        @include('layouts.component.flash-message')

        <form method="post" action="{{route('user.update' , [$user->id])}}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input class="form-control" value="{{$user->name}}" name="name" type="text" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">email</label>
                <div class="col-sm-10">
                    <input class="form-control" value="{{$user->email}}" name="email" type="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">password</label>
                <div class="col-sm-10">
                    <input class="form-control" name="password" type="password">
                </div>
            </div>
            @if($type == 'faculty')
                <div class="form-group row">
                    <label for="example-text-input" class="col-sm-2 col-form-label">Research group interested</label>
                    <div class="col-sm-10">
                        <select class="form-control" name="research_group_id">
                            <option value=""></option>
                            @foreach($researchGroups as $researchGroup)
                                <option {{$researchGroup->id==$user->research_group_id ? 'selected' : ''}} value="{{$researchGroup->id}}">{{$researchGroup->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            @endif
            <input type="hidden" name="type" value="{{$type}}">
            <div class="text-center mt-3">
                <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
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


</body>


</body>
</html>
