<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsermessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usermessages', function (Blueprint $table) {
            $table->integer('message_id');
            $table->integer('receiver_id');
            $table->integer('sender_id');
            $table->timestamp('timestamp')->useCurrent();
            $table->string('subject');
            $table->text('message');
            $table->boolean('status')->default(0);
            
            $table->primary(['message_id', 'receiver_id', 'sender_id']);
            $table->foreign('receiver_id', 'umessages')->references('user_id')->on('user')->onDelete('cascade')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usermessages');
    }
}
