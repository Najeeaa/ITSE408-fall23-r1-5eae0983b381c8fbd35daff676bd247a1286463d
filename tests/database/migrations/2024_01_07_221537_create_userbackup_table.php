<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserbackupTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('userbackup', function (Blueprint $table) {
            $table->integer('user_id');
            $table->string('national_id', 12);
            $table->integer('entityID');
            $table->tinyInteger('user_type');
            $table->varbinary('password', 132)->default('0');
            $table->string('email', 150);
            $table->string('firstname_ar', 20);
            $table->string('secondname_ar', 20);
            $table->string('thirdname_ar', 20);
            $table->string('lastname_ar', 20);
            $table->string('preferredname', 100);
            $table->string('fullname_ar', 100);
            $table->string('firstname_en', 20);
            $table->string('secondname_en', 20);
            $table->string('thirdname_en', 20);
            $table->string('lastname_en', 20);
            $table->string('address', 250)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('nationality_id', 3);
            $table->char('gender', 1);
            $table->string('avatar', 150)->default('profile.jpg');
            $table->string('phoneno', 12);
            $table->varbinary('pinno', 60);
            $table->smallInteger('status')->default(1);
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
        Schema::dropIfExists('userbackup');
    }
}
