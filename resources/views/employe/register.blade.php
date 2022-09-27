<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"
        integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"
        integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

    <script src="https://cdn.tailwindcss.com"></script>

    <title>XSILICA HRMS</title>



</head>

<body style="font-family: 'Montserrat', sans-serif;">

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
                <a class="btn btn-primary" href="{{ route('admin') }}" style="margin-left:8%"> Back</a>

            </div>
        </div>
    </div>

    <div class="row justify-content-center">


        <div class="col-md-6"
            style="margin-top: 2%;background-color:white;width:500px;margin-bottom:5%;border-radius:10px; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
            <div class="" style="padding-top:4%;padding-bottom:4%;border-radius:25px">
                <div class="flex justify-center">
                    <img src="https://imagizer.imageshack.com/img923/5138/bRZo8P.png" alt="logo" height="170px"
                        width="150px" style="align-item:center">

                </div>
                <br>
                <div class="flex justify-center" style="margin-top: 0%">
                    <div class="w-6/12    rounded-lg">


                        @if (session('status'))
                            <div class="bg-red-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if (session('message'))
                            <div class="alert alert-success-500 p-4 rounded-lg mb-6 text-white text-center">
                                {{ session('message') }}
                            </div>
                        @endif

                        @if ($message = Session::get('success'))
                            <div class="alert alert-success" style="width: 375px;  ">
                                <p>{{ $message }}</p>
                            </div>
                        @endif

                        <form action="{{ url('registration') }}" method="post">
                            @csrf

                            <div class="mb-4">
                                <label for="Name"> Employe Name </label>
                                <input type="text" name="Name" id="Name" placeholder="Enter Employe Name"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Name') border-red-500 @enderror"
                                    >

                                @error('Name')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="empid"> Employe Id </label>
                                <input type="text" name="empid" id="empid" placeholder="Enter Employe Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('empid') border-red-500 @enderror"
                                    >

                                @error('empid')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="role"> Role </label>
                                <input type="text" name="role" id="role" placeholder="Enter Role/Position"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('Companycode') border-red-500 @enderror"
                                    >

                                @error('role')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="email">Email Id</label>
                                <input type="text" name="email" id="email" placeholder="Enter Email Id"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('email') border-red-500 @enderror"
                                    value="{{ old('email') }}">

                                @error('email')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>





                            <div class="mb-4">
                                <label>Password</label>
                                <input type="password" name="password" id="password" placeholder="Choose a password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password') border-red-500 @enderror"
                                    value="">

                                @error('password')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                            <div class="mb-4">
                                <label for="password_confirmation">Re-enter Password</label>
                                <input type="password" name="password_confirmation" id="password_confirmation"
                                    placeholder="Re-enter password"
                                    class="bg-gray-100 border-2 w-full p-2 rounded-lg @error('password_confirmation') border-red-500 @enderror"
                                    value="">

                                @error('passwor_confirmation')
                                    <div class="text-red-500 mt-2 text-sm">
                                        {{ $message }}
                                    </div>
                                @enderror
                            </div>

                          
                            


                            <div class="flex justify-center">
                                <button type="submit"
                                    class=" bg-blue-500 text-white px-2 py-2 rounded font-medium w-45"
                                    style="background-color:#052CA3;width:100px">Register</button>
                            </div>
                            <br>
                        </form>


                    </div>
                </div>


            </div>
        </div>
    </div>

</body>

</html>
