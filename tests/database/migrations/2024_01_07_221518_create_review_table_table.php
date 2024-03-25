<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewTableTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_table', function (Blueprint $table) {
            $table->integer('review_id')->primary();
            $table->string('user_name', 200);
            $table->integer('user_rating');
            $table->text('user_review');
            $table->integer('datetime');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('review_table');
    }
}
