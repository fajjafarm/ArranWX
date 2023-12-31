<x-app-layout :assets="$assets ?? []" title='Earthquakes Near Arran' :isBanner="true">
<div class="row">
   <div class="col-lg-12">
       <div class="">
           <div class="card-body">
                <div class="fancy-table table-responsive rounded">
                                    <table class="table table-striped mb-0">
                        <thead>
                           <tr class="table-dark">
                               <td >Magnitude</td>
                                <td >Depth</td>
                                <td >Location</td>                                                              
                                   <td >Link</td>
                                       <td >Date</td>
                                          
                        </thead>
                        <tbody>
                       
                
                <?php
        // Read the JSON file 
        //https://api.met.no/weatherapi/locationforecast/2.0/complete?lat=55.5751&lon=-5.1452&altitude=0
        //https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0
        
        $json = \File::json('ferryforecast.json');
//$json = file_get_contents("https://api.met.no/weatherapi/locationforecast/2.0/compact?lat=55.5751&lon=-5.1452&altitude=0");
$json =Storage::get('quake.json');


$data = json_decode($json, true);
$i = 0;
$count= count($data['channel']['item']);
$count = $count-2;
$mag='0';
//echo ($data['properties']['timeseries'][0]['data']['instant']['details']['air_pressure_at_sea_level']);

for ($i = 0; $i <= $count; $i++){
  $parts = (explode(":",$data['channel']['item'][$i]['title']));
 
  $location = $parts['2'];
  $depths =(explode(";",$data['channel']['item'][$i]['description'])); 
  $depth =  $depths['3'];
  $depth =  substr($depth, 7);
  $location = substr($location, 0, strpos($location, ","));
   $thead ='';       
$mag = str_replace('UK Earthquake alert : ', "", ($data['channel']['item'][$i]['title']))  ;

//if ($mag >= 3){
 //   $mag ='<strong>'.$mag.'</strong>';
//}
$trclass = '<tr>';
if (str_contains($location, 'CLYDE')) { 
   $trclass= '<thead><tr class="table-info">';
   $thead ='</thead>';
}
if (str_contains($location, 'ARRAN')) { 
     $trclass= '<thead><tr class="table-warning">';
     $thead ='</thead>';
}

   
echo $trclass;
echo ' <td class="text-dark">'.substr($mag, 0, 6). '</td>';
echo ' <td class="text-dark">'.$depth. '</td>';
echo ' <td class="text-dark"> '.$location.'</td>';
echo ' <td class="text-dark"><a href="'.($data['channel']['item'][$i]['link']).'" target="_blank">View</a></td>';
echo ' <td class="text-dark">'.($data['channel']['item'][$i]['pubDate']). '</td>';
echo '</tr>';
echo $thead;
     }
                
                ?>
                
                <thead>
                           <tr class="table-dark">
                               <td colspan="5">Recent UK seismic events recorded by the BGS Seismology team</td>
                                
                                          
                        </thead>
                

                                                                              
                        </tbody>
                    </table>
                </div>
           </div>
       </div>
    </div>
</div>
</x-app-layout>
