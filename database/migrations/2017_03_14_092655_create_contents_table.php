<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contents', function (Blueprint $table) {
          $table->increments('id');
          $table->string('name')->nullable();
          $table->timestamps();
          $table->text('data')->nullable();
          $table->string('image_path')->nullable();
          $table->string('video_url')->nullable();
          $table->bigInteger('view')->nullable();
          $table->bigInteger('like')->nullable();
          $table->bigInteger('dislike')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('contents');
    }
}
