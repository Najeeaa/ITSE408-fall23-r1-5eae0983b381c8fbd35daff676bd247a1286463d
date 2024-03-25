<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStaffTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('staff', function (Blueprint $table) {
            $table->increments('staff_id');
            $table->string('faculty_id', 50)->default('0');
            $table->string('national_id', 12)->unique('national_id');
            $table->string('department_id', 50)->default('0');
            $table->varbinary('password', 132)->default('0');
            $table->string('email', 150);
            $table->string('firstname_ar', 20);
            $table->string('secondname_ar', 20);
            $table->string('thirdname_ar', 20);
            $table->string('lastname_ar', 20);
            $table->string('preferredname', 100);
            $table->string('fullname_ar', 100);
            $table->string('firstname_en', 20);
            $table->string('secondname_en', 20);
            $table->string('thirdname_en', 20);
            $table->string('lastname_en', 20);
            $table->text('bio_ar');
            $table->text('bio_en');
            $table->tinyInteger('qualification_id');
            $table->tinyInteger('initialqualification');
            $table->date('uotstartdate');
            $table->string('address', 250)->nullable();
            $table->date('birthdate')->nullable();
            $table->string('nationality_id', 3);
            $table->char('gender', 1);
            $table->string('avatar', 150)->default('profile.jpg');
            $table->string('phoneno', 12);
            $table->string('jobtitle', 100);
            $table->string('generalmajor', 100)->nullable();
            $table->string('specialization', 100)->nullable();
            $table->tinyInteger('academicrank_id');
            $table->date('qualificationdate')->nullable();
            $table->date('lastpromotiondate')->nullable();
            $table->string('personalwebsite', 50);
            $table->varbinary('pinno', 60);
            $table->string('epw', 100);
            $table->integer('parententity');
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
        Schema::dropIfExists('staff');
    }
}
