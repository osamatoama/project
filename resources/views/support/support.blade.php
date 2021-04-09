<!DOCTYPE html>
<html>
<head><title> GP-Support</title>
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
@include('menue')
<center>
    <img src="{{asset('iau.png')}}" width ="700" height="200"  ></img><br><br>


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Graduation Project Support</h1>
<div class="container">
    <form method="post" action="{{route('support')}}"
          enctype="multipart/form-data">
        @csrf
        @include('layouts.component.flash-message')
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Type of support:</label>
            <div class="col-sm-10">
                <select class="form-control" name="type_of_support">
                    <option value="Computer software">Computer software</option>
                    <option value="Computer hardware">Computer hardware</option>
                    <option value="other">Other</option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Branch:</label>
            <div class="col-sm-10">
                <select class="form-control" name="branch">
                    <option value="Qatife"> Qatife </option>
                    <option value="Dammam"> Dammam </option>
                    <option value="Alraka"> Alraka </option>
                </select>
            </div>
        </div>
        <div class="form-group row">
            <label for="example-text-input" class="col-sm-2 col-form-label">Description:</label>
            <div class="col-sm-10">
                <textarea class="form-control" name="description"></textarea>
            </div>
        </div>
        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary waves-effect waves-light">Submit
            </button>
        </div>
    </form>

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Email</th>
            <th scope="col">Type of support</th>
            <th scope="col">Branch</th>
            <th scope="col">Description</th>
            <th scope="col">Status</th>
        </tr>
        </thead>

        <tbody>
        @foreach(user()->supports as $support)
            <tr>
                <th scope="row">{{$support->id}}</th>
                <td>{{$support->user->name ?? ''}}</td>
                <td>{{$support->user->email ?? ''}}</td>
                <td>{{$support->type_of_support ?? ''}}</td>
                <td>{{$support->branch ?? ''}}</td>
                <td>{{$support->description ?? ''}}</td>
                <td>{{$support->active ==0 ? 'pending':'accepted'}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>

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
