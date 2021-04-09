<!DOCTYPE html>
<html>
<head>
    <title>Community College</title>
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
    @include('menue')

    <img src="{{asset('iau.png')}}" width ="700" height="200"  ></img><br><br>


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Research Group Members</h1>

    <div class="container">
        <div class="text-center mt-3">
            <a href="{{route('cancel-home')}}" class="btn btn-warning waves-effect waves-light">Cancel
            </a>

            <a href="{{ url()->previous() }}" class="btn btn-primary waves-effect waves-light">Go Back
            </a>
        </div>
        @include('layouts.component.flash-message')
<hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">student name</th>
                    <th scope="col">student email</th>
                    <th scope="col">research group name</th>
                    <th scope="col">status</th>
                    <th scope="col">options</th>
                </tr>
            </thead>

            <tbody>
            @foreach($members as $member)
                <tr>
                    <th scope="row">{{$member->id}}</th>
                    <td>{{$member->user->name ?? ''}}</td>
                    <td>{{$member->user->email ?? ''}}</td>
                    <td>{{$member->research_group->name ?? ''}}</td>
                    <td>{{$member->active==0 ? 'pending' : 'active'}}</td>
                    <td>
                        @if($member->active)
                            <a class='btn btn-danger' href='{{route('delete-join-research', [$member->id])}}'>
                                Delete</a>
                        @else
                            <a class='btn btn-success' href='{{route('accept-join-research', [$member->id])}}'>
                                Accept To Join</a>
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
