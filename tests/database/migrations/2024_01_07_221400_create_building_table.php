<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuildingTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('building', function (Blueprint $table) {
            $table->integer('building_id');
            $table->integer('entity_id');
            $table->string('building_name_ar', 250);
            $table->string('building_name_en', 100);
            $table->string('description_ar', 250);
            $table->string('description_en', 250);
            $table->decimal('location_lat', 8, 6);
            $table->decimal('location_lan', 8, 6);
            $table->string('building_image', 250)->default('building.jpg');
            
            $table->primary(['building_id', 'entity_id']);
            $table->foreign('entity_id', 'building_ibfk_1')->references('entityID')->on('entity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('building');
    }
}
