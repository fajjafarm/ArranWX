<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
//use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\File;
class stationsannoxcron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'stationsannoxcron';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     */
    public function handle()
    {
       
        $options = array(
  'http'=>array(
    'method'=>"GET",
    'header'=>"Accept-language: en\r\n" .
              "Cookie: foo=bar\r\n" .  // check function.stream-context-create on php.net
              "User-Agent: Mozilla/5.0 (iPad; U; CPU OS 3_2 like Mac OS X; en-us) AppleWebKit/531.21.10 (KHTML, like Gecko) Version/4.0.4 Mobile/7B334b Safari/531.21.102011-10-16 20:23:10\r\n" // i.e. An iPad 
  )
);

$context = stream_context_create($options);
        
                $path = "https://api.weatherxm.com/api/v1/cells/871909643ffffff/devices/439b7020-4e94-11ed-9972-4f669f2d96bd";
                $contents = file_get_contents($path, false, $context);
                
                if (Storage::put('stationsannoxcron.json', $contents)){
                $json =Storage::get($location);
                $data = json_decode($json, true);
                $isActive = $data['isActive'];
                $lastWeatherStationActivity = $data['lastWeatherStationActivity'];
                $timestamp = $data['current_weather']['timestamp'];
                $temperature = $data['current_weather']['temperature'];
                $humidity = $data['current_weather']['humidity'];
                $wind_speed = $data['current_weather']['wind_speed'];
                $wind_gust = $data['current_weather']['wind_gust'];
                $wind_direction = $data['current_weather']['wind_direction'];
                $uv_index = $data['current_weather']['uv_index'];
                $precipitation = $data['current_weather']['precipitation'];
                $pressure = $data['current_weather']['pressure'];
                $icon = $data['current_weather']['icon'];
                $feels_like = $data['current_weather']['feels_like'];



                DB::table('wxm_sannox')->insert([
                 'isActive'=> $isActive, 
                'lastWeatherStationActivity'=>$lastWeatherStationActivity,
                'timestamp'=>$timestamp,
                'temperature'=>$temperature, 
                'humidity'=>$humidity, 
                'wind_speed'=>$wind_speed, 
                'wind_gust'=>$wind_gust,
                'wind_direction'=>$wind_direction,
                'uv_index'=>$uv_index, 
                'precipitation'=>$precipitation, 
                'pressure'=>$pressure , 
                'icon'=>$icon, 
                'feels_like'=>$feels_like, 
                'modified'=>'', 
                'notes'=>'', 
                'snow'=>'', 
                'hillsnow'=>'', 
                'rain_rate'=>'']) ;
    }
                
                
                
                
                { 
    echo ' The file could not be written to disk...';
}
     //  Storage::disk('local')->putFileAs('brodick.json', file_get_contents($path, false, $context));
 // Storage::disk('local')->putFile('brodick.json', new File(file_get_contents($path, false, $context)), 'public');
  //      $path = Storage::path('brodick.json');
  
        //return response()->download($path);
    }
}
