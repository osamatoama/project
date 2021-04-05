<style>

    .navbar{
        background-color: #001133 !important;
    }
    .navbar a{
        color: white;
    }
    .navbar .dropdown-menu a{
        color: black;
    }
    body{
        background-color: #DCD2C0 !important;
    }
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


<nav class="navbar navbar-expand-lg bg-light">
    <a class="navbar-brand" href="{{url('')}}">Home</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">

            <li class="nav-item active">
                <a class="nav-link" href="{{route('about')}}">About</a>
            </li>
            @if(auth()->check()&&user()->type == 'admin')
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com"
                       id="navbarDropdownMenuLinkAdmin" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Administration
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLinkAdmin">
                        <a class="dropdown-item" href="{{route('user.index')}}?type=student">Manage Students</a>
                        <a class="dropdown-item" href="{{route('user.index')}}?type=faculty">Manage Faculty members</a>
                        <a class="dropdown-item" href="{{route('research-group.index')}}">Manage research groups</a>
                        <a class="dropdown-item" href="{{route('manage-support-requests')}}">Manage Support Requests</a>
                    </div>
                </li>
            @endif
            <li class="nav-item active">
                <a class="nav-link" href="{{url('')}}">Accredation</a>
            </li>


            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Depatments
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                    <a class="dropdown-item" href="{{route('computing-depatment')}}">Computing Depatment</a>
                    <a class="dropdown-item" href="{{route('administrative-sciences-depatment')}}">Administrative Sciences Depatment</a>
                    <a class="dropdown-item" href="{{route('finance-department')}}">Finance Depatment</a>
                </div>
            </li>
            @if(auth()->check()&&user()->type == 'admin')
                <li class="nav-item active">
                    <a class="nav-link" href="{{route('research-group.index')}}">research groups</a>
                </li>
            @elseif (auth()->check()&&user()->type == 'student')

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('join-research-group')}}">Join research group</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('support')}}">Request Support</a>
                </li>

            @endif

            @if (user()->type == 'faculty')

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('research-group.index')}}">Manage research groups</a>
                </li>

                <li class="nav-item active">
                    <a class="nav-link" href="{{route('manage-support-requests')}}">Manage Support Requests</a>
                </li>

            @endif



            <li class="nav-item active">
                @auth
                    <a class="nav-link" href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();">Log out</a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST"
                          style="display: none;">
                        {{ csrf_field() }}
                    </form>
                @else
                    <a class="nav-link" href="{{route('login')}}" class=" " name="button"> Logn in</a>
                @endauth
            </li>

        </ul>
    </div>
</nav>
