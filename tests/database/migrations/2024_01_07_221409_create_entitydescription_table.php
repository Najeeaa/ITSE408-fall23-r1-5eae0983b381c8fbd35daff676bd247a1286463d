<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitydescriptionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entitydescription', function (Blueprint $table) {
            $table->integer('entityID')->primary();
            $table->text('description');
            $table->text('vision');
            $table->text('mission');
            $table->text('headmessage');
            $table->text('goals');
            $table->text('tasks');
            $table->text('values');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entitydescription');
    }
}
