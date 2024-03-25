<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->integer('eventID')->primary();
            $table->integer('entityID')->index('entityID');
            $table->integer('event_category')->index('events_ibfk_2');
            $table->string('eventTitle_ar')->nullable();
            $table->text('eventDesc_ar')->nullable();
            $table->string('eventTitle_en')->nullable();
            $table->text('eventDesc_en')->nullable();
            $table->string('place_ar', 100)->nullable();
            $table->string('place_en', 100)->nullable();
            $table->decimal('location_lat', 8, 6)->default(0.000000);
            $table->decimal('location_lan', 8, 6)->default(0.000000);
            $table->date('start_date');
            $table->date('end_date');
            $table->time('start_time')->nullable();
            $table->time('end_time')->nullable();
            $table->string('img', 100);
            $table->boolean('event_type')->default(0)->comment("0 - public 1-private");
            $table->integer('event_level')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
