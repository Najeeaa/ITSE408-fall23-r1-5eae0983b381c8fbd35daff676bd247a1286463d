<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRegistrationinvitationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registrationinvitation', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('invitor')->nullable();
            $table->string('useremail', 100);
            $table->string('username', 100)->nullable();
            $table->string('token');
            $table->integer('entityid')->nullable();
            $table->boolean('done')->default(0);
            $table->timestamp('timestamp')->useCurrent();
            
            $table->index(['useremail', 'token'], 'useremail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('registrationinvitation');
    }
}
