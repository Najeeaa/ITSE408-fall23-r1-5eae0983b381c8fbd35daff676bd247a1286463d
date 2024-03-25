<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrintedreturnformsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('printedreturnforms', function (Blueprint $table) {
            $table->string('faculty', 50)->default('0');
            $table->string('department', 50)->default('0');
            $table->string('fullname_ar', 100);
            $table->string('qualification', 50);
            $table->string('national_id', 12);
            $table->string('generalmajor', 100)->nullable();
            $table->string('specialization', 100)->nullable();
            $table->string('academicrank', 50);
            $table->date('returntoworkdate');
            $table->string('returntoworktype', 50);
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
        Schema::dropIfExists('printedreturnforms');
    }
}
