<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSliderTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('slider', function (Blueprint $table) {
            $table->smallInteger('slideno');
            $table->integer('entityID');
            $table->string('language', 10)->default('ar');
            $table->string('image', 25);
            $table->string('title', 250)->nullable();
            $table->string('subtitle', 250)->nullable();
            $table->string('bttntitle', 25)->nullable();
            $table->string('bttnlink', 100)->nullable();
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['slideno', 'entityID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('slider');
    }
}
