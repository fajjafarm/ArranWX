<?php

namespace App\Console;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;

class Kernel extends ConsoleKernel
{
    protected $commands = [
        \App\Console\Commands\brodickcron::class,
        \App\Console\Commands\blackwaterfootcron::class,
        \App\Console\Commands\catacolcron::class,
        \App\Console\Commands\catacolcron::class,
        \App\Console\Commands\corriecron::class,
        \App\Console\Commands\dougariecron::class,
        \App\Console\Commands\calmac1cron::class,
        \App\Console\Commands\calmac2cron::class,
        \App\Console\Commands\goatfellcron::class,
        \App\Console\Commands\kildonnancron::class,
        \App\Console\Commands\kilmorycron::class,
        \App\Console\Commands\lamlashcron::class,
        \App\Console\Commands\machriecron::class,
        \App\Console\Commands\pirnmillcron::class,
        \App\Console\Commands\quakecron::class,
        \App\Console\Commands\sannoxcron::class,
        \App\Console\Commands\shiskinecron::class,
        \App\Console\Commands\sepacron::class,
        \App\Console\Commands\warningcron::class,
        \App\Console\Commands\webcamcron::class,
        \App\Console\Commands\whitingbaycron::class,
      //  \App\Console\Commands\weatherxmapi::class,
    ];
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
         $schedule->command('brodickcron')->cron('0 */3 * * *');
          $schedule->command('blackwaterfootcron')->cron('0 */3 * * *');
         $schedule->command('catacolcron')->cron('3 */3 * * *');
         $schedule->command('catacolcron')->cron('7 */3 * * *');
         $schedule->command('corriecron')->cron('9 */3 * * *');
         $schedule->command('dougariecron')->cron('10 */3 * * *');
         $schedule->command('calmac1cron')->cron('15 6-22 * * *');
         $schedule->command('calmac2cron')->cron('25 6-22 * * *');
         $schedule->command('goatfellcron')->cron('12 */3 * * *');
         $schedule->command('kildonnancron')->cron('17 */3 * * *');
         $schedule->command('kilmorycron')->cron('19 */3 * * *');
         $schedule->command('lamlashcron')->cron('21 */3 * * *');
         $schedule->command('machriecron')->cron('28 */3 * * *');
         $schedule->command('pirnmillcron')->cron('29 */3 * * *');
         $schedule->command('quakecron')->cron('5 */6 * * *');
         $schedule->command('sannoxcron')->cron('37 */3 * * *');
         $schedule->command('shiskinecron')->cron('39 */3 * * *');
         $schedule->command('sepacron')->cron('0 */2 * * *');
         $schedule->command('warningcron')->cron('0 */2 * * *');
         $schedule->command('webcamcron')->cron('*/15 * * * *');
         $schedule->command('whitingbaycron')->cron('51 */3 * * *');
         $schedule->command('stationsannoxcron')->cron('*/10 * * * *');
      //   $schedule->command('weatherxmapi')->cron('*/10 * * * *');
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
