<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQualificationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('qualification', function (Blueprint $table) {
            $table->tinyInteger('qualification_id')->primary();
            $table->string('qualificationtitlear', 50);
            $table->string('qualificationtitleen', 50);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('qualification');
    }
}
