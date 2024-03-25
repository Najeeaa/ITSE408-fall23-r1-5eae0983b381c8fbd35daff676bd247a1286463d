<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagestructureTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pagestructure', function (Blueprint $table) {
            $table->integer('entityID');
            $table->integer('section_id');
            $table->string('versionfilename', 50);
            $table->integer('section_seq');
            $table->boolean('entityspecific')->default(0);
            $table->boolean('active')->default(0);
            
            $table->primary(['entityID', 'section_id', 'versionfilename', 'section_seq']);
            $table->foreign('section_id', 'sectionid')->references('section_id')->on('sections')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pagestructure');
    }
}
