<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->text('type');
            $table->integer('level');
            $table->string('token');
            $table->string('pushId');
            $table->string('fullName');
            $table->string('userName');
            $table->string('userPassword');
            $table->string('nationalId');
            $table->string('homeAddress');
            $table->string('fatherName');
            $table->string('fatherPhoneNumber');
            $table->text('birthDate');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
