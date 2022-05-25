<?php declare(strict_types = 1);

namespace App\Infrastructure\Commands;

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
    protected $description = 'this command is a replacement for $php artisan migrate:fresh --seed';

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
            '--class' => 'App\\Infrastructure\\Database\\Seeders\\DatabaseSeeder',
            '--force' => true,
        ]));

    }
}
