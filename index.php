<!-- Short Weather application to test API for WorldWeather-->

<html>
<head>
    <title>Current Weather</title>
</head>
<body>

<h3>Welcome to real-time Weather!</h3>
<p>Please enter zipcode or name of a city to check weather.</p>
<form name ="weather" action="" method = "get">
    <label for = "zipcode">Zipcode or city name</label>

        <input type = "text", name = "q",value="" />
        <input type = "submit", name = "submit", value="Check Weather" />

</form>

<!--Run Script-->
<?php
if(isset($_GET['submit'])){
   $q = $_GET["q"];
   $url =  'http://api.worldweatheronline.com/free/v1/weather.ashx?q='.$q.'&format=json&num_of_days=1&key=jxmf37xk2b7mc7xsgk54t9hq';
   $json=file_get_contents($url);
   $json = json_decode($json,true);
   echo "Current temperature is ".$json['data']['current_condition'][0]['temp_F'];
}
?>
</body>
</html>
