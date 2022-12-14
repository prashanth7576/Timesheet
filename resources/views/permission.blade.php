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

    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />


    <title>Attune Global</title>

    <style>

    </style>
</head>

<body style="background-color: whitesmoke">

    <section style="background-color:#002F6C;">
       
            <div class="container">


               
                <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close" style="font-size: 20px; color:white; margin-right:2%; margin-left:-12%"></i> Employee Setup</h1>

               
                
            </div>

    </section>

    <br>
    <br>



    <section>

        <div class="row justify-content-center">

           

            <div class="col-md-4" style="background-color: white; border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);margin-left:-8%">

                <p class="text-center" style="font-size: 20px; font-weight:600;padding-top:2%">Login as a Company or as a Vendor</p>
                
                

                <br>
                <br>

                <div style="display: flex; margin-bottom:10%">

                    <div style="background-color: white; border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); width:250px; margin-left:3%">
                        <br>

                        <a href="admin">  
                        <i class='glyphicon glyphicon-briefcase' style="color: rgb(17, 96, 179); background-color:rgb(205, 225, 245);border-radius:50%; font-size:20px; padding:13px;margin-left:10%; margin-bottom:2%"></i>
                        </a> 

                          

                        <div style="margin-left: 8%">

                        <h3 style="font-size: 18px"> Company </h3>

                        <h5 style="color: rgb(124, 117, 117); font-size:15px"> Login As a Company </h5>

                        </div>

                    </div>

                    <div style="background-color: white; border-radius:10px;  box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); width:250px;margin-left:12%">
                        <br>

                        <a href="{{url('vendor.index')}}">  
                        <i class='glyphicon glyphicon-user' style="color: rgb(17, 96, 179); background-color:rgb(205, 225, 245);border-radius:50%; font-size:20px; padding:13px;margin-left:10%; margin-bottom:2%"></i>
                        </a> 

                        <div style="margin-left: 8%">

                        <h3 style="font-size: 18px"> Vendor </h3>

                        <h5 style="color: rgb(124, 117, 117); font-size: 15px"> Login As a Vendor </h5>
                        </div>

                    </div>


                </div>

            </div>



        </div>
        
    </section>


    



</body>

</html>