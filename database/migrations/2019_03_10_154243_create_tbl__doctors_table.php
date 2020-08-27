<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDoctorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__doctors', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('d_name');
			$table->string('surname');
			$table->string('dob');
			$table->string('gender');
			$table->string('sid');
			$table->string('h_name');
			//$table->string('street');
			$table->string('city');
			$table->string('state');
			$table->string('country');
			$table->string('zip');
			$table->string('email');
			$table->string('pwd');
			$table->string('phone');
			$table->string('quali');
			$table->string('y_exp');
			$table->string('emp_history');
			$table->string('fee');
			$table->string('photo');
			$table->string('status');
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
        Schema::dropIfExists('tbl__doctors');
    }
}
