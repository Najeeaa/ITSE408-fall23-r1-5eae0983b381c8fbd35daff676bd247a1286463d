<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty', function (Blueprint $table) {
            $table->tinyInteger('faculty_id')->primary();
            $table->string('name_ar', 100)->unique('nx_faculties_1');
            $table->string('name_en', 100)->unique('nx_faculties_2');
            $table->string('code', 10);
            $table->integer('dean_id');
            $table->integer('vice_dean_id');
            $table->integer('registrar_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('faculty');
    }
}
