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

    <br>

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

                <form action="{{ route('jobs.store') }}" method="POST">
                    @csrf
                    <br><br>

                    
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Companyname" placeholder="Companyname" name="Companyname" value="{{Auth::user()->Companyname}}"
                            style=" height:50px;  font-size:15px">
                        <label for="Companyname"> Company Name </label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="JobId" class="form-control" id="JobId" placeholder="JobId" name="JobId"
                            style=" height:50px;  font-size:15px">
                        <label for="JobId">Job Id </label>
                    </div>

                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="JobTitle" placeholder="JobTitle" name="JobTitle"
                            style="height:50px;  font-size:15px">
                        <label for="Last_Name"> Job Title</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="JobRole" placeholder="JobRole" name="JobRole"
                            style="height:50px;  font-size:15px">
                        <label for="JobRole"> Job Role</label>
                    </div>
                    <div class="form-floating mb-4">

                        <textarea class="form-control" name="Description" id="Description" cols="30" rows="50"
                            placeholder="Description" style=" height:120px;font-size:15px"></textarea>
                        <label for="Description"> Description</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Mobile_Number" placeholder="Positions"
                            name="Positions" style="height:50px;  font-size:15px">
                        <label for="Positions">Positions </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="Location" placeholder="Location"
                            name="Location" style=" height:50px; font-size:15px">
                        <label for="Location">Location </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="AnnualSalary" placeholder="AnnualSalary"
                            name="AnnualSalary" style="height:50px;  font-size:15px">
                        <label for="AnnualSalary"> Annual Salary</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="number" class="form-control" id="Active" placeholder="Active"
                            name="Active" style="height:50px;  font-size:15px">
                        <label for="Active">Active </label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="text" class="form-control" id="ApplyLink" placeholder="ApplyLink"
                            name="ApplyLink" style="height:50px;  font-size:15px">
                        <label for="ApplyLink"> Apply Link</label>
                    </div>
                    <div class="form-floating mb-4">
                        <input type="date" class="form-control" id="CloseDate" placeholder="CloseDate"
                            name="CloseDate" style="height:50px;  font-size:15px">
                        <label for="CloseDate"> Close Date</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary " style=" width:100%">Add Job</button>
                    <br> <br> <br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
