<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudyEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('study_events', function (Blueprint $table) {
            $table->id();
            $table->integer('teacher_id');
            $table->string('teacher_name');
            $table->string('subject');
            $table->dateTime('dateTimeEvent');
            $table->string('zlink')->nullable;
            $table->string('mlink')->nullable;
            $table->string('description');
            $table->string('branchName');
            $table->string('status')->default('null');
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
        Schema::dropIfExists('study_events');
    }
}
