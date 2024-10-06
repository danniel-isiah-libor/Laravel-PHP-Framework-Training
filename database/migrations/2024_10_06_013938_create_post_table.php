<?php

use App\Models\User;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->id();

            //$table->foreignId('user_id');
            $table->foreignIdFor(User::class) //did not understand the difference
                ->constrained()
                ->cascadeOnDelete();
            //->cascadeOnUpdate();

            //$table->dateTime('birthdate');
            //$table->json('cart'); //if you have e-commerce in json format

            /**
             * Post::factory()->count(10) old version
             * Post::factory()->count(10)->create() - new version but same function with the old version
             */

            $table->string('title');/*this is equivalent to varchar in mysql*/
            $table->text('body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
