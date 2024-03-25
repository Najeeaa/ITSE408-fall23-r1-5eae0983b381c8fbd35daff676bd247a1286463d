<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRccpublicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rccpublications', function (Blueprint $table) {
            $table->string('name', 100);
            $table->mediumText('title');
            $table->string('email', 100);
            $table->string('facukty', 100);
            $table->string('department', 100);
            $table->mediumText('publisher');
            $table->string('publicationyear', 100);
            $table->string('issue', 100);
            $table->string('pages', 100);
            $table->string('volume', 100);
            $table->string('publicationtype', 50);
            $table->mediumText('abstract');
            $table->string('filename', 50);
            $table->text('link');
            $table->string('authorenglishname', 100);
            $table->mediumText('otherauthors');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rccpublications');
    }
}
