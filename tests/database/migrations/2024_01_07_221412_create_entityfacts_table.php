<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntityfactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entityfacts', function (Blueprint $table) {
            $table->integer('factid');
            $table->integer('entityID');
            $table->integer('factnumber');
            
            $table->primary(['factid', 'entityID']);
            $table->foreign('entityID', 'entity')->references('entityID')->on('entity')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entityfacts');
    }
}
