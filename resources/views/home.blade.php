<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous" />





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>

<body style="background-color:whitesmoke">

    <section style="background-color:#002F6C;">

        <div class="container" style="padding-top: 1.3%; padding-bottom:1.3%">



            <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                    style="font-size: 20px; color:white; margin-right:1%;"></i> Profile Setup</h1>



        </div>

    </section>



    <br><br><br><br>

    <div class="row justify-content-center">

        <div class="col-md-5" style="background-color: white; padding-left:10%;border-radius:10px;margin-left:-4%;box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">



            @if (Session::has('success'))
                <div class="alert alert-success">
                    <ul>
                        <li>{{ Session::get('success') }}</li>
                    </ul>
                </div>
            @endif

            <br><br><br>
            <img src=" {{ url('public/Image/' . Auth::user()->image) }}"
                style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">

            <br><br>

            <div>
                <form action="{{ url('home') }}" method="POST" enctype="multipart/form-data">
                    @csrf


                    
                    <input type="file" name="image">
                    <br>
                    <br>
                    <input type="submit" value="Upload" class=" btn btn-primary active">
                </form>
            </div>
            <br><br><br>
        </div>
    </div>
    
</body>

</html>
