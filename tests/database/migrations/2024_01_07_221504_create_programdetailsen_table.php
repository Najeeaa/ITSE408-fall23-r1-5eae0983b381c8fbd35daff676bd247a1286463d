<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramdetailsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programdetailsen', function (Blueprint $table) {
            $table->unsignedSmallInteger('program_id')->primary();
            $table->string('major', 200);
            $table->string('title', 250);
            $table->text('objectives');
            $table->text('outcomes');
            $table->text('description')->nullable();
            $table->text('entry_requiremnts')->nullable();
            $table->text('certifcateawarded');
            $table->text('jobmarket');
            
            $table->foreign('program_id', 'programintigrity')->references('program_id')->on('program')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programdetailsen');
    }
}
