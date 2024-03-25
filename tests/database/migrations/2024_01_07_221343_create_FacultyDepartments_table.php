<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FacultyDepartments', function (Blueprint $table) {
            $table->tinyInteger('Facultycode');
            $table->tinyInteger('DepartmentCode');
            $table->string('DepartmentNameA', 50);
            $table->string('DepartmentNameE', 50);
            $table->string('DomainName', 6);
            
            $table->primary(['Facultycode', 'DepartmentCode']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FacultyDepartments');
    }
}
