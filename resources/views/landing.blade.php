<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Time Tracker App</title>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

</head>

<body id="body" class="container-fluid">
    <center>
        <select id="userType">
            <option value="Names" disabled selected id="myDefault">Names</option>
            @foreach ($name as $names)
            <option>{{$names->name}}</option>
            @endforeach
        </select>
    </center>
    <div id="div1">
        <p id="time"></p>
        <!-- <p id="date"></p> -->
    </div>
    </br>
    </br>
    </br>
    </br>
    </br>
    </br>
    <form method="POST" action="/timeIn">
        <button name="clockIn" type="button" onclick="time()" class="button3">
            CLOCK IN
        </button>
        <p name="clockIn" id="datebtn"></p>
    </form>
    </br>
    </br>
    </br>
    <div>
        <h1>BREAK</h1>
        <button name="start" class="button1" type="button" onclick="time1()">START</button>
        <p name="start" id="datebtn1"></p>
        </br>
        </br>
        <button name="end" class="button2" type="button" onclick="time2()">END</button>
        <p name="end" id="datebtn2"></p>
    </div>
    </br>
    </br>
    </br>
    <button name="clockOut" class="button4" type="button" onclick="time3()">
        CLOCK OUT
    </button>
    <p name="clockOut" id="datebtn3"></p>
    </br>
    </br>
    <h1>Total time work: </h1>
    </br>
    </br>
    <h1>Hours Left Before Timeout: </h1>
    </br>
    </br>
    <h1>Total Breaks Used: </h1>
    <!-- Add online jQuery -->
    <script>
    window.setInterval(ut, 1000);

    function ut() {
        var d = new Date();
        document.getElementById("time").innerHTML = d.toLocaleTimeString();
        // document.getElementById("date").innerHTML = d.toLocaleDateString();
    }

    function time() {
        var currentdate = new Date();
        var am_pm = currentdate.getHours() >= 12 ? "PM" : "AM";
        var timenow = +currentdate.getHours() + ":" +
            currentdate.getMinutes();
        document.getElementById("datebtn").innerHTML = timenow + am_pm;
    }

    function time1() {
        var currentdate = new Date();
        var am_pm = currentdate.getHours() >= 12 ? "PM" : "AM";
        var timenow = +currentdate.getHours() + ":" +
            currentdate.getMinutes();
        document.getElementById("datebtn1").innerHTML = timenow + am_pm;
    }

    function time2() {
        var currentdate = new Date();
        var am_pm = currentdate.getHours() >= 12 ? "PM" : "AM";
        var timenow = +currentdate.getHours() + ":" +
            currentdate.getMinutes();
        document.getElementById("datebtn2").innerHTML = timenow + am_pm;
    }

    function time3() {
        var currentdate = new Date();
        var am_pm = currentdate.getHours() >= 12 ? "PM" : "AM";
        var timenow = +currentdate.getHours() + ":" +
            currentdate.getMinutes();
        document.getElementById("datebtn3").innerHTML = timenow + am_pm;
    }

    function addOption() {
        // Do stuff...and then:
        document.getElementById('userType').value = "Names";

    }
    </script>

</body>

</html>