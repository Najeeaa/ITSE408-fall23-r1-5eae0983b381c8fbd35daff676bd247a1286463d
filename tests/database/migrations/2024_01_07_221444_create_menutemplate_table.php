<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMenutemplateTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('menutemplate', function (Blueprint $table) {
            $table->integer('entitytype');
            $table->integer('entityID');
            $table->string('titleA', 70);
            $table->string('titleE', 70);
            $table->string('link', 150);
            $table->tinyInteger('parentitem');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('menutemplate');
    }
}
