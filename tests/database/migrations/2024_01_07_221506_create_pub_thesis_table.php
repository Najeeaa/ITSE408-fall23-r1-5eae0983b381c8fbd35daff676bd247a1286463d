<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePubThesisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pub_thesis', function (Blueprint $table) {
            $table->integer('PubID')->primary();
            $table->integer('PubType');
            $table->integer('ThesisLanguage')->default(0)->comment("0 - Arabic, 1 - English");
            $table->string('Author', 50);
            $table->string('FirstSupervisor', 50);
            $table->string('secondsupervisor', 50);
            $table->string('thirdsupervisor', 50);
            $table->tinyInteger('Facutlty');
            $table->string('Department', 50);
            $table->tinyInteger('department_id');
            $table->integer('Year');
            $table->text('TitleA');
            $table->text('TitleE');
            $table->text('AbstractA');
            $table->text('AbstractE');
            $table->string('FulltextLink', 100);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pub_thesis');
    }
}
