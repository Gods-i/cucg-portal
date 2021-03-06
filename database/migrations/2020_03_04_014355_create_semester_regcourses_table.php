<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSemesterRegcoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semester_regcourses', function (Blueprint $table) {
            //$table->bigIncrements('id');
            $table->string('course_code')->primary();
            $table->string('course_name');
            $table->string('credit_hours');
            $table->string('semester');
            $table->string('level');
            $table->string('admission_type');
            $table->string('stream');
            $table->string('programeOption');
            $table->string('program');
            $table->string('academicYear');

            #$table->foreign('programeOptionId')->references('id')->on('program_options')->onUpdate('cascade')->onDelete('cascade');
            #$table->foreign('programId')->references('id')->on('programs')->onUpdate('cascade')->onDelete('cascade');
            #$table->foreign('academicYearId')->references('id')->on('academic_years')->onUpdate('cascade')->onDelete('cascade');
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
        Schema::dropIfExists('semester_regcourses');
    }
}
