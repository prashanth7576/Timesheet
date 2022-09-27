
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://api.mapbox.com/mapbox-gl-js/v2.1.1/mapbox-gl.css" rel="stylesheet" />

    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">


    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.7/lib/darkmode-js.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous">
    </script>


    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.12/css/dataTables.bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>


    <title>Attune Global</title>

    <style>

        ul {
            margin-left: 100%;
        }

        a {
            text-decoration: none;
        }

        h6{
            color:black;padding-left: 5%;margin-top:5%;font-size:15px
        }

        .dropdown-item:hover {

            background-color: #002F6C;
            color: white;
            text-decoration: none;
            padding:8px;

        }

        #dropdown:hover {

            background-color: #002F6C;
            color: white;
            text-decoration: none;
            padding:8px;

        }

        @media only screen and (max-width: 900px) {
            ul {
                margin-left: 58%;
            }

        }
    </style>
</head>

<body style="background-color: whitesmoke">

<section style="background-color:#002F6C;">
        <nav class="navbar navbar-expand-lg  navbar-light fixed-top" style="background-color: #002F6C;height:50px">
            <div class="container" style="margin-top:2%">
                <a href="#">
                    <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                        height="70px" width="200px">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navmenu"
                    style="color:white; background-color:white">
                    <span class="navbar-toggler-icon" style="color:white; background-color:white"></span>
                </button>
                <div class="collapse navbar-collapse" id="navmenu" style="margin-left: 10%;">
                    <ul class="navbar-nav ms-auto">
                        <li class="nav-item" ght: 200;>

                            <input type="text" name="term" placeholder="Find answers, pages, reports and more" id="term"
                                style="height:40px;width:400px;background-color: whitesmoke;border-radius: 8px;padding:10px">

                        </li>
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                        <li class="nav-item-active" style="margin-left: 70%">

                            <a href="hello" role="button">
                                <img src=" {{ url('public/Image/' . Auth::user()->image) }}"
                                    style="width:50px; height:50px;  border-radius:50%; ">
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="color:white;">
                                {{ Auth::user()->Companyname }}
                            </a>

                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }} 
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                    @csrf
                                </form>

                                <a href="{{route('change-password')}}">
                                    <h6 id="dropdown"> Change
                                        Password </h6>
                                </a>
                                <a  href="{{url('home')}}">
                                    <h6 id="dropdown" > Upload Image
                                    </h6>
                                </a>

                            </div>
                        </li>  

                            
                        @endguest

                        <br>
                        <br>
                       


                    </ul>
                </div>
            </div>

        </nav>

<br>
        
        <hr style="width: 88%; margin-left: 5%;">

 
</section>
<br>

<div class="container" >
<div class="row justify-content-center">
    
    <div class="col-md-10"style="background-color:  rgb(212, 212, 215);border-radius:10px;padding-top:2%;padding-bottom:2%;">
        <form action="emp " method="GET" role="search">
            <div style="padding-top:2%; display:flex">

                <label for="search" style="margin-left: 2%">Search: </label>

                <input type="text" name="term" placeholder="" id="term"
                    style="height:40px;width:400px;background-color: whitesmoke;border-radius: 8px; margin-left:6%; width:30%">





            </div>

            <button type="submit" name="search" id="search" class="btn btn-success "
            style="font-size: 20px; margin-left:70%; width:18%; margin-bottom:2%">Find</button>
        </form>

    </div>
</div>

                   <br><br><br>

        <div class="row justify-content-center">
            <div class="col-md-10" >
                <div class="card">
                    

                    <div class="table-responsive">


                    <table class="table table-stripped">
                        <thead>
                            <tr>
                                
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Company Name</th>
                                <th>Employe Id</th>
                                <th>Mobile Number</th>
                                <th>Email</th>
                                <th>Employement Type</th>
                                <th>Status</th>
                                <th>Company Code</th>
                            </tr>
                        </thead>
                        <tbody id="tbody">
                           
                            @foreach($data as $i)
                            <tr>
                               
                                <td>{{$i->First_Name}}</td>
                                <td>{{$i->Last_Name}}</td>
                                <td>{{$i->Company_Name}}</td>
                                <td>{{$i->Empid}}</td>
                                <td>{{$i->Mobile_Number}}</td>
                                <td>{{$i->email}}</td>
                                <td>{{$i->employment_type}}</td>
                                <td>{{$i->Status}}</td>
                                <td>{{$i->company_id}}</td>
                            </tr>
                            @endforeach
                            
                        </tbody>
                    </table>
                    </div>

                </div>
            </div>
        </div>
    </div>
    </div>
  





</body>

</html>