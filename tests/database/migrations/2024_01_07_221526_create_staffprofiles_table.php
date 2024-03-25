<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffprofilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffprofiles', function (Blueprint $table) {
            $table->string('staffname', 100);
            $table->string('national_id', 15);
            $table->string('staff_status', 50);
            $table->string('general_major', 50);
            $table->date('startdate');
            $table->string('scientificrank', 50);
            $table->string('qualification', 50);
            $table->string('specificmajor', 50);
            $table->string('department', 50);
            $table->tinyInteger('faculty');
            $table->string('jobtype', 50);
            $table->string('nationality', 50);
            $table->string('yearlyratio', 50);
            $table->string('contracttype', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffprofiles');
    }
}
