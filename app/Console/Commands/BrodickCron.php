<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;
class BrodickCron extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'brodickcron';

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
                $path = "https://api.met.no/weatherapi/locationforecast/2.0/complete?lat=55.575&lon=-5.1452&altitude=0";
        Storage::disk('local')->put('brodick.json', file_get_contents($path));
  
        $path = Storage::path('/jsoncron/brodick.json');
  
        return response()->download($path);
    }
}
