<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subject', function (Blueprint $table) {
            $table->string('subject_id', 15);
            $table->integer('entityID');
            $table->smallInteger('program_id');
            $table->string('title_ar', 45)->nullable();
            $table->string('title_en', 45)->nullable();
            $table->text('description_ar')->nullable();
            $table->string('description_en', 1000)->nullable();
            $table->unsignedTinyInteger('weeklylecturhours')->nullable();
            $table->unsignedTinyInteger('weeklytutorialhours');
            $table->unsignedTinyInteger('weeklylabhours');
            $table->unsignedTinyInteger('credits');
            
            $table->primary(['subject_id', 'entityID', 'program_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subject');
    }
}
