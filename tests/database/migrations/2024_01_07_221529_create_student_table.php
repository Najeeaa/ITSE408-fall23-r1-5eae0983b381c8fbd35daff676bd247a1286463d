<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student', function (Blueprint $table) {
            $table->unsignedInteger('student_id');
            $table->integer('user_id');
            $table->string('secondaryschoolname', 100)->nullable();
            $table->integer('secondaryschoolyear')->nullable();
            $table->decimal('secondaryschoolgrade', 5, 2)->nullable();
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['student_id', 'user_id']);
            $table->foreign('user_id', 'studentconstraint')->references('user_id')->on('user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student');
    }
}
