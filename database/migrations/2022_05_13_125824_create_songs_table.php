<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSongsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('cover_upload')->nullable();
            $table->string('release_title')->nullable();
            $table->string('copyright_holder')->nullable();
            $table->string('copyright_year')->nullable();
            $table->string('primary_genre')->nullable();
            $table->string('language')->nullable();
            $table->string('record_label')->nullable();
            $table->string('record_artist')->nullable();
            $table->string('lyricist')->nullable();
            $table->string('music_composer')->nullable();
            $table->string('music_upload')->nullable();
            $table->string('uploadCheck1')->nullable();
            $table->string('uploadCheck2')->nullable();
            $table->string('uploadCheck3')->nullable();
            $table->string('exampleRadios1')->nullable();
            $table->string('exampleRadios2')->nullable();
            $table->string('musics_upload')->nullable();
            $table->string('track_pricing')->nullable();
            $table->string('digital_stores')->nullable();
            $table->string('stores')->nullable();
            $table->string('status')->nullable()->default('in-progress');
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
        Schema::dropIfExists('songs');
    }
}
