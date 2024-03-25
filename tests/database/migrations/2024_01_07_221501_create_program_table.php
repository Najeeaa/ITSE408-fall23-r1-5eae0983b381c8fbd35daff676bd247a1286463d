<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('program', function (Blueprint $table) {
            $table->unsignedSmallInteger('program_id');
            $table->integer('entityID');
            $table->smallInteger('program_type');
            $table->tinyInteger('THE_classification')->nullable();
            $table->integer('total_credits')->nullable();
            $table->smallInteger('duration');
            $table->smallInteger('durationunit')->nullable();
            $table->integer('language');
            $table->smallInteger('weeklyteachinghours');
            $table->smallInteger('weeklylabhours');
            $table->smallInteger('weeklytraininghours');
            $table->smallInteger('generalcredits');
            $table->smallInteger('electivecredits');
            $table->smallInteger('compulsorycredits');
            $table->smallInteger('trainingcredits');
            $table->smallInteger('supportivecridets');
            $table->string('image', 50)->nullable();
            $table->string('booklet')->nullable();
            $table->smallInteger('basedon')->default(-1);
            
            $table->primary(['program_id', 'entityID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('program');
    }
}
