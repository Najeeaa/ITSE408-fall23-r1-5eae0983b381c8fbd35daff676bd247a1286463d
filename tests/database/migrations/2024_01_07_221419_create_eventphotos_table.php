<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventphotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventphotos', function (Blueprint $table) {
            $table->integer('eventid');
            $table->string('imagelink', 100);
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['eventid', 'imagelink']);
            $table->foreign('eventid', 'ephotos')->references('eventid')->on('news')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventphotos');
    }
}
