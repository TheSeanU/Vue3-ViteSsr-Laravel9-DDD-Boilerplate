<?php declare(strict_types = 1);

namespace App\Application\Kernels;

use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel;

class CommandsKernel extends Kernel
{
    /**
     * Define the application's command schedule.
     *
     * @param  \Illuminate\Console\Scheduling\Schedule  $schedule
     * @return void
     */
    protected function schedule(Schedule $schedule)
    {
        // $schedule->command('inspire')->hourly();
    }

    /**
     * Register the commands for the application.
     *
     * @return void
     */
    protected function commands()
    {
        $this->load('App/Application/Commands');
    }
}
