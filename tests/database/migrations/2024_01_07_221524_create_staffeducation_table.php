<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffeducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staffeducation', function (Blueprint $table) {
            $table->integer('education_id')->primary();
            $table->integer('staff_id');
            $table->tinyInteger('qualification')->index('qualification');
            $table->string('specialization_ar');
            $table->string('organization_ar', 100);
            $table->string('specialization_en');
            $table->string('organization_en', 100);
            $table->smallInteger('month');
            $table->smallInteger('year');
            
            $table->foreign('staff_id', 'staffeducation_ibfk_1')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('staffeducation');
    }
}
