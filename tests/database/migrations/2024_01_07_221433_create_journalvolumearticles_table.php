<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalvolumearticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalvolumearticles', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('volumeid')->index('voluid');
            $table->string('title');
            $table->string('articlelanguage', 2);
            $table->text('abstract');
            $table->string('fulltextlink', 100);
            
            $table->primary(['id', 'volumeid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journalvolumearticles');
    }
}
