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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">

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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat:wght@500&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <title>XSILICA HRMS</title>


</head>

<body style="background-color: whitesmoke">
    <br><br>
    

        <div class="row">
            <div class="col-lg-12 " style="margin-left:7%">

                <div>

                    <h4>Edit Company Details</h4>
                    <a class="btn btn-primary" href="{{ route('admin') }}"> Back</a>
                </div>
            </div>
        </div>

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

        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4"
                style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">
                <div class=" flex justify-center">

                    <form action="{{ route('depts.update', $dept->id) }}" method="POST">
                        @csrf
                        @method('PUT')
                        <br><br>
                        <div class="form-group">
                            <label for="Company_Code">Company_Code</label>
                            <input type="text" class="form-control" name="Company_Code" 
                                value="{{ $dept->Company_Code }}" />
                        </div>

                        <div class="form-group" >
                            <label for="Company_Name">Company_Name</label>
                            <input type="text" class="form-control" name="Company_Name" 
                                value="{{ $dept->Company_Name }}" />
                        </div>
                        <div class="form-group" >
                            <label for="Company_Address">Company_Address</label>
                            <input type="text" class="form-control" name="Company_Address" 
                                value="{{ $dept->Company_Address }}" />
                        </div>
                        <div class="form-group" >
                            <label for="Next_Check_Date">Next_Check_Date</label>
                            <input type="date" class="form-control" name="Next_Check_Date" 
                                value="{{ $dept->Next_Check_Date }}" />
                        </div>
                        <div class="form-group" >
                            <label for="Status">Status</label>
                            <input type="text" class="form-control" name="Status" 
                                value="{{ $dept->Status }}" />
                        </div>
                        <br>
                        <button type="button" class="btn btn-primary btn-lg">Submit</button>

                        <br> <br> <br>
                    </form>
                </div>
            </div>
        </div>


</body>

</html>
