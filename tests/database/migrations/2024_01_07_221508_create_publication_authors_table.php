<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationAuthorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_authors', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('pub_id');
            $table->string('author_ar', 100);
            $table->string('author_en', 100)->nullable();
            $table->integer('seq');
            $table->integer('user_id')->default(-1);
            $table->integer('author_entity')->nullable();
            
            $table->foreign('pub_id', 'pubid')->references('pub_id')->on('publications')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_authors');
    }
}
