<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserrightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userrights', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('entityID');
            $table->tinyInteger('previllegeid');
            $table->boolean('canedit')->default(1);
            $table->boolean('canadd')->default(1);
            $table->boolean('candelete')->default(1);
            $table->integer('grantedby')->default(1);
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['user_id', 'entityID', 'previllegeid']);
            $table->foreign('user_id', 'user')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('userrights');
    }
}
