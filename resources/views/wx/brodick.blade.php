<?php
$lat ='55.575';
$lon ='-5.1452';
$alt ='0';
$urlfetch = 'https://api.met.no/weatherapi/locationforecast/2.0/complete?lat=55.575&lon=-5.1452&altitude=0';
$bgcol0 =''; 
$bgcol='';
$bgcol0c = '';
$bgcolc='';
$wind_gust=0;
$location =''; 
$precipitation_amount = 0;?>


<x-app-layout :assets="$assets ?? []" :title="$title ?? []" :location="$location" :isBanner="true">
<div class="row">
   <div class="col-lg-12">
       <div class="">
           <div class="card-body">
                <div class="fancy-table table-responsive rounded">

                       
                
                <?php
        // Read the JSON file 
        //https://api.met.no/weatherapi/locationforecast/2.0/complete?lat=55.5751&lon=-5.1452&altitude=0
        //https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0
        
       // $json = \File::json('ferryforecast.json');
//$json = file_get_contents("https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0");
//$json = Storage::url('brodick.json');

$location = strtok($title, " ");
$location = strtolower ($location);
//echo $location;
$location = $location.'.json';
//echo $location;
$json =Storage::get($location);
$count='';
$data = json_decode($json, true);
//print("<pre>".print_r($data,true)."</pre>");
$i = 0;
//$count = is_null($data['properties']['timeseries']) ? 0 : count($data['properties']['timeseries']);
//$count = is_null($data['properties']['timeseries']) ? 0 : count($data['properties']['timeseries']);
if( !isset( $data['properties']['timeseries'] ) ){
    echo'forecast error';
   
 }
 else { 

$count= count($data['properties']['timeseries']);
$count = $count-2;
//
$datar = implode(" ",$data['geometry']['coordinates']);


?>

                                    <table class="table table-striped mb-0" style="height:fit-content">
                        <thead>
                           <tr class="table-dark">
                           <td colspan="11"><strong>{{ isset($title) ? strtok($title, " ")  : config('app.name', 'Laravel') }}</strong> Forecast | lat: <?php echo $data['geometry']['coordinates'][1]; ?> | lon: <?php echo $data['geometry']['coordinates'][0]; ?> | alt: <?php echo $data['geometry']['coordinates'][2]; ?>m</td>
                           </tr><tr class="table-dark">
                               <td >Today</td>
                                <td >Weather</td>                                                              
                                   <td >Temp.</td>
                                       <td >Avg. Wind</td>
                                           <td >Gust</td>
                                               <td >Dir</td>
                                                   <td >From</td>
                                                   <td >Rain</td>
                                                      <td >UV</td>
                                                           <td >Fog</td>
                                                           <td >Humidity&nbsp;&nbsp; </td></tr>
                        </thead>
                        <tbody><?php
//echo ($data['properties']['timeseries'][0]['data']['instant']['details']['air_pressure_at_sea_level']);

for ($i = 0; $i <= $count; $i++){
    if (isset ($data['properties']['timeseries'][$i]['data']['instant']['details']['fog_area_fraction'])){
    $fog =($data['properties']['timeseries'][$i]['data']['instant']['details']['fog_area_fraction']);
}
if (isset ($data['properties']['timeseries'][$i]['data']['next_1_hours']['summary']['symbol_code'])){
    $symbol =($data['properties']['timeseries'][$i]['data']['next_1_hours']['summary']['symbol_code']);}
    
    $wind = 2.237*($data['properties']['timeseries'][$i]['data']['instant']['details']['wind_speed']);
    $wind =round($wind,0);
    $wvht = round(sqrt((3.5*(0.868976*( $wind**4))/10**4)),2);
$wvht = round(2.55*log($wvht,6)+2,2);
if ($wvht <=0.5 ){$wvht = 'calm';}else
$wvht = $wvht.'ft';
$rotate = $data['properties']['timeseries'][$i]['data']['instant']['details']['wind_from_direction'];

//Direction name
$dirn = 'not set';
if ($rotate < 11.25){
$dirn = 'N'; }
if ($rotate > 348.75){
$dirn = 'N'; }
if (($rotate >= 11.25) && ($rotate < 33.75)){
$dirn = 'NNE'; }
if (($rotate >= 33.75) && ($rotate < 56.25)){
$dirn = 'NE'; }
if (($rotate >= 56.25) && ($rotate < 78.75)){
$dirn = 'ENE'; }
if (($rotate >= 78.75) && ($rotate < 101.25)){
$dirn = 'E'; }
if (($rotate >= 101.25) && ($rotate < 123.75)){
$dirn = 'ESE'; }
if (($rotate >= 123.75) && ($rotate < 146.25)){
$dirn = 'SE'; }
if (($rotate >= 146.25) && ($rotate < 168.75)){
$dirn = 'SSE'; }
if (($rotate >= 168.75) && ($rotate < 191.25)){
$dirn = 'S'; }
if (($rotate >= 168.75) && ($rotate < 213.75)){
$dirn = 'SSW'; }
if (($rotate >= 213.75) && ($rotate < 236.25)){
$dirn = 'SW'; }
if (($rotate >= 236.25) && ($rotate < 258.75)){
$dirn = 'WSW'; }
if (($rotate >= 258.75) && ($rotate < 281.25)){
$dirn = 'W'; }
if (($rotate >= 281.25) && ($rotate < 303.75)){
$dirn = 'WNW'; }
if (($rotate >= 303.75) && ($rotate < 326.25)){
$dirn = 'NW'; }
if (($rotate >= 326.25) && ($rotate < 348.75)){
$dirn = 'NNW'; }

//wind gradient
$wind_speed =$wind;
if ((round($wind_speed)<1)){

	$bgcol = '#FFFFFF';
	$txcol = 'color:#FFFFFF';
	
	}

if ((round($wind_speed)>=1 && (round($wind_speed) < 4))){

	$bgcol = '#CCFFFF';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=4 && (round($wind_speed) < 8))){

	$bgcol = '#00FFFF';
	$txcol = 'color:#000000';}
	
if ((round($wind_speed)>=8 && (round($wind_speed) < 13))){

	$bgcol = '#7FFF7F';
	$txcol = 'color:#000000';}
	
if ((round($wind_speed)>=13 && (round($wind_speed) < 18))){

	$bgcol = '#00FF00';
	$txcol = 'color:#000000';}	
if ((round($wind_speed)>=18 && (round($wind_speed) < 25))){

	$bgcol = '#7FFF00';
	$txcol = 'color:#000000';}	
if ((round($wind_speed)>=25 && (round($wind_speed) < 31))){

	$bgcol = '#FFFF00';
	$txcol = 'color:#000000';}	
if ((round($wind_speed)>=31 && (round($wind_speed) < 39))){

	$bgcol = '#FFD42A';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=39 && (round($wind_speed) < 46))){

	$bgcol = '#FFCC00';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=46 && (round($wind_speed) < 54))){

	$bgcol = '#FF9900';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=55 && (round($wind_speed) < 63))){

	$bgcol = '#993300';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=63 && (round($wind_speed) < 72))){

	$bgcol = '#993366';
	$txcol = 'color:#000000';}
if ((round($wind_speed)>=72 )){

	$bgcol = '#FFD42A';
	$txcol = 'color:#000000';}
	
	
	
	
		
if (!isset($bgcol0)) {
$bgcol0=	$bgcol;
	}
$bggrad = 'background-image: linear-gradient(180deg, '.$bgcol0.', '.$bgcol.');';




//disruption status
$portt = '';

if ($dirn == 'SW'){
$portt = '';

if (($wind)>23){
	$portt ='';}
}
if ($dirn == 'W'){
$portt = '';
if (($wind)>25){
	$portt ='';
}

}
if ($dirn == 'NW'){
	if (($wind)>28){
$portt = '';
}
}
if ($dirn == 'WSW'){
$portt = '';

if (($wind)>23){
	$portt ='';
}
}
if ($dirn == 'SSW'){
$portt = '';
;

if (($wind)>23){
	$portt ='';
}
}
if ($dirn == 'S'){
$portt = '';

if (($wind)>28){
	$portt ='';
}
}
if ($dirn == "E"){
$portt = '';

if (($wind)>23){
	$portt ='';
}
}
if ($dirn == "NE"){
$portt = '';

if (($wind)>23){
	$portt ='';
}
}
if ($dirn == "ENE"){
$portt = '';

if (($wind)>23){
	$portt ='';
}
}
if ($dirn == "NNE"){
$portt = '';

if (($wind)>28){
	$portt ='';

}}
if (($wind)<20){
	$portt ='';
}

//symbols


$gust = $wind*1.7;


$sym = '<img src="../images/weathersymbols/'.$symbol. '.svg" width="50" height="50">';

if ($symbol == ''){
    $sym ='&nbsp;';
}
//if (!isset($bg1)){
//    $bg1 = $bg2;
//
//};
$bg2 = '';

if ((round($wind_gust)<1)){

	$bgcolgust = '';
	$txcolgust = 'color:#000000';
	
	}
$wind_gust =$gust;
if ((round($wind_gust)>=1 && (round($wind_gust) < 4))){

	$bgcolgust = '#CCFFFF';
	$txcolgust = 'color:#000000';}
if ((round($wind_gust)>=4 && (round($wind_gust) < 8))){

	$bgcolgust = '#00FFFF';
	$txcolgust = 'color:#000000';}
	
if ((round($wind_gust)>=8 && (round($wind_gust) < 13))){

	$bgcolgust = '#7FFF7F';
	$txcolgust = 'color:#000000';}
	
if ((round($wind_gust)>=13 && (round($wind_gust) < 18))){

	$bgcolgust = '#00FF00';
	$txcolgust = 'color:#000000';}	
if ((round($wind_gust)>=18 && (round($wind_gust) < 25))){

	$bgcolgust = '#7FFF00';
	$txcolgust = 'color:#000000';}	
if ((round($wind_gust)>=25 && (round($wind_gust) < 31))){

	$bgcolgust = '#FFFF00';
	$txcolgust = 'color:#000000';}	
if ((round($wind_gust)>=31 && (round($wind_gust) < 39))){

	$bgcolgust = '#FFD42A';
	$txcolgust = 'color:#000000';}
		
if (!isset($bgcolgust0)) {
$bgcolgust0=$bgcolgust;
	}
$bggradgust = 'background-image: linear-gradient(180deg, '.$bgcolgust0.', '.$bgcolgust.');';

$bgcolgust0=$bgcolgust;

$timee = $data['properties']['timeseries'][$i]['time'];
$timeedt =new DateTime($timee);
$day = $timeedt->format('l jS F');
$dayy = $timeedt->format('d');
$time = $timeedt->format('H:i');
$rain = "0";
$uv ="&nbsp;";
$fog ='0';
if (!isset($data['properties']['timeseries'][$i]['data']['next_1_hours']['details']['precipitation_amount'])){
    $rain= $data['properties']['timeseries'][$i]['data']['next_6_hours']['details']['precipitation_amount'];
} else{
    $rain = $data['properties']['timeseries'][$i]['data']['next_1_hours']['details']['precipitation_amount'];
}
$precipitation_amount = $rain;
$precipb = ($precipitation_amount/5);
if ($precipitation_amount>2){
	$rpcolor = 'color:#ffffff;';
}else{
		$rpcolor = 'color:#0000FF;';
}
if (isset($data['properties']['timeseries'][$i]['data']['instant']['details']['ultraviolet_index_clear_sky'])){
    $uv= $data['properties']['timeseries'][$i]['data']['instant']['details']['ultraviolet_index_clear_sky'];
}
if (isset($data['properties']['timeseries'][$i]['data']['instant']['details']['fog_area_fraction'])){
    $fog= $data['properties']['timeseries'][$i]['data']['instant']['details']['fog_area_fraction'];
}
if (isset($data['properties']['timeseries'][$i]['data']['instant']['details']['relative_humidity'])){
    $hum= $data['properties']['timeseries'][$i]['data']['instant']['details']['relative_humidity'];
}

if ($time == '00:00'){
    echo '<thead><tr class="table-dark">
                <td colspan ="2">'.$day.'</td>                                   <td >Temp.</td>
                                       <td >Avg. Wind</td>
                                           <td >Gust</td>
                                               <td >Dir</td>
                                                   <td >From</td>
                                                   <td >Rain</td>
                                                      <td >UV</td>
                                                           <td >Fog</td>
                                                           <td >Humidity&nbsp;&nbsp; </td></tr></thead>';
}
echo '<tr style="height:100%">';
echo ' <td>'.$time. '</td>';
echo ' <td class="text-dark">'.$sym.'</td>';
echo ' <td class="text-dark">'.($data['properties']['timeseries'][$i]['data']['instant']['details']['air_temperature']). '&degC</td>';
echo ' <td class="text-dark" style="height: 100%"><div style=" margin: auto; height: 100%; width: 100%; '.$bggrad.'; ">'.$wind. ' mph</div></td>';
echo ' <td class="text-dark" style="height: 100%"><div style="vertical-align:middle; height: 100%; width: 100%; '.$bggradgust.'; ">'.$gust. ' mph*</div></td>';
echo ' <td class="text-dark"> <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512" transform="rotate('.$rotate.')"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM127 281c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l71 71L232 136c0-13.3 10.7-24 24-24s24 10.7 24 24l0 182.1 71-71c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 393c-9.4 9.4-24.6 9.4-33.9 0L127 281z"/></svg> </td>';
echo ' <td class="text-dark"> '.$dirn. '</td>';
echo ' <td class="text-dark"><div style="text-align: center;background-color:rgba(0, 0,255, '.$precipb.');'.$rpcolor.' color:#fff;""> '.$rain.'mm </div></td>';
echo ' <td class="text-dark"> '.$uv. '</td>';
echo ' <td class="text-dark"> '.$fog.'%</td>';
echo ' <td class="text-dark">'.$hum.'%</td>';
echo '</tr>';
$bgcol0 = $bgcol;
$bgcol0c = $bgcolc;
$symbol ='';
$fog ='';
//$bg1 = $bg2;
//echo ($data['properties']['timeseries'][$i]['time']);
}
//echo "<pre>";
//    print_r($data);
//echo "</pre>";      
               $updatetimee = $data['properties']['meta']['updated_at'];
$updatetimeedt =new DateTime($updatetimee);
$day2 = $updatetimeedt->format('l jS F');
$dayy2 = $updatetimeedt->format('d');
$time2 = $updatetimeedt->format('H:i');
    ?>
                
            <thead>    <tr class="table-dark">
                           <td colspan="11"><strong>forecast data from yr.no</strong> Last Update: <?php echo $time2.' '.$dayy2.' '.$day2;}?> </td>
                           </tr></thead>
                

                                                                              
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
    </div>
</div>
</x-app-layout>
