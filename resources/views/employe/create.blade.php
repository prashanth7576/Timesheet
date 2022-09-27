<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />
    <title>XSILICA HRMS</title>

    <style>
        ul {
            margin-left: 80%;
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

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#002F6C;">
        <div class="container-fluid">
            <a href="#">
                <img src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                    height="60px" width="170px" style="margin-left: 30%">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation" style="color: white">
                <span class="navbar-toggler-icon" style="color: white; background-color:white"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
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
                        <li class="nav-item-active">

                            <a href="hello" role="button">
                                <img src=" {{ url('public/Image/' . Auth::user()->image) }}"
                                    style="width:50px; height:50px;  border-radius:50%; ">
                            </a>

                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre
                                style="color:white;">
                                {{ Auth::user()->firstname }}
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
                </ul>
            </div>
        </div>
    </nav>
    <br><br>


   

        <div class="row">
            <div class="col-lg-12 margin-tb">
               
                <div>
                    <a class="btn btn-primary" href="{{ route('admin') }}" style="margin-left:5%"> Back</a>

                </div>
            </div>
        </div>
        <br>
        @if ($errors->any())
            <div class="alert alert-danger">
                <strong>Warning!</strong> Please check input field code<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif


        <div class="row justify-content-center">
       
        <div class="col-md-4"
            style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

            <div>
            
                <form action="{{ route('employe.store') }}" method="POST">
                    @csrf
                    <br><br>

                    <div class="form-floating mb-4" >
                        <input type="name" class="form-control" id="First_Name" placeholder="First Name"
                            name="First_Name" style="height:50px; font-size:15px">
                        <label for="father">First Name</label>
                    </div>

                    <div class="form-floating mb-4" >
                        <input type="text" class="form-control" id="Last_Name" placeholder="LastName"
                            name="Last_Name" style="height:50px; font-size:15px">
                        <label for="Last_Name"> Last Name</label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Company_Name" placeholder="Company Name"
                            name="Company_Name" style="height:50px; font-size:15px">
                        <label for="Company_Name">Company Name </label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Empid" placeholder=" Employe Id"
                            name="Empid" style="height:50px; font-size:15px">
                        <label for="Empid">Employe Id  </label>
                    </div>
                  
                    <div class="form-floating mb-4" >
                        <input type="text" class="form-control" id="Mobile_Number" placeholder="Mobile_Number"
                            name="Mobile_Number" style="height:50px; font-size:15px">
                        <label for="Mobile_Number">Mobile Number </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="email" placeholder="email" name="email"
                            style="height:50px;  font-size:15px">
                        <label for="email">Email </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="employment_type"
                            placeholder="employment_type" name="employment_type"
                            style="height:50px; font-size:15px">
                        <label for="employment_type">Employment Type </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Status" placeholder="Status"
                            name="Status" style="height:50px;  font-size:15px">
                        <label for="Status"> Status</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="company_id" placeholder="company_id"
                            name="company_id" style="height:50px; font-size:15px">
                        <label for="company_id"> company Code</label>
                    </div>
                
                    <br>
                    <br>
                    <button type="submit" class="btn btn-primary" style="width:100%">Add</button>
                    <br> <br> <br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
