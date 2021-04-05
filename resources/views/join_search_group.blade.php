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

</head>
<body>
<center>
    @include('menue')

    <img src="iau.png" width ="700" height="200"  ></img><br><br>


    <h1 style="border: 4px solid #000066  ; background-color:#204060 ;">Join Research Group</h1>

    <div class="container">
        @include('layouts.component.flash-message')

        <form method="post" action="{{route('join')}}"
              enctype="multipart/form-data">
            @csrf
            <div class="form-group row">
                <label for="example-text-input" class="col-sm-2 col-form-label">Select group interested</label>
                <div class="col-sm-10">
                    <select class="form-control" name="research_group_id">
                        <option value=""></option>
                        @foreach($research_groups as $research_group)
                            <option {{$research_group->id==user()->research_group_id ? 'selected' : ''}}
                                    value="{{$research_group->id}}">{{$research_group->name}}</option>
                        @endforeach
                    </select>
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
                    <th scope="col">Group</th>
                    <th scope="col">Status</th>
                </tr>
            </thead>

            <tbody>
            @foreach(user()->joinedResearchGroupMany as $joinedResearchGroup)
                <tr>
                    <th scope="row">{{$joinedResearchGroup->id}}</th>
                    <td>{{$joinedResearchGroup->research_group->name ?? ''}}</td>
                    <td>{{$joinedResearchGroup->active ==0?'pending':'accepted'}}</td>
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
