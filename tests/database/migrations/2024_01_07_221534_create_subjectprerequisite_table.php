<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSubjectprerequisiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('subjectprerequisite', function (Blueprint $table) {
            $table->integer('program_id');
            $table->string('subject_id', 15);
            $table->string('prerequisite_id', 15);
            
            $table->primary(['program_id', 'subject_id', 'prerequisite_id']);
            $table->foreign('subject_id', 'subjectprerequisite_ibfk_1')->references('subject_id')->on('subject');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('subjectprerequisite');
    }
}
