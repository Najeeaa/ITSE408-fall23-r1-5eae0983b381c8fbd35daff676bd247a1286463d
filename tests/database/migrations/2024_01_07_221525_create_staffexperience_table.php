<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffexperienceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffexperience', function (Blueprint $table) {
            $table->integer('experience_id')->primary();
            $table->unsignedInteger('staff_id');
            $table->string('title_ar');
            $table->tinyInteger('startmonth');
            $table->smallInteger('startyear');
            $table->tinyInteger('endmonth');
            $table->smallInteger('endyear');
            $table->string('organization_ar', 150);
            $table->text('description_ar');
            $table->string('location_ar', 50);
            $table->string('title_en', 150);
            $table->string('organization_en', 100);
            $table->text('description_en');
            $table->string('location_en', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffexperience');
    }
}
