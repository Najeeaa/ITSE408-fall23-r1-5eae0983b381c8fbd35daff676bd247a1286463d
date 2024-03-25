<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSectionversionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sectionversion', function (Blueprint $table) {
            $table->integer('section_id');
            $table->string('versionfilename', 50);
            $table->string('versionimage', 50);
            
            $table->primary(['section_id', 'versionfilename']);
            $table->foreign('section_id', 'sectoin')->references('section_id')->on('sections')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('sectionversion');
    }
}
