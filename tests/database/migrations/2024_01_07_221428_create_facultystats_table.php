<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacultystatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultystats', function (Blueprint $table) {
            $table->integer('Facultycode');
            $table->integer('Category');
            $table->integer('subcategory');
            $table->integer('male');
            $table->integer('female');
            
            $table->primary(['Facultycode', 'Category', 'subcategory']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('facultystats');
    }
}
