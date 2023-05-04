<?php

if (array_key_exists('submit', $_POST)) {

    if (!empty($_POST['country']) && $_POST['country'] != "ex Palestine") {
        $selected = $_POST['country'];
        //$message[] = 'You have chosen: ' . $selected;

        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=" . $_POST['country'] . "&appid=42e48060f5c8fc5dc9bd625fdaef3934");

        $weatherArray = json_decode($apiData, true);
        $tempcelsius = $weatherArray['main']['temp'] - 237;
        $weather = "<b>" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . ": " . intval($tempcelsius) . "&deg;C</b> <br>";
        $weather .= "<b>weather condition: </b>" . $weatherArray['weather']['0']['description'] . "<br>";
        $weather .= "<b>Atmosperic pressure: </b>" . $weatherArray['main']['pressure'] . "hPa <br>";
        $weather .= "<b>wind speed: </b>" . $weatherArray['wind']['speed'] . "meter/sec <br>";
        $weather .= "<b>Cloudness: </b>" . $weatherArray['clouds']['all'] . " % <br>";
        //date_default_timezone_set('Asia/palestine');
        $sunrise = $weatherArray['sys']['sunrise'];
        $weather .= "<b>Sunrise: </b>" . date("g:i a", $sunrise) . "<br>";

    } elseif (!empty($_POST['country']) && $_POST['country'] == "ex Palestine") {
        $selected = $_POST['country'];
        //$message[] = 'You have chosen: ' . $selected;
        $apiData = file_get_contents("https://api.openweathermap.org/data/2.5/weather?q=Palestine&appid=42e48060f5c8fc5dc9bd625fdaef3934");
        $weatherArray = json_decode($apiData, true);
        $tempcelsius = $weatherArray['main']['temp'] - 237;
        $weather = "<b>" . $weatherArray['name'] . ", " . $weatherArray['sys']['country'] . ": " . intval($tempcelsius) . "&deg;C</b> <br>";
        $weather .= "<b>weather condition: </b>" . $weatherArray['weather']['0']['description'] . "<br>";
        $weather .= "<b>Atmosperic pressure: </b>" . $weatherArray['main']['pressure'] . "hPa <br>";
        $weather .= "<b>wind speed: </b>" . $weatherArray['wind']['speed'] . "meter/sec <br>";
        $weather .= "<b>Cloudness: </b>" . $weatherArray['clouds']['all'] . " % <br>";
        //date_default_timezone_set('Asia/palestine');
        $sunrise = $weatherArray['sys']['sunrise'];
        $weather .= "<b>Sunrise: </b>" . date("g:i a", $sunrise) . "<br>";
    }
} else {

    $message[] = 'Please select the Country.';

}