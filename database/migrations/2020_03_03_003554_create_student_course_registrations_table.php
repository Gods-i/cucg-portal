<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentCourseRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
    //     Schema::create('student_course_registrations', function (Blueprint $table) {
    //         $table->bigIncrements('id');
    //         $table->string('course_name');
    //         $table->string('semester');
    //         $table->string('level');
    //         $table->bigInteger('academicyear_id')->unsigned();
    //         $table->bigInteger('program_id')->unsigned();
    //         $table->bigInteger('programeOption_id')->unsigned();
    //         $table->string('admission_type');
    //         $table->string('stream');

    //         $table->foreign('academicyear_id')->references('id')->on('academic_years')->onUpdate('cascade')->onDelete('cascade');
    //         $table->foreign('program_id')->references('id')->on('programs')->onUpdate('cascade')->onDelete('cascade');
    //         $table->foreign('programeOption_id')->references('id')->on('program_options')->onUpdate('cascade')->onDelete('cascade');
    //         $table->timestamps();
    //     });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       // Schema::dropIfExists('student_course_registrations');
    }
}
