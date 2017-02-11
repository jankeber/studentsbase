<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 50);
            $table->string('middle_name', 50)->nullable();
            $table->string('surname', 50);
            $table->date('date_of_birth')->nullable();
            $table->string('nationality')->nullable();
            $table->string('home_town')->nullable();
            $table->string('current_address')->nullable();
            $table->string('primary_school')->nullable();
            $table->string('high_school')->nullable();
            $table->string('college')->nullable();
            $table->string('photo')->nullable();
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
