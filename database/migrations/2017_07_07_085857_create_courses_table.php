<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('courses',function(Blueprint $table) {
        $table->increments('id');
        $table->string('name');
        $table->boolean('hidden');
        $table->integer('total_question');
        $table->integer('subject_id')->unsigned();
        $table->foreign('subject_id')->references('id')->on('subjects');
        $table->integer('admin_id')->unsigned();
        $table->foreign('admin_id')->references('id')->on('admins');
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
        Schema::dropIfExists('courses');
    }
}
