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
        Schema::create('package', function (Blueprint $table) {
            $table->increments('package_id');
            $table->string('type');
            $table->string('to_place');
            $table->string('from');
            $table->integer('default_price');
            $table->integer('price');
            $table->string('highlight');
            $table->string('hotel_type');
            $table->string('vehicle');
            $table->string('food');
            $table->integer('total_days');
            $table->integer('total_nights');
            $table->string('day');
            $table->string('includes');
            $table->string('map_html');
            $table->string('image1');
            $table->string('image2');
            $table->string('image3');
            $table->string('image4');
            $table->string('image5');
            $table->string('popularity');
            $table->string('status');
             $table->dateTimeTz('created_at',$precision=0)->useCurrent();
            $table->dateTimeTz('updated_at',$precision=0)->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('package');
    }
};
