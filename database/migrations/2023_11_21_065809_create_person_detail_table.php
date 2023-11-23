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
        Schema::create('person_detail', function (Blueprint $table) {
            $table->increments('person_id');
            $table->integer('book_id');
            $table->integer('user_id');
            $table->integer('package_id');
            $table->string('name');
            $table->string('email');
            $table->string('mobile');
            $table->string('age');
            $table->string('status')->default('pending_to_pay');
            $table->dateTimeTz('created_at')->useCurrent();
            $table->dateTimeTz('updated_at')->useCurrent()->useCurrentOnUpdate();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('person_detail');
    }
};
