<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentstatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('studentstats', function (Blueprint $table) {
            $table->integer('entityID')->primary();
            $table->integer('blocalmale')->default(0);
            $table->integer('blocalfemale')->default(0);
            $table->integer('bforiegnmale')->default(0);
            $table->integer('bforiegnfemale')->default(0);
            $table->integer('bglocalmale')->default(0);
            $table->integer('bglocalfemale')->default(0);
            $table->integer('bgforiegnmale')->default(0);
            $table->integer('bgforiegnfemale')->default(0);
            $table->integer('mmale')->default(0);
            $table->integer('mfemale')->default(0);
            $table->integer('dmale')->default(0);
            $table->integer('dfemale')->default(0);
            $table->integer('mgmale')->default(0);
            $table->integer('mgfemale')->default(0);
            $table->integer('dgmale')->default(0);
            $table->integer('dgfemale')->default(0);
            $table->timestamp('timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('studentstats');
    }
}
