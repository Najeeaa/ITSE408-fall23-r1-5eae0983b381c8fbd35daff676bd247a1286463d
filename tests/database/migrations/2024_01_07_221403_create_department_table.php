<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('department', function (Blueprint $table) {
            $table->tinyInteger('department_id');
            $table->unsignedTinyInteger('faculty_id');
            $table->string('name_ar', 45);
            $table->string('name_en', 45);
            $table->string('code', 5);
            $table->boolean('status')->default(1)->comment("1 if opened\n0 if closed\n");
            $table->integer('head_id')->index('fk_department_lecturer1_idx')->comment("department manager ( cannot be a student or an employee)");
            
            $table->primary(['department_id', 'faculty_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('department');
    }
}
