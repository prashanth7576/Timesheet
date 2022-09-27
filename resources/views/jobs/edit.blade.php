<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
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







    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@1,300&family=Montserrat:wght@500&family=Quintessential&family=Ubuntu+Mono&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />



    <title>XSILICA HRMS</title>


</head>

<body style="background-color: whitesmoke">




    <div>

        <section style="background-color:#002F6C;">

            <div class="container">



                <h1 style="font-size: 18px; color:white; font-weight:600"> <i class="fa fa-close"
                        style="font-size: 20px; color:white; margin-right:1%;"></i> Add Job Setup</h1>



            </div>

        </section>

        <br><br><br>

        <div class="row">
            <div class="col-lg-12 margin-tb">

                <div>
                    <a class="btn btn-primary" href="{{ route('admin') }}" style="margin-left:5%"> Back</a>

                </div>
            </div>
        </div>
        <br>
        
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
        <div class="col-md-3">
        </div>
        <div class="col-md-5"
            style="background-color: white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7); border-radius:10px">

            <div class=" flex justify-center">

                <form action="{{ route('jobs.update', $job->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <br><br>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="Companyname" placeholder="Companyname"
                            name="Companyname" value="{{ Auth::user()->Companyname }}"
                            style=" padding-top:30px; font-size:15px">
                        <label for="Companyname"> Company Name </label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="JobId" class="form-control" id="JobId" placeholder="JobId" name="JobId"
                            value="{{ $job->JobId }}" style=" padding-top:30px; font-size:15px">
                        <label for="JobId">Job Id </label>
                    </div>

                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="JobTitle" placeholder="JobTitle" name="JobTitle"
                            value="{{ $job->JobTitle }}" style=" padding-top:30px; font-size:15px">
                        <label for="Last_Name"> Job Title</label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="JobRole" placeholder="JobRole" name="JobRole"
                            value="{{ $job->JobRole }}" style="padding-top:30px; font-size:15px">
                        <label for="JobRole"> Job Role</label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="Description" placeholder="Description"
                            name="Description" value="{{ $job->Description }}" style="padding-top:30px; font-size:15px">
                        <label for="Description"> Description</label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="Mobile_Number" placeholder="Positions"
                            name="Positions" value="{{ $job->Positions }}" style="padding-top:30px; font-size:15px">
                        <label for="Positions">Positions </label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="Location" placeholder="Location"
                            name="Location" value="{{ $job->Location }}" style=" padding-top:30px; font-size:15px">
                        <label for="Location">Location </label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="AnnualSalary" placeholder="AnnualSalary"
                            name="AnnualSalary" value="{{ $job->AnnualSalary }}"
                            style="padding-top:30px; font-size:15px">
                        <label for="AnnualSalary"> Annual Salary</label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="Active" placeholder="Active"
                            name="Active" value="{{ $job->Active }}" style="padding-top:30px; font-size:15px">
                        <label for="Active">Active </label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="text" class="form-control" id="ApplyLink" placeholder="ApplyLink"
                            name="ApplyLink" value="{{ $job->ApplyLink }}" style="padding-top:30px; font-size:15px">
                        <label for="ApplyLink"> ApplyLink</label>
                    </div>
                    <div class="form-floating mb-4" style="margin-left:5%">
                        <input type="date" class="form-control" id="CloseDate" placeholder="CloseDate"
                            name="CloseDate" value="{{ $job->CloseDate }}" style="padding-top:30px; font-size:15px">
                        <label for="CloseDate"> Close Date</label>
                    </div>
                    <br>
                    <button type="submit" class="btn btn-primary" style="margin-left:5%">Add</button>
                    <br> <br> <br>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
