<?php
    //connect to mysql db
    $con = mysqli_connect("localhost","awxsite","08@teqV83");

if (!$con) {
    error_log("Failed to connect to MySQL: " . mysqli_error($con));
    die('Internal server error');
}
    
  //  $con = mysqli_connect("localhost","wxm_sannox","tR84z?58s") or die('Could not connect: ' . mysqli_error());
    //connect to the employee database
    mysqli_select_db($con,"awx_data");

    //read the json file contents
    $jsondata = file_get_contents('https://api.weatherxm.com/api/v1/cells/871909643ffffff/devces/raspy-maize-noreaster');
    
    //convert json object to php associative array
    $data = json_decode($jsondata, true);
    
    //get the employee details
    //$id = $data['id'];
    $isActive = str_replace('"', '', $data['isActive']);
    $lastWeatherStationActivity = str_replace('"', '', $data['lastWeatherStationActivity']);
    $timestamp = str_replace('"', '', $data['current_weather']['timestamp']);
    $temperature = str_replace('"', '', $data['current_weather']['temperature']);
    $humidity = str_replace('"', '', $data['current_weather']['humidity']);
    $wind_speed = str_replace('"', '', $data['current_weather']['wind_speed']);
    $wind_gust = str_replace('"', '', $data['current_weather']['wind_gust']);
    $wind_direction = str_replace('"', '', $data['current_weather']['wind_direction']);
    $uv_index = str_replace('"', '', $data['current_weather']['uv_index']);
    $precipitation = str_replace('"', '', $data['current_weather']['precipitation']);
    $pressure = str_replace('"', '', $data['current_weather']['pressure']);
    $icon = str_replace('"', '', $data['current_weather']['icon']);
    $feels_like = str_replace('"', '', $data['current_weather']['feels_like']);
    
    //insert into mysql table
    $sql = "INSERT INTO wxm_sannox(`isActive`, `lastWeatherStationActivity`, `timestamp`, `temperature`, `humidity`, `wind_speed`, `wind_gust`, `wind_direction`, `uv_index`, `precipitation`, `pressure`, `icon`, `feels_like`)
    VALUES('$isActive', '$lastWeatherStationActivity', '$timestamp', '$temperature', '$humidity', '$wind_speed','$wind_gust', '$wind_direction', '$uv_index', '$precipitation', '$pressure', '$icon', '$feels_like')";
    if(!mysqli_query($con,$sql))
    {
        die('Error : ' . mysqli_error($con));
    }
?>