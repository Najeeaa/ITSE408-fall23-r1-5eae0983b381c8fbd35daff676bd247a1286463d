<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournaleditorialsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journaleditorials', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('journalid')->index('editorid');
            $table->integer('editorid')->default(-1);
            $table->tinyInteger('position')->index('position');
            $table->string('namear', 100)->default('لم يتم الادخال');
            $table->string('nameen', 100)->default('hsn not been entered');
            $table->string('affeliationen')->nullable();
            $table->string('affeliationar')->nullable();
            $table->string('email', 50)->nullable();
            $table->string('telephone', 20)->nullable();
            $table->string('photo', 100)->default('default.jpg');
            
            $table->primary(['id', 'journalid']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journaleditorials');
    }
}
