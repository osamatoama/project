<!DOCTYPE html>
<html>
<head><title> Research Group</title>
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


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Edit Reseach Group</h1>

    <div class="container">
        @include('layouts.component.flash-message')

        <form method="post" action="{{route('research-group.update' , [$researchGroup->id])}}"
              enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" value="{{$researchGroup->name}}" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" required>{{$researchGroup->description}}</textarea>
                </div>
            </div>
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
