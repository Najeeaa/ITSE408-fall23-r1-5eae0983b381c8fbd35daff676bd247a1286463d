<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAnnouncementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('announcements', function (Blueprint $table) {
            $table->integer('id')->primary();
            $table->integer('entityID');
            $table->string('title_ar');
            $table->text('description_ar');
            $table->string('title_en');
            $table->text('description_en');
            $table->smallInteger('targets');
            $table->date('date');
            $table->date('expirary_date');
            $table->string('img', 100);
            $table->integer('type')->default(-1);
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
        Schema::dropIfExists('announcements');
    }
}
