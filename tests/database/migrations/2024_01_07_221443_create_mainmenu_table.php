<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMainmenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('mainmenu', function (Blueprint $table) {
            $table->integer('itemid');
            $table->integer('entityID')->index('entityid');
            $table->string('titlear', 70);
            $table->string('titleen', 70);
            $table->string('link', 150);
            $table->integer('parentitem');
            
            $table->primary(['itemid', 'entityID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('mainmenu');
    }
}
