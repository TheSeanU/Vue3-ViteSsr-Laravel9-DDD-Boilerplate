<?php declare(strict_types = 1);

namespace App\Domain\Comment\Database\Seeders;

use Illuminate\Database\Seeder;

use App\Domain\Comment\Models\Comment;

class CommentSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        Comment::factory(10)->create();
    }
}
