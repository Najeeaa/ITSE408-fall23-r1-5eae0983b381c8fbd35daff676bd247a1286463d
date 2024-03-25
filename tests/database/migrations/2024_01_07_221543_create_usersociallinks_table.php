<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersociallinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usersociallinks', function (Blueprint $table) {
            $table->integer('user_id');
            $table->integer('sociallink_id');
            $table->string('link');
            $table->timestamp('timestamp')->useCurrent();
            
            $table->primary(['user_id', 'sociallink_id']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usersociallinks');
    }
}
