<html>
    <head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </head>
    <body>
        <div>
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
                <div class="container-fluid">
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <a class="navbar-brand" href="#">Navbar</a>
                    </ul>
                    <div class="d-flex">
                    @if(Session::has('logged'))
                        <ul class="navbar-nav">
                            <li class="nav-item ">
                            <a href="{{route('logout')}}" class="nav-link" >Logout</a>
                            </li>
                        </ul>
                    @else
                        <ul class="navbar-nav">
                            <li class="nav-item">
                            <a href="{{route('student.registration')}}" class="nav-link " aria-current="page" >Register</a>
                            </li>
                            <li class="nav-item ">
                            <a href="{{route('student.login')}}" class="nav-link" >Login</a>
                            </li>
                        </ul>
                    @endif
                    </div>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
    </body>
</html>