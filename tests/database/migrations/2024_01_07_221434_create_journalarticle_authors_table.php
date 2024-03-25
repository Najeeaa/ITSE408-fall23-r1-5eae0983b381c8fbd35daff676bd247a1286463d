<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalarticleAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalarticle_authors', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('article_id');
            $table->integer('user_id')->default(-1);
            $table->string('author_ar', 100);
            $table->string('author_en', 100);
            $table->integer('author_seq');
            $table->string('author_affiliation_ar');
            $table->string('author_affiliation_en');
            
            $table->primary(['id', 'article_id']);
            $table->foreign('article_id', 'articleid')->references('id')->on('journalvolumearticles')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journalarticle_authors');
    }
}
