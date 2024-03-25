<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationAuthorsoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publication_authorsold', function (Blueprint $table) {
            $table->integer('pub_id');
            $table->integer('author_seq');
            $table->integer('user_id')->default(-1);
            $table->string('author_ar', 100);
            $table->string('author_en', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publication_authorsold');
    }
}
