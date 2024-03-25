<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNewstmpTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newstmp', function (Blueprint $table) {
            $table->integer('eventid');
            $table->integer('entityID');
            $table->tinyInteger('newscategory')->index('category');
            $table->string('eventTitle', 256);
            $table->text('eventText');
            $table->integer('addedby');
            $table->timestamp('timestamp')->useCurrent();
            $table->boolean('approved')->default(0);
            $table->integer('viewed')->default(0);
            $table->integer('liked')->default(0);
            $table->integer('shared')->default(0);
            $table->string('img', 100);
            
            $table->primary(['eventid', 'entityID', 'newscategory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('newstmp');
    }
}
