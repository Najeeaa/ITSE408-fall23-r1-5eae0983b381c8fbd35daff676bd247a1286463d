<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserTypeTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_type', function (Blueprint $table) {
            $table->tinyInteger('user_type_id')->primary();
            $table->string('name_ar', 45)->nullable()->unique('nx_userTypes_2');
            $table->string('name_en', 45)->nullable()->unique('nx_userTypes_1');
            $table->char('code', 1)->unique('code_UNIQUE');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_type');
    }
}
