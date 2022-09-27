<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css" />
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    

    <style>
        ul {
            margin-left: 80%;
        }

        a {
            text-decoration: none;
        }

        @media only screen and (max-width: 900px) {
            ul {
                margin-left: 65%;
            }
        }
    </style>

  
</head>

<body style="background-color: whitesmoke">

    <nav class="navbar navbar-expand-lg navbar-light" style="background-color:#002F6C;">
       
        <div class="container" style="padding-top: 1%; padding-bottom:1%">

            <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                    style="font-size: 20px; color:white; "></i> Jobs Setup</h1>

        </div>
    </nav>


    <br>
    <br>

    <div class="row">
        <div class="col-lg-12 margin-tb">

            <div>
                <a class="btn btn-primary" href="{{ route('admin') }}" style="margin-left:8%"> Back</a>

            </div>
        </div>
    </div>

    <br>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-1"></div>
        <div class="col-md-10" style=" background-color:white; box-shadow: 0px 10px 50px rgba(173, 170, 170, 0.7);">

            <br>
            <br>

            @if ($message = Session::get('success_message'))
                <div style="width: 700px; margin-left:350px ">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <div class="table-responsive">

                <table class="table table-bordered">
                    <tr style="background-color: black;color:white;font-size:17px">

                        <th>Job Id</th>
                        <th>Job Title</th>
                        <th>Job Role</th>
                        <th>Description</th>
                        <th>Positions</th>
                        <th>Location</th>
                        <th>Annual Salary</th>
                        <th>Apply Link</th>
                        <th>Close Date</th>
                        <th>Active</th>
                        <th width="250px">Action</th>
                    </tr>
                    @foreach ($data as $i)
                        <tr>


                            <td>{{ $i->JobId }}</td>
                            <td>{{ $i->JobTitle }}</td>
                            <td>{{ $i->JobRole }}</td>
                            <td>{{ $i->Description }}</td>
                            <td>{{ $i->Positions }}</td>
                            <td>{{ $i->Location }}</td>
                            <td>{{ $i->AnnualSalary }}</td>
                            <td><a href="https://xsilica.com">{{ $i->ApplyLink }} </a></td>
                            <td>{{ $i->CloseDate }}</td>
                            <td>
                                <input data-id="{{ $i->id }}" class="toggle-class" type="checkbox"
                                    data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active"
                                    data-off="InActive" {{ $i->Active ? 'checked' : '' }}>
                            </td>
                            <td>
                                <form action="{{ route('jobs.destroy', $i->id) }}" method="POST">





                                    <a class="btn btn-primary" href="{{ route('jobs.edit', $i->id) }}">Edit</a>




                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" class="btn btn-danger active">Delete</button>
                                </form>



                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>

        </div>
    </div>






</body>

</html>

<script>
    $(function() {
        $('.toggle-class').change(function() {
            var Active = $(this).prop('checked') == true ? 1 : 0;
            var job_id = $(this).data('id');
            $.ajax({

                type: "GET",
                dataType: "json",
                url: '/active/update',
                data: {
                    'Active': Active,
                    'job_id': job_id
                },
                success: function(data) {
                    console.log(data.success)
                }
            });
        })
    });
</script>
