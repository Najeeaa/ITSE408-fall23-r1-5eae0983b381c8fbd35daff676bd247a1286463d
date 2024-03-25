<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumPhotos1Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('album_photos1', function (Blueprint $table) {
            $table->integer('photo_id');
            $table->integer('album_id')->index('albumid');
            $table->string('photoname');
            $table->string('photocomment')->nullable();
            
            $table->primary(['photo_id', 'album_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('album_photos1');
    }
}
