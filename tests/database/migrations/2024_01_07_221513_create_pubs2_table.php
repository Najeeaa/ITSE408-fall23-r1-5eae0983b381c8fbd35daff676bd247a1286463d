<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubs2Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pubs2', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->text('title');
            $table->text('student');
            $table->text('supervisor');
            $table->text('department');
            $table->integer('dept_id');
            $table->integer('faculty');
            $table->integer('publisher_id');
            $table->integer('pub_type');
            $table->integer('year');
            $table->text('abstract');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pubs2');
    }
}
