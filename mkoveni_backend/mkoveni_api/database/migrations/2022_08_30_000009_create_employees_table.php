<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEmployeesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
          $table->string('Employee Number')->unique();
          $table->string('First Name');
          $table->string('Surname');
          $table->string('Date of Birth');
          $table->string('Position');
          $table->string('Start Date');
          $table->string('Department');
          $table->string('Annual Salary');
          $table->string('Manager Employee Number')->nullable();
          $table->string('Project Code 1')->nullable();
          $table->string('Project Code 2')->nullable();
          $table->string('Project Code 3')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('employees');
    }
}
