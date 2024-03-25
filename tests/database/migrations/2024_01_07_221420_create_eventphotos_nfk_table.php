<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventphotosNfkTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventphotos_nfk', function (Blueprint $table) {
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
        Schema::dropIfExists('eventphotos_nfk');
    }
}
