<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitysociallinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entitysociallinks', function (Blueprint $table) {
            $table->integer('entity_id');
            $table->integer('sociallink_id');
            $table->string('link');
            
            $table->primary(['entity_id', 'sociallink_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entitysociallinks');
    }
}
