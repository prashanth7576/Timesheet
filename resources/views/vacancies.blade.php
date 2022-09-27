<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />
    <title>Document</title>

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
                margin-left: 52%;
            }
            .navbar{
                width: 100%;
            }

          

          

           

        }

        @media only screen and (max-width:480px){
            .navbar{
                width: 91%;
            }

            .card{
                width: 15rem;
            }

            .col-md-4{
                margin-left: -6%;
            }

            .active{
                margin-left: 10%;
            }

        }


       a{
        text-decoration: none;
       }

       p{
        font-size: 15px;
        line-height: 22px;
        height: 65px;
        overflow: hidden;
       }
       .showContent p{
        height: auto;
       }
       .showContent.readmore-btn{
        background-color: red

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
                </ul>
            </div>
        </div>
    </nav>

    <br><br>

    <div class="row justify-content-center">
        <div class="col-md-8" style="display: flex">
            
            <p class="active"> <b>Active Jobs:</b> <span style="font-weight:600; font-size:17px"> {{$active}} </span> </p>
            <p class="inactive" style="margin-left: 10%"> <b>Inactive Jobs: </b>  <span style="font-weight:600; font-size:17px"> {{$inactive}} </span> </p>
        </div>
    </div>



    <div class = 'container' style="  margin: auto; margin-top: 20px;">
        <div class = 'row'>
            @foreach ($data as $i)
            @if ($i->Active == 1)
                
        
            <div class = 'col-md-4 col-lg-4' style="margin-bottom: 20px;">
              <div class="card" style="width:21rem; height:auto;   background-color:white;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);  border-top-left-radius:15px;  border-bottom-left-radius:15px;  border-bottom-right-radius:15px ">
              
                <div class="card-header" style="background-color:white; height:3rem;">
                    {{ $i->JobId }}
                </div>

                <div class="card-body">

                    {{$i->JobTitle}}
                    <br>
                    {{$i->JobRole}}
                    <br>
                    {{$i->Positions}}
                    <br>
                    {{$i->Location}}
                    <br>
                    {{$i->AnnualSalary}}
                    <br>
                    {{$i->CloseDate}}
                    <br>
                    {{$i->ApplyLink}}
                    <br>
                    <p>{{$i->Description}}</p>
                    <a style="background-color:cadetblue; border-radius:7px; color:white; padding:10px" href="javascript:void();" class="readmore-btn">Read More</a>
                  

                </div>

              
                </div>
            </div>
            @endif

            @endforeach


           
        </div>
    </div>


    
</body>
</html>


  <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

  <script>
    $(".readmore-btn").on('click', function(){
      $(this).parent().toggleClass("showContent")

      var replaceText = $(this).parent().hasClass("showContent") ? "Read Less" : "Read More";
      $(this).text(replaceText);
    });
  </script>
