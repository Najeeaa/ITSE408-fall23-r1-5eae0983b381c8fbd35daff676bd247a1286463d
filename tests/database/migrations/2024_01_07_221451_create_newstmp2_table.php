<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewstmp2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstmp2', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('eventid');
            $table->integer('entityID');
            $table->tinyInteger('newscategory');
            $table->string('language', 11)->default('ar');
            $table->string('eventTitle', 256);
            $table->text('eventText');
            $table->integer('addedby');
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('approved')->default(0);
            $table->integer('viewed')->default(0);
            $table->integer('liked')->default(0);
            $table->integer('shared')->default(0);
            $table->string('img', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newstmp2');
    }
}
