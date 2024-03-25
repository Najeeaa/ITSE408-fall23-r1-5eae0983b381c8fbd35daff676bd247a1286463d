<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('publications', function (Blueprint $table) {
            $table->integer('pub_id')->primary();
            $table->integer('entity_id');
            $table->integer('user_id');
            $table->integer('pub_type');
            $table->integer('language')->default(0)->comment("0 - Arabic, 1 - English");
            $table->tinyInteger('month')->nullable();
            $table->integer('year')->nullable();
            $table->text('title');
            $table->text('abstract');
            $table->string('location', 100)->nullable();
            $table->integer('volume')->default(-1);
            $table->integer('number')->default(-1);
            $table->mediumInteger('startpage')->default(0);
            $table->mediumInteger('endpage')->default(0);
            $table->integer('publisher_id');
            $table->string('publicationlink')->nullable();
            $table->string('filename', 100)->nullable();
            $table->boolean('fulltextstatus')->default(0)->comment("0 - private 1-colleagues 3- public");
            $table->mediumInteger('downloads')->nullable();
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('publications');
    }
}
