<!DOCTYPE html>


<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.00-alpha 6/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

   

    <link rel="shortcut icon" type="image/jpg"
        href="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" />

    <style>
        table {
            width: 80%;
            border-collapse: collapse;
            border: 3px solid black;
        }


    </style>
</head>

<body style="background-color:whitesmoke">


  <section style="background-color:#002F6C;">

    <div class="container" style="padding-top: 1.7%; padding-bottom:1.7%">



        <h1 style="font-size: 20px; color:white; font-weight:600"> <i class="fa fa-close"
                style="font-size: 20px; color:white; margin-right:1%;"></i> PaySlip Setup</h1>



    </div>

</section>

<br><br>

    <div class="row justify-content-center">
       
        <div class="col-md-6">
            <br><br>
            <div class="flex" style="display:flex">



                <h5 style="margin-left:10%;">{{ Auth::user()->Name }}</h5>
                <img class="logo" src="https://xsilica.com/images/xsilica_broucher_final_modified_05082016-2.png" alt="logo"
                    height="50px" width="200px" style="margin-left: 30%">
            </div>
            <br>
        </div>
    </div>
    <br>

    <div class="row justify-content-center">
        <div class="col-md-7">
            <center>
                <h3> XSILICA SOFTWARE SOLUTIONS PRIVATE LIMITED</h3>
                <center />
                <center>
                    <table border="1" style="background-color:white">


                        <thead>

                            <tr style="font-weight:700">
                                @foreach ($data as $i)
                                    <td scope="col">Employee Code</td>
                                    <td scope="col">{{ $i->employeeid }}</td>
                                    <td scope="col">Department</td>
                                    <td scope="col">{{ $i->department }}</td>
                                @endforeach
                            </tr>

                        </thead>
                        <tbody>
                            <tr style="font-weight:700">
                                @foreach ($value as $i)
                                    <td scope="row">Name</td>
                                    <td>{{ $i->first }}</td>
                                @endforeach
                                @foreach ($bank as $i)
                                    <td>Bank A/c No</td>
                                    <td>{{ $i->accountnumber }}</td>
                                @endforeach
                            </tr>
                            <tr style="font-weight:700">
                                @foreach ($value as $i)
                                    <td scope="row">Location</td>
                                    <td>{{ $i->city }}</td>
                                @endforeach
                                @foreach ($pay as $i)
                                    <td>UAN No</td>
                                    <td>{{ $i->uan }}</td>
                                @endforeach
                            </tr>
                            <tr style="font-weight:700">
                                @foreach ($data as $i)
                                    <td scope="row">Designation</td>
                                    <td>{{ $i->designation }}</td>
                                @endforeach
                                <td>No.of Payable Days</td>
                                <td></td>
                            </tr>
                            <tr>
                                <th colspan="2" style="text-align:center">Earnings</th>
                                <th colspan="2" style="text-align:center">Deductions</th>

                            </tr>
                            <tr>
                                <td scope="row" style="font-weight:700">Description</td>
                                <th>Amount</th>
                                <td style="font-weight:700">Description</td>
                                <th>Amount</th>
                            </tr>
                            <tr style="font-weight:700">
                                @foreach ($pay as $i)
                                    <td>Basic</td>
                                    <td>{{ $i->basicsalary }}</td>
                                    <td>Proffesional Tax</td>
                                    <td>{{ $i->professionaltax }}</td>
                                @endforeach
                            </tr>
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>HRA</td>
                                    <td>{{ $i->hra }}</td>
                                    <td>TDS</td>
                                    <td>{{ $i->tds }}</td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Special Allowances</td>
                                    <td>{{ $i->specialallowance }}</td>
                                    <td>TDS on Bonus</td>
                                    <td>{{ $i->tdsonbonus }}</td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Conveyance</td>
                                    <td>{{ $i->conveyance }}</td>
                                    <td>FoodVochers</td>
                                    <td>{{ $i->foodvouchers }}</td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Meal Coupons</td>
                                    <td>{{ $i->foodvouchers }}</td>
                                    <td>EPF</td>
                                    <td>{{ $i->epf }}</td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Travel Allowance</td>
                                    <td></td>
                                    <td>Loan/Advances deduction</td>
                                    <td></td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Others</td>
                                    <td></td>
                                    <td>Other Deductions</td>
                                    <td>{{ $i->otherdeductions }}</td>
                                </tr style="font-weight:700">
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Bonus/Leave Encashment</td>
                                    <td></td>
                                    <td>ESI</td>
                                    <td>{{ $i->esi }}</td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Medical Allowances</td>
                                    <td>{{ $i->medicalallowance }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td> Arrears</td>
                                    <td></td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Total</td>
                                    <td>{{ $i->grosspay }}</td>
                                    <td></td>
                                    <td></td>
                                </tr>
                            @endforeach
                            @foreach ($pay as $i)
                                <tr style="font-weight:700">
                                    <td>Net Pay</td>
                                    <th colspan="3">{{ $i->netpay }}</th>


                                </tr>
                            @endforeach
                        </tbody>


                    </table>
                    <center />

        </div>
    </div>
    <br>
    <br>
</body>

</html>
