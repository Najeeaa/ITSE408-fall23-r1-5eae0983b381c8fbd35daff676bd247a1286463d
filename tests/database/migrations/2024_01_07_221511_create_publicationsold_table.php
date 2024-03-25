<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsoldTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publicationsold', function (Blueprint $table) {
            $table->integer('pub_id')->primary();
            $table->integer('entity_id');
            $table->integer('user_id');
            $table->integer('pub_type');
            $table->integer('language')->default(0)->comment("0 - Arabic, 1 - English");
            $table->tinyInteger('month');
            $table->integer('year');
            $table->string('title');
            $table->text('abstract');
            $table->string('location', 100);
            $table->integer('publisher_id');
            $table->string('full_text_link', 100);
            $table->smallInteger('volume');
            $table->smallInteger('number');
            $table->string('pages', 20);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publicationsold');
    }
}
