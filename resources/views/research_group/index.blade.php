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


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;" >Research Group</h1>

    <div class="container">
        @include('layouts.component.flash-message')
        @if(user()->type == 'admin')
        <form method="post" action="{{route('research-group.store')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Group Name *</label>
                <div class="col-sm-10">
                    <input class="form-control" name="name" type="text" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Name *</label>
                <div class="col-sm-10">
                    <input class="form-control" name="admin_name" type="text" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Admin Email *</label>
                <div class="col-sm-10">
                    <input class="form-control" name="admin_email" type="email" required>
                </div>
            </div>
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <textarea class="form-control" name="description" required></textarea>
                </div>
            </div>
            <div class="text-center mt-3">
                <a href="{{route('cancel-home')}}" class="btn btn-warning waves-effect waves-light">Cancel
                </a>

                <button type="submit" class="btn btn-primary waves-effect waves-light">Create
                </button>
            </div>
        </form>
        @endif
<hr>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">Admin Name</th>
                    <th scope="col">Admin Email</th>
                    <th scope="col">Description</th>
                    <th scope="col">Options</th>
                </tr>
            </thead>

            <tbody>
            @foreach($research_groups as $research_group)
                <tr>
                    <th scope="row">{{$research_group->id}}</th>
                    <td>{{$research_group->name}}</td>
                    <td>{{$research_group->admin_name}}</td>
                    <td>{{$research_group->admin_email}}</td>
                    <td>{{$research_group->description}}</td>
                    <td>
                        @if(user()->type == 'admin')
                            <a class='btn btn-danger' href='{{route('research-group.destroy', [$research_group->id])}}'
                               onclick='return confirm("are you sure")' >Delete</a>
                            <a class='btn btn-warning' href='{{route('research-group.edit', [$research_group->id])}}'>
                                Edit</a>
                        @elseif(user()->type == 'faculty')
                            <a class='btn btn-warning' href='{{route('join-faculty', [$research_group->id])}}'>
                                Join</a>
                        @endif

                        <a class='btn btn-success' href='{{route('members', [$research_group->id])}}'>
                            Manage Research Group</a>
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
