<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewsDetailsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('news_details', function (Blueprint $table) {
            $table->integer('eventid');
            $table->string('language', 10);
            $table->string('eventTitle');
            $table->text('eventText');
            $table->integer('viewed');
            $table->integer('liked');
            $table->integer('shared');
            $table->integer('approved')->default(0);
            
            $table->primary(['eventid', 'language']);
            $table->foreign('eventid', 'eventid')->references('eventid')->on('news')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('news_details');
    }
}
