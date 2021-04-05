<!DOCTYPE html>
<html>
<head>
    <title> GP-Support</title>
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

    <hr>

    <table class="table">
        <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">name</th>
            <th scope="col">email</th>
            <th scope="col">type of support</th>
            <th scope="col">branch</th>
            <th scope="col">Status</th>
            <th scope="col">actions</th>
        </tr>
        </thead>

        <tbody>
        @foreach($supports as $support)
            <tr>
                <th scope="row">{{$support->id}}</th>
                <td>{{$support->user->name ?? ''}}</td>
                <td>{{$support->user->email ?? ''}}</td>
                <td>{{$support->type_of_support ?? ''}}</td>
                <td>{{$support->branch ?? ''}}</td>
                <td>{{$support->active ==0 ? 'pending':'accepted'}}</td>
                <td>
                    @if($support->active)
                        <a class='btn btn-danger' href='{{route('delete-support', [$support->id])}}'>
                            Delete</a>
                    @else
                        <a class='btn btn-success' href='{{route('accept-support', [$support->id])}}'>
                            Accept Support</a>
                    @endif
                </td>
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
