<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->id();

            $table->string('author_name');
            $table->string('author_surname');

            $table->string('key');

            $table->integer('time_spent');
            $table->integer('price');

            $table->string('recommendation');
            $table->integer('quality_rating');
            $table->integer('timings_rating');
            $table->integer('sociability_rating');

            $table->text('comment');

            $table->string('image');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reviews');
    }
}
