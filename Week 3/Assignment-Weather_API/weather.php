<?php
if($_POST){
    $city = $_POST['city'];
    $state = strtoupper($_POST['state']);
    $link = 'http://api.openweathermap.org/data/2.5/weather?q=' . $city . ',' . $state;
    $result = file_get_contents($link);
    $json = json_decode($result, true);

    $thisTemp = $json['main']['temp'];
    $humidity = $json['main']['humidity']. '%';
    $description = ucwords($json['weather'][0]['description']);
    $windSpeed = $json['wind']['speed'];
    $wind = $json['wind']['deg'];
    if($wind >= 348.75 || $wind <= 11.25){
        $dirName = "N";
    }elseif($wind < 33.75 && $wind > 11.25){
        $dirName = "NNE";
    }elseif($wind >= 33.75 && $wind < 56.25){
        $dirName = "NE";
    }elseif($wind < 78.75 && $wind >=56.25){
        $dirName = "ENE";
    }elseif($wind >= 78.75 && $wind < 101.25){
        $dirName = "E";
    }elseif($wind < 123.75 && $wind >= 101.25){
        $dirName = "ESE";
    }elseif($wind >= 123.75 && $wind < 146.25){
        $dirName = "SE";
    }elseif($wind < 168.75 && $wind >= 146.25){
        $dirName = "SSE";
    }elseif($wind >= 168.75 && $wind < 191.25){
        $dirName = "S";
    }elseif($wind < 213.75 && $wind >= 191.25){
        $dirName = "SSW";
    }elseif($wind >= 213.75 && $wind < 236.25){
        $dirName = "SW";
    }elseif($wind < 258.75 && $wind >= 236.25){
        $dirName = "WSW";
    }elseif($wind >= 258.75 && $wind < 281.25){
        $dirName = "W";
    }elseif($wind < 303.75 && $wind >= 281.25){
        $dirName = "WNW";
    }elseif($wind >= 303.75 && $wind < 326.25){
        $dirName = "NW";
    }elseif($wind < 348.75 && $wind >= 326.25){
        $dirName = "NNW";
    }
    $convertedTemp = (floor($thisTemp-273.15)*1.8 +32);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Weather In Yo Hood</title>
    <link rel="stylesheet" href="">
</head>
<body>
<header>
    <section>
        <h1>Local Weather Search</h1>
        <form action="weather.php" method="POST">
            <input type="text" name="city" value="" placeholder="City" required>
            <input type="text" name="state" value="" placeholder="State" required>
            <input type="submit" name="submit" value="Submit">
        </form>
    </section>
</header>
<div>
    <?php
    if($_POST){
        echo "<p>Current Conditions for " . $city . ', ' . $state . '.</p>';
        echo "<p>Tempature: " . $convertedTemp . '</p>';
        echo "<p>Humidity: " . $humidity . '</p>';
        echo "<p>Conditions: " . $description . '</p>';
        echo "<p>Windspeed: " . $windSpeed . 'mp/h.</p>';
        echo "<p>Wind Direction: " . $dirName . '</p>';
    }
    ?>
</div>

</body>
</html>