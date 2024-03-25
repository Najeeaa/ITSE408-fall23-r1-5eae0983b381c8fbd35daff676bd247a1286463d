<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFaqTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faq', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('entityID');
            $table->string('lang', 2)->default('ar');
            $table->string('question');
            $table->text('answer');
            $table->timestamp('timestamp')->useCurrent();
            
            $table->foreign('entityID', 'entityid')->references('entityID')->on('entity')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faq');
    }
}
