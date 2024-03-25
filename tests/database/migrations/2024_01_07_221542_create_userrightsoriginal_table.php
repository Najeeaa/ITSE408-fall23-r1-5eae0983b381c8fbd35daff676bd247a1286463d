<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrightsoriginalTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrightsoriginal', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('user_id');
            $table->integer('entityID');
            $table->tinyInteger('previllegeid');
            $table->tinyInteger('canedit');
            $table->tinyInteger('canadd');
            $table->tinyInteger('candelete');
            $table->integer('grantedby');
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['id', 'user_id', 'entityID', 'previllegeid']);
            $table->foreign('user_id', 'urights')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrightsoriginal');
    }
}
