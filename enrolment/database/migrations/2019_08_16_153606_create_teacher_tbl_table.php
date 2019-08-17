<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeacherTblTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('teacher_tbl', function (Blueprint $table) {
            $table->bigIncrements('teacher_id');
            $table->string('teacher_name');
            $table->integer('teacher_serial_no');
            $table->string('teacher_email');
            $table->integer('teacher_phone');
            $table->string('teacher_address');
            $table->string('teacher_password');
            $table->string('teacher_image');
            $table->string('teacher_department');
            $table->string('teacher_join_date');
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
        Schema::dropIfExists('teacher_tbl');
    }
}
