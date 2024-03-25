<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventphotosbakTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventphotosbak', function (Blueprint $table) {
            $table->integer('eventid');
            $table->string('imagelink', 100);
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['eventid', 'imagelink']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventphotosbak');
    }
}
