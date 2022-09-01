<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('articles', function (Blueprint $table) {
      $table->id();
      $table->unsignedBigInteger('user_id');
      $table->unsignedBigInteger('image_id');
      $table->unsignedBigInteger('category_id');
      $table->string('title');
      $table->string('slug');
      $table->string('image_poster');
      $table->longText('content');
      $table->timestamps();
    });

    Schema::table('articles', function ($table) {
      $table->foreign('user_id')->references('id')->on('users');
      $table->foreign('image_id')->references('id')->on('images');
      $table->foreign('category_id')->references('id')->on('categories');
    });
  }

  /**
   * Reverse the migrations.
   *
   * @return void
   */
  public function down()
  {
    Schema::dropIfExists('articles');
  }
};
