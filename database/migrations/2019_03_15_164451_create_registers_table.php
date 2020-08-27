<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRegistersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('registers', function (Blueprint $table) {
            $table->bigIncrements('id');
			$table->string('p_name');
			$table->string('email');
			$table->string('password');
			$table->string('gender');
			$table->string('dob');
			$table->string('phone');
			$table->string('h_name');
			$table->string('street');
			$table->string('district');
			$table->string('city');
			$table->string('pin');
			$table->string('role');
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
        Schema::dropIfExists('registers');
    }
}
