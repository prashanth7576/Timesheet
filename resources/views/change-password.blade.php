<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
    integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
    

    <body style="background-color:whitesmoke">

        <section style="background-color:#002F6C;">

            <div class="container" style="padding-top: 1%; padding-bottom:1%">
    
    
    
                <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                        style="font-size: 20px; color:white; margin-right:1%;"></i> Password Setup</h1>
    
    
    
            </div>
    
        </section>

        <div>
            <br>
            <br>
            <br>
            <div class="row">
<div class="col-md-4">
</div>
            <div class="col-md-4" style="background-color:white; box-shadow: 0px 10px 50px rgba(180, 174, 174, 0.7);">
    
                <form method="POST" action="{{route('update-password')}}" class="form-pill">
       @csrf
       <div class="card-body">
                @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status')}}
       </div>
       @endif
                <div class="form-group">
                    <label for="exampleFormControlInput3">Current Password</label>
                    <input type="password" name="old_password" class="form-control" id="current_password" placeholder="Current password" >
                    @error('old_password')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
       </div>
       <br>
       <div class="form-group">
                    <label for="exampleFormControlInput3">New Password</label>
                    <input type="password" name="new_password" class="form-control" id="password" placeholder="New password" >
                    @error('new_password')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
       </div>
       <br>
       <div class="form-group">
                    <label for="exampleFormControlInput3">Confirm Password</label>
                    <input type="password" name="new_password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm password" >
                    @error('new_password_confirmation')
                    <span class="text-danger">{{$message}} </span>
                    @enderror
       </div>
       <br><br>
       
       <button type="submit" class="btn btn-primary btn-default active">Save</button>
       
       </form>
       </div>
       </div>
        </div>

        </div>

        
    </body>
</html>