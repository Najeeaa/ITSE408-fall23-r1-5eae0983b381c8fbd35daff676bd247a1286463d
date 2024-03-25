<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnirequestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnirequests', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->string('firstname_ar', 20);
            $table->string('secondname_ar', 20);
            $table->string('thirdname_ar', 20);
            $table->string('lastname_ar', 20);
            $table->string('fullname_ar', 100)->nullable();
            $table->bigInteger('student_id')->nullable();
            $table->string('email', 150);
            $table->year('gyear', 4);
            $table->integer('faculty');
            $table->integer('department');
            $table->tinyInteger('status')->default(-1);
            $table->string('token')->nullable();
            $table->timestamp('timestamp')->nullable()->useCurrent();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnirequests');
    }
}
