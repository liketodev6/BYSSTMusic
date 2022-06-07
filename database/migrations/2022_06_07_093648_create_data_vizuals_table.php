<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataVizualsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_vizuals', function (Blueprint $table) {
            $table->id();
            $table->string('reportingMonth');
            $table->string('trackName');
            $table->string('artistName');
            $table->string('transuctionMediaIsrc');
            $table->string('albumName');
            $table->string('transuctionMediaUpc');
            $table->string('country');
            $table->string('platform');
            $table->string('totalUnits');
            $table->string('netRevenue');
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
        Schema::dropIfExists('data_vizuals');
    }
}
