<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJournalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('journals', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('entityID');
            $table->string('cover', 150)->nullable();
            $table->string('link', 150)->nullable();
            $table->string('domain', 100);
            $table->string('telephone', 25)->nullable();
            $table->string('fax', 13)->nullable();
            $table->string('email', 100)->nullable();
            $table->string('issn', 25)->nullable();
            $table->string('issnonline', 25)->nullable();
            $table->string('address', 100)->nullable();
            $table->string('template', 50)->nullable();
            $table->boolean('hasownwebsite')->default(0);
            
            $table->primary(['ID', 'entityID']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('journals');
    }
}
