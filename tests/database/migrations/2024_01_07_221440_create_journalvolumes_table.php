<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalvolumesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journalvolumes', function (Blueprint $table) {
            $table->integer('id');
            $table->integer('journalid')->index('vjid');
            $table->tinyInteger('volumeno')->nullable();
            $table->boolean('issue')->default(1);
            $table->smallInteger('year')->nullable();
            $table->tinyInteger('month')->nullable();
            $table->string('volumetitlear', 250)->nullable();
            $table->string('volumetitleen', 250)->nullable();
            $table->string('cover', 100)->nullable();
            $table->string('link', 250)->nullable();
            $table->timestamp('timestamp')->useCurrent();
            
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
        Schema::dropIfExists('journalvolumes');
    }
}
