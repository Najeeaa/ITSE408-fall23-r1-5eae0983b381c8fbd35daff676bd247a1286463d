<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyDepartmentsincTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('FacultyDepartmentsinc', function (Blueprint $table) {
            $table->integer('entityID')->primary();
            $table->tinyInteger('Facultycode');
            $table->tinyInteger('DepartmentCode');
            $table->string('DepartmentNameA', 50);
            $table->string('DepartmentNameE', 50);
            $table->string('DomainName', 6);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('FacultyDepartmentsinc');
    }
}
