<?php declare(strict_types = 1);

namespace App\Application\Commands;

use Illuminate\Console\Command;

class MigrateSeedCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'migrate-seed';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        /**
         * Run the database seeder command.
         *
         * @param  string  $database
         * @return void
         */
        $this->call('migrate:fresh');
        
        $this->call('db:seed', array_filter([
            '--class' => 'App\\Application\\Database\\Seeders\\DatabaseSeeder',
            '--force' => true,
        ]));
        
    }
}
