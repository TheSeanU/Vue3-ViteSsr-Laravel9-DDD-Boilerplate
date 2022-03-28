<?php declare(strict_types=1);

namespace App\Core\Database\Seeders;

use Illuminate\Database\Seeder;
use Faker\Factory;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

// this seeder is for testing

class FailedJobsSeeder extends Seeder
{
    public function run()
    {
        $this->create();
    }

    /**
     * Seed the application's database.
     *
     * @return void
     */
    private function create()
    {
        $faker = Factory::create();
        
        return DB::table('failed_jobs')->insert([
            'uuid' => $faker->randomDigitNotZero(),
            'connection' => $faker->unique()->safeEmail(),
            'queue' => Str::random(10),
            'payload' => now(),
            'exception' => now(),
            'failed_at' =>  now()
        ]);

    }
}
