<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventcommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('eventcomments', function (Blueprint $table) {
            $table->integer('commentid');
            $table->integer('eventid')->index('eventcomment');
            $table->timestamp('timestamp')->useCurrent()->useCurrentOnUpdate();
            $table->integer('userid');
            $table->text('comment');
            $table->integer('relatedto')->default(0);
            
            $table->primary(['commentid', 'eventid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('eventcomments');
    }
}
