<?php declare(strict_types = 1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

use App\Domain\Post\Database\Seeders\PostSeeder;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            $table->foreignId('user_id')->constrained('users');

            $table->string('email')->index();
            $table->string('token');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });

        (new PostSeeder())->run();
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('password_resets');
    }
};
