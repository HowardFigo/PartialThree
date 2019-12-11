<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateServicesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('categories', function (Blueprint $table) {
            $table->increments('id');
	        $table->string('name');
	        $table->text('description');
            $table->timestamps();
        });

        Schema::create('services', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('professional_id');
	        $table->foreign('professional_id')->references('id')->on('professionals');
	        $table->unsignedInteger('category_id');
	        $table->foreign('category_id')->references('id')->on('categories');
	        $table->string('name');
	        $table->text('description');
            $table->timestamps();
        });

        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id');
	        $table->unsignedInteger('service_id');
	        $table->foreign('service_id')->references('id')->on('services');
	        $table->unsignedInteger('user_id');
	        $table->foreign('user_id')->references('id')->on('users');
	        $table->integer('rating');
	        $table->text('comment')->nullable();
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
        Schema::dropIfExists('categories');
        Schema::dropIfExists('services');
        Schema::dropIfExists('reviews');
    }
}
