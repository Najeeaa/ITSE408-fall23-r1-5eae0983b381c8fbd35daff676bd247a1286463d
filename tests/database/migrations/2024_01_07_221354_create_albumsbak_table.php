<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlbumsbakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albumsbak', function (Blueprint $table) {
            $table->integer('album_id');
            $table->integer('entityID');
            $table->tinyInteger('category');
            $table->string('album_title');
            $table->string('album_date', 30);
            $table->integer('createdby');
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['album_id', 'entityID']);
            $table->foreign('entityID', 'entityfk')->references('entityID')->on('entity')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('albumsbak');
    }
}
