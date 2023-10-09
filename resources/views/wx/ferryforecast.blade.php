<x-app-layout :assets="$assets ?? []" :title="$title ?? []"  :isBanner="true">
<div class="row">

   <div class="col-lg-12">
       <div class="">
           <div class="card-body">
                <div class="fancy-table table-responsive rounded">
                                    <table class="table table-striped mb-0">
                        <thead>
                           <tr class="table-dark">
                               <td >Today</td>
                                <td >Port Affected?</td>                                                              
                                   <td >Weather</td>
                                       <td >Temp.</td>
                                           <td >Avg. Wind</td>
                                               <td >Dir</td>
                                                   <td >From</td>
                                                      <td >Wave Height</td>
                                                           <td >Fog</td></tr>
                        </thead>
                        <tbody>
                       
                
                <?php
        // Read the JSON file 
        //https://api.met.no/weatherapi/locationforecast/2.0/complete?lat=55.5751&lon=-5.1452&altitude=0
        //https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0
        
        $json = \File::json('ferryforecast.json');
//$json = file_get_contents("https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0");
$json = \File::get('brodick.json');


$data = json_decode($json, true);
$i = 0;
$count= count($data['properties']['timeseries']);
$count = $count-2;

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

//disruption status
$portt = '<button type="button" class="btn btn-success">No Disruption expected</button>';

if ($dirn == 'SW'){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Ardrossan</button>';}
}
if ($dirn == 'W'){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';
if (($wind)>25){
	$portt ='<button type="button" class="btn btn-danger">Probably  Ardrossan</button>';
}

}
if ($dirn == 'NW'){
	if (($wind)>28){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';
}
}
if ($dirn == 'WSW'){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Ardrossan</button>';
}
}
if ($dirn == 'SSW'){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';
;

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Ardrossan</button>';
}
}
if ($dirn == 'S'){
$portt = '<button type="button" class="btn btn-warning">Possibly  Ardrossan</button>';

if (($wind)>28){
	$portt ='<button type="button" class="btn btn-danger">Probably  Ardrossan</button>';
}
}
if ($dirn == "E"){
$portt = '<button type="button" class="btn btn-warning">Probably  Brodick</button>';

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Brodick</button>';
}
}
if ($dirn == "NE"){
$portt = '<button type="button" class="btn btn-warning">Probably  Brodick</button>';

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Brodick</button>';
}
}
if ($dirn == "ENE"){
$portt = '<button type="button" class="btn btn-warning">Probably  Brodick</button>';

if (($wind)>23){
	$portt ='<button type="button" class="btn btn-danger">Probably  Brodick</button>';
}
}
if ($dirn == "NNE"){
$portt = '<button type="button" class="btn btn-warning">Probably  Brodick</button>';

if (($wind)>28){
	$portt ='<button type="button" class="btn btn-danger">Probably  Brodick</button>';

}}
if (($wind)<20){
	$portt ='<button type="button" class="btn btn-success">No Disruption expected</button>';
}

//symbols





$sym = '<img src="./images/weathersymbols/'.$symbol. '.svg" width="50" height="50">';

if ($symbol == ''){
    $sym ='&nbsp;';
}



$timee = $data['properties']['timeseries'][$i]['time'];
$timeedt =new DateTime($timee);
$day = $timeedt->format('l jS F');
$dayy = $timeedt->format('d');
$time = $timeedt->format('H:i');
if ($time == '00:00'){
    echo '<thead><tr class="table-dark">
                <td >weather</td><td colspan ="2">'.$day.'</td>
                <td >Temp.</td>
                                           <td >Avg. Wind</td>
                                               <td >Dir</td>
                                                   <td >From</td>
                                                                                                                  <td >Wave Height</td>
                                                           <td >Fog</td></tr></thead>';
}
echo '<tr>';
echo ' <td>'.$time. '</td>';
echo ' <td class="text-dark"> '.$portt.'</td>';
echo ' <td class="text-dark">'.$sym.'</td>';
echo ' <td class="text-dark">'.($data['properties']['timeseries'][$i]['data']['instant']['details']['air_temperature']). '&degC</td>';
echo ' <td class="text-dark">'.$wind. ' mph</td>';
echo ' <td class="text-dark"> <svg xmlns="http://www.w3.org/2000/svg" height="1.5em" viewBox="0 0 512 512" transform="rotate('.$rotate.')"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M256 0a256 256 0 1 0 0 512A256 256 0 1 0 256 0zM127 281c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l71 71L232 136c0-13.3 10.7-24 24-24s24 10.7 24 24l0 182.1 71-71c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9L273 393c-9.4 9.4-24.6 9.4-33.9 0L127 281z"/></svg> </td>';
echo ' <td class="text-dark"> '.$dirn. '</td>';
echo ' <td class="text-dark">'.$wvht. '</td>';
echo ' <td class="text-dark">'.($data['properties']['timeseries'][0]['data']['instant']['details']['fog_area_fraction']). '</td>';
echo '</tr>';
$symbol ='';
$fog ='';
//echo ($data['properties']['timeseries'][$i]['time']);
}
//echo "<pre>";
//    print_r($data);
//echo "</pre>";      
                
                ?>
                
                
                

                                                                              
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
    </div>
</div>
</x-app-layout>
