<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitydetailsenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entitydetailsen', function (Blueprint $table) {
            $table->integer('entityID');
            $table->string('title', 100);
            $table->string('building', 100)->nullable();
            $table->text('vision')->nullable();
            $table->text('mission')->nullable();
            $table->text('evalues')->nullable();
            $table->text('Description')->nullable();
            $table->text('goals')->nullable();
            $table->text('tasks')->nullable();
            $table->text('headmessage')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entitydetailsen');
    }
}
