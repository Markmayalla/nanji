<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBuses extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('buses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('brand_id')->unsigned();
            $table->bigInteger('model_id')->unsigned();
            $table->bigInteger('type_id')->unsigned();
            $table->bigInteger('floor_id')->unsigned();
            $table->string('title')->nullable();
            $table->mediumText('description')->nullable();
            $table->integer('passanger_from')->default(0);
            $table->integer('passanger_to')->default(0);
            $table->integer('saet_from')->default(0);
            $table->integer('saet_to')->default(0);
            $table->integer('no_of_door')->default(1);
            $table->text('big_descriptioin')->nullable();
            $table->string('body_type')->nullable();
            $table->string('wheel_formular')->nullable();
            $table->string('drive_wheel')->nullable();
            $table->string('dimensions')->nullable();
            $table->string('curb')->nullable();
            $table->string('weight')->nullable();
            $table->string('front_axle')->nullable();
            $table->string('main_bridge')->nullable();
            $table->string('front_suspension')->nullable();
            $table->string('rear_suspension')->nullable();
            $table->string('steering')->nullable();
            $table->string('brake_system')->nullable();
            $table->string('climate')->nullable();
            $table->string('engine')->nullable();
            $table->string('transmission')->nullable();
            $table->string('tires')->nullable();
            $table->timestamps();
            $table->foreign('brand_id')->references('id')->on('makes');
            $table->foreign('model_id')->references('id')->on('models');
            $table->foreign('type_id')->references('id')->on('types');
            $table->foreign('floor_id')->references('id')->on('floors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buses');
    }
}
