<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitybackTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entityback', function (Blueprint $table) {
            $table->integer('entityID')->primary();
            $table->tinyInteger('entityType');
            $table->string('TitleA', 100);
            $table->string('TitleE', 100);
            $table->string('link', 100);
            $table->string('Tel', 15);
            $table->string('email', 50);
            $table->integer('campus');
            $table->string('building', 100);
            $table->string('domain', 10);
            $table->integer('head');
            $table->text('vision');
            $table->text('mission');
            $table->text('evalues');
            $table->text('Description');
            $table->text('goals');
            $table->text('tasks');
            $table->text('headmessage');
            $table->decimal('location_lat', 8, 6)->default(32.847756);
            $table->decimal('location_lan', 8, 6)->default(13.222794);
            $table->integer('parententity');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entityback');
    }
}
