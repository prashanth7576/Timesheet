<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
    <link rel="stylesheet" href="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/start/jquery-ui.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">


    <title>Document</title>

    <script>
        $(document).ready(function() {

            var weekStart, weekEnd, weekTwo;

            function completeWeek() {
                window.setTimeout(function() {
                    $(".ui-datepicker-current-day a").addClass("ui-state-active");
                });
            }




            $("#weekpicker").datepicker({
                showOtherMonths: true,
                selectOtherMonths: true,
                onSelect: function(selectedDate, instance) {


                    var myDate = new Date(selectedDate);


                    weekStart = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay());


                    weekEnd = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 6);


                    weekTwo = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 1);


                    weekThree = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 2);


                    weekFour = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 3);

                    weekFive = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 4);

                    weekSix = new Date(myDate.getFullYear(), myDate.getMonth(), myDate.getDate() -
                        myDate.getDay() + 5);

                    var dateFormat = "dd/mm/yy";
                    $("#start").val($.datepicker.formatDate(dateFormat, weekStart));
                    $("#two").val($.datepicker.formatDate(dateFormat, weekTwo));
                    $("#three").val($.datepicker.formatDate(dateFormat, weekThree));
                    $("#four").val($.datepicker.formatDate(dateFormat, weekFour));
                    $("#five").val($.datepicker.formatDate(dateFormat, weekFive));
                    $("#six").val($.datepicker.formatDate(dateFormat, weekSix));
                    $("#end").val($.datepicker.formatDate(dateFormat, weekEnd));

                    completeWeek();

                },
                beforeShowDay: function(date) {
                    var cssClass = "";
                    if (date >= weekStart && date <= weekEnd)
                        cssClass = "ui-datepicker-current-day";
                    return [true, cssClass];
                },
                onChangeMonthYear: function() {
                    completeWeek();
                }


            });

        });
    </script>




</head>

<body>
<br><br><br>
    <div class="row">
        <div class="col-md-3" style="margin-left: 5%">
             <br><br><br><br>
            <div id="weekpicker"></div>

        </div>

        <div class="col-md-8">

            <form action="sample" method="POST">
                @csrf
           
            <div class="table-responsive">

                <table class="table">
                    <thead>
                        <tr>
                            <th></th>

                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="start"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="two"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="three"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="four"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="five"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="six"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                            <th scope="col"><div style="padding:2px"><input type="text" name="Date[]" id="end"
                                style="width:85px;text-align:center;border:none">
                        </div></th>
                        </tr>

                        <tr>
                            <th></th>
                            <th scope="col">Sun</th>
                            <th scope="col">Mon</th>
                            <th scope="col">Tue</th>
                            <th scope="col">Wed</th>
                            <th scope="col">Thur</th>
                            <th scope="col">Fri</th>
                            <th scope="col">Sat</th>
                        </tr>

                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">Regular</th>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularSun"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularMon"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularTue"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularWed"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularThu"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularFri"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Regular[]" id="regularSat"
                                    style="width:60px;text-align:center;border:none">
                            </div>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">Overtime</th>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeSun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>

                            <td>
                                <div style="padding:2px">
                                    <input type="text" name="Overtime[]" id="overTimeMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Overtime[]" id="overTimeSat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">Sick</th>

                            <td>
                                <div style="padding:2px"><input type="text" name="Sick[]" id="sickSun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Sick[]" id="sickSat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>


                        </tr>
                        <tr>
                            <th scope="row">Vacation</th>

                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationSun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Vacation[]" id="vacationSat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>



                        </tr>

                        <tr>
                            <th scope="row">Holiday</th>

                            <td>
                                <div style="padding:2px"><input type="text" name="Holiday[]" id="holidaySun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidayMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidayTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidayWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidayThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidayFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="Holiday[]" id="holidaySat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>



                        </tr>

                        <tr>
                            <th scope="row">Unpaid</th>

                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidSun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Unpaid[]" id="unpaidSat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>



                        </tr>

                        <tr>
                            <th scope="row">other</th>

                            <td>
                                <div style="padding:2px"><input type="text" name="other[]" id="otherSun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherMon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherTue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherWed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherThu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherFri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text"  name="other[]" id="otherSat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>




                        </tr>

                        <tr>
                            <th scope="row">Total</th>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="sun"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="mon"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="tue"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="wed"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="thu"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="fri"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>
                            <td>
                                <div style="padding:2px"><input type="text" name="Total[]" id="sat"
                                        style="width:60px;text-align:center;border:none">
                                </div>
                            </td>


                        </tr>







                    </tbody>
                </table>


            </div>

            <br><br>

            <div class="text-center">

                <label style="font-size:20px; font-weight:600;">Total Hours reported: <input id="sum"
                        type="text" style="font-size:20px; width:20%; padding-left: 2%;"> </label>

                <button id="submit" class="btn btn-success">Submit</button>

            </div>
            <br><br>

        </form>

        </div>
    </div>


</body>

</html>

<script>

    
    var btn = document.getElementById('submit');

    btn.addEventListener("click", sunday);
    btn.addEventListener("click", monday);
    btn.addEventListener("click", thuesday);
    btn.addEventListener("click", wednesday);
    btn.addEventListener("click", thursday);
    btn.addEventListener("click", friday);
    btn.addEventListener("click", saturday);

    btn.addEventListener("click", total);


    //Sunday Data
    document.getElementById('regularSun').value = '0';
    function sunday() {

  
        document.getElementById('overTimeSun').value;
        document.getElementById('sickSun').value;
        document.getElementById('vacationSun').value;
        document.getElementById('holidaySun').value;
        document.getElementById('unpaidSun').value;
        document.getElementById('otherSun').value;



        const regularsun = parseInt(document.getElementById('regularSun').value);
        const oversun = parseInt(document.getElementById('overTimeSun').value);

        const sicksun = parseInt(document.getElementById('sickSun').value);
        const vacationsun = parseInt(document.getElementById('vacationSun').value);

        const holidaysun = parseInt(document.getElementById('holidaySun').value);

        const unpaidsun = parseInt(document.getElementById('unpaidSun').value);
        const othersun = parseInt(document.getElementById('otherSun').value);

        const resultsun = regularsun + oversun + sicksun + vacationsun + holidaysun + unpaidsun + othersun;

        const totalsun = document.getElementById('sun').value = resultsun;

    }

    //Monday Data

    document.getElementById('regularMon').value = '8';

    function monday() {


        document.getElementById('overTimeMon').value;
        document.getElementById('sickMon').value;
        document.getElementById('vacationMon').value;
        document.getElementById('holidayMon').value;
        document.getElementById('unpaidMon').value;
        document.getElementById('otherMon').value;



        const regular = parseInt(document.getElementById('regularMon').value);
        const over = parseInt(document.getElementById('overTimeMon').value);

        const sick = parseInt(document.getElementById('sickMon').value);
        const vacation = parseInt(document.getElementById('vacationMon').value);

        const holiday = parseInt(document.getElementById('holidayMon').value);

        const unpaid = parseInt(document.getElementById('unpaidMon').value);
        const other = parseInt(document.getElementById('otherMon').value);

        const result = regular + over + sick + vacation + holiday + unpaid + other;

        const total = document.getElementById('mon').value = result;

    }

    //Tuesday Data

    document.getElementById('regularTue').value = '8';

    function thuesday() {

      

        document.getElementById('overTimeTue').value;
        document.getElementById('sickTue').value;
        document.getElementById('vacationTue').value;
        document.getElementById('holidayTue').value;
        document.getElementById('unpaidTue').value;
        document.getElementById('otherTue').value;



        const regulartue = parseInt(document.getElementById('regularTue').value);
        const overtue = parseInt(document.getElementById('overTimeTue').value);

        const sicktue = parseInt(document.getElementById('sickTue').value);
        const vacationtue = parseInt(document.getElementById('vacationTue').value);

        const holidaytue = parseInt(document.getElementById('holidayTue').value);

        const unpaidtue = parseInt(document.getElementById('unpaidTue').value);
        const othertue = parseInt(document.getElementById('otherTue').value);

        const resulttue = regulartue + overtue + sicktue + vacationtue + holidaytue + unpaidtue + othertue;

        const totaltue = document.getElementById('tue').value = resulttue;

    }

    //Wednesday Data

    document.getElementById('regularWed').value = '8';

    function wednesday() {

      
        document.getElementById('overTimeWed').value;
        document.getElementById('sickWed').value;
        document.getElementById('vacationWed').value;
        document.getElementById('holidayWed').value;
        document.getElementById('unpaidWed').value;
        document.getElementById('otherWed').value;



        const regularwed = parseInt(document.getElementById('regularWed').value);
        const overwed = parseInt(document.getElementById('overTimeWed').value);

        const sickwed = parseInt(document.getElementById('sickWed').value);
        const vacationwed = parseInt(document.getElementById('vacationWed').value);

        const holidaywed = parseInt(document.getElementById('holidayWed').value);

        const unpaidwed = parseInt(document.getElementById('unpaidWed').value);
        const otherwed = parseInt(document.getElementById('otherWed').value);

        const resultwed = regularwed + overwed + sickwed + vacationwed + holidaywed + unpaidwed + otherwed;

        const totalwed = document.getElementById('wed').value = resultwed;

    }

    //Thursday Data

    document.getElementById('regularThu').value = '8';

    function thursday() {

      
        document.getElementById('overTimeThu').value;
        document.getElementById('sickThu').value;
        document.getElementById('vacationThu').value;
        document.getElementById('holidayThu').value;
        document.getElementById('unpaidThu').value;
        document.getElementById('otherThu').value;



        const regularthu = parseInt(document.getElementById('regularThu').value);
        const overthu = parseInt(document.getElementById('overTimeThu').value);

        const sickthu = parseInt(document.getElementById('sickThu').value);
        const vacationthu = parseInt(document.getElementById('vacationThu').value);

        const holidaythu = parseInt(document.getElementById('holidayThu').value);

        const unpaidthu = parseInt(document.getElementById('unpaidThu').value);
        const otherthu = parseInt(document.getElementById('otherThu').value);

        const resultthu = regularthu + overthu + sickthu + vacationthu + holidaythu + unpaidthu + otherthu;

        const totalthu = document.getElementById('thu').value = resultthu;

    }

    //Friday Data

    document.getElementById('regularFri').value = '8';

    function friday() {

      
        document.getElementById('overTimeFri').value;
        document.getElementById('sickFri').value;
        document.getElementById('vacationFri').value;
        document.getElementById('holidayFri').value;
        document.getElementById('unpaidFri').value;
        document.getElementById('otherFri').value;



        const regularfri = parseInt(document.getElementById('regularFri').value);
        const overfri = parseInt(document.getElementById('overTimeFri').value);

        const sickfri = parseInt(document.getElementById('sickFri').value);
        const vacationfri = parseInt(document.getElementById('vacationFri').value);

        const holidayfri = parseInt(document.getElementById('holidayFri').value);

        const unpaidfri = parseInt(document.getElementById('unpaidFri').value);
        const otherfri = parseInt(document.getElementById('otherFri').value);

        const resultfri = regularfri + overfri + sickfri + vacationfri + holidayfri + unpaidfri + otherfri;

        const totalfri = document.getElementById('fri').value = resultfri;

    }

    //Saturday Data

    document.getElementById('regularSat').value = '0';

    function saturday() {


        document.getElementById('overTimeSat').value;
        document.getElementById('sickSat').value;
        document.getElementById('vacationSat').value;
        document.getElementById('holidaySat').value;
        document.getElementById('unpaidSat').value;
        document.getElementById('otherSat').value;



        const regularsat = parseInt(document.getElementById('regularSat').value);
        const oversat = parseInt(document.getElementById('overTimeSat').value);

        const sicksat = parseInt(document.getElementById('sickSat').value);
        const vacationsat = parseInt(document.getElementById('vacationSat').value);

        const holidaysat = parseInt(document.getElementById('holidaySat').value);

        const unpaidsat = parseInt(document.getElementById('unpaidSat').value);
        const othersat = parseInt(document.getElementById('otherSat').value);

        const resultsat = regularsat + oversat + sicksat + vacationsat + holidaysat + unpaidsat + othersat;

        const totalsat = document.getElementById('sat').value = resultsat;

    }



    function total() {
        const Monday = parseInt(document.getElementById('mon').value);
        const Tuesday = parseInt(document.getElementById('tue').value);
        const Wednesday = parseInt(document.getElementById('wed').value);
        const Thursday = parseInt(document.getElementById('thu').value);
        const Friday = parseInt(document.getElementById('fri').value);
        const Saturday = parseInt(document.getElementById('sat').value);
        const Sunday = parseInt(document.getElementById('sun').value);


        const sample = document.getElementById('sum').value = Monday + Tuesday + Wednesday + Thursday + Friday +
            Saturday + Sunday;

    }
   


    //Total Data

    /*
    
     const regulartotal = regular + regulartue + regularwed + regularthu + regularfri + regularsat + regularsun;
     document.getElementById('regularTotal').innerHTML=regulartotal;
    
     const overtimetotal = over + overtue + overwed + overthu + overfri + oversat + oversun;
     document.getElementById('overTimeTotal').innerHTML=overtimetotal;
    
     
     const sicktotal = sick + sicktue + sickwed + sickthu + sickfri + sicksat +sicksun;
     document.getElementById('sickTotal').innerHTML=sicktotal;
    
     const vacationtotal = vacation + vacationtue + vacationwed + vacationthu + vacationfri + vacationsat + vacationsun;
     document.getElementById('vacationTotal').innerHTML=vacationtotal;
    
     const holidaytotal = holiday + holidaytue + holidaywed + holidaythu + holidayfri + holidaysat + holidaysun;
     document.getElementById('holidayTotal').innerHTML=holidaytotal;
    
     const unpaidtotal = unpaid + unpaidtue + unpaidwed + unpaidthu + unpaidfri + unpaidsat + unpaidsun;
     document.getElementById('unpaidTotal').innerHTML=unpaidtotal;
    
     const othertotal = other + othertue + otherwed + otherthu + otherfri + othersat + othersun;
     document.getElementById('otherTotal').innerHTML=othertotal;
    
    
     const sumtotal = regulartotal + overtimetotal + sicktotal + vacationtotal + holidaytotal + unpaidtotal + othertotal;
     document.getElementById('sumTotal').innerHTML=sumtotal;
    
     
    */
</script>
