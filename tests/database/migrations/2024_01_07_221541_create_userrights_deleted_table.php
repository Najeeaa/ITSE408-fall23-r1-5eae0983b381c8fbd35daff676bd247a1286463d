<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrightsDeletedTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrights_deleted', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('entityID');
            $table->tinyInteger('previllegeid');
            $table->tinyInteger('canedit');
            $table->tinyInteger('canadd');
            $table->tinyInteger('candelete');
            $table->integer('grantedby');
            $table->timestamp('timestamp')->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrights_deleted');
    }
}
