<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAcademicstaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('academicstaff', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->unsignedInteger('user_id')->index('user_id');
            $table->text('bio_ar')->nullable();
            $table->text('bio_en')->nullable();
            $table->tinyInteger('qualification_id')->nullable();
            $table->tinyInteger('initialqualification')->nullable();
            $table->date('uotstartdate')->nullable();
            $table->string('jobtitle', 100)->nullable();
            $table->string('generalmajor', 100)->nullable();
            $table->string('specialization', 100)->nullable();
            $table->tinyInteger('academicrank_id')->nullable();
            $table->date('qualificationdate')->nullable();
            $table->date('lastpromotiondate')->nullable();
            $table->string('personalwebsite', 50)->nullable();
            $table->integer('faculty_id')->nullable();
            $table->boolean('status')->default(0);
            $table->string('departmentname')->nullable();
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
        Schema::dropIfExists('academicstaff');
    }
}
