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


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Add Research Group</h1>

    <div class="container">
        @include('layouts.component.flash-message')

        <form method="post" action="{{route('research-group.store')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">name</label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" required></textarea>
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
                    <th scope="col">name</th>
                    <th scope="col">description</th>
                    <th scope="col">options</th>
                </tr>
            </thead>

            <tbody>
            @foreach($research_groups as $research_group)
                <tr>
                    <th scope="row">{{$research_group->id}}</th>
                    <td>{{$research_group->name}}</td>
                    <td>{{$research_group->description}}</td>
                    <td>
                        @if(user()->type == 'admin')
                        <a class='btn btn-danger' href='{{route('research-group.destroy', [$research_group->id])}}'
                           onclick='return confirm("are you sure")' >Delete</a>
                        @endif
                        <a class='btn btn-warning' href='{{route('research-group.edit', [$research_group->id])}}'>
                            Edit</a>

                        <a class='btn btn-success' href='{{route('members', [$research_group->id])}}'>
                            Show Members</a>
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
