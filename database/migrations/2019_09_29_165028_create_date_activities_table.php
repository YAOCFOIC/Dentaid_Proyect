<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDateActivitiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('activities', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->bigIncrements('id');
            $table->string("ansewer");
            $table->string("questions");
            $table->string('OptionA');
            $table->string('OptionB');
            $table->string('OptionC');
            $table->string('OptionD');
            $table->boolean('active');
            $table->Integer("time");
            $table->unsignedBigInteger('bells_id');
            $table->foreign('bells_id')->references('id')->on('bells');
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
        Schema::dropIfExists('activities');
    }
}
