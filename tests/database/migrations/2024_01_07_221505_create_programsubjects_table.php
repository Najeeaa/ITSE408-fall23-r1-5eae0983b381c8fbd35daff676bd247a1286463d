<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsubjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programsubjects', function (Blueprint $table) {
            $table->unsignedSmallInteger('program_id');
            $table->string('subject_id', 15);
            $table->smallInteger('sub_program_id');
            $table->tinyInteger('sub_semester');
            $table->tinyInteger('midmark')->default(50);
            $table->tinyInteger('finalmark')->default(50);
            $table->tinyInteger('passmark')->default(50);
            $table->tinyInteger('sub_type');
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['program_id', 'subject_id', 'sub_program_id']);
            $table->foreign('program_id', 'programidc')->references('program_id')->on('program')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programsubjects');
    }
}
