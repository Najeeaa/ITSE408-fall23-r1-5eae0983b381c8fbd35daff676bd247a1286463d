<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntitySubentitytypesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('entity_subentitytypes', function (Blueprint $table) {
            $table->tinyInteger('entitytype');
            $table->tinyInteger('chikdentitytype');
            
            $table->primary(['entitytype', 'chikdentitytype']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('entity_subentitytypes');
    }
}
