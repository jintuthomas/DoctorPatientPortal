<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__orders', function (Blueprint $table) {
            $table->bigIncrements('o_id');
			$table->string('amt_id');
			$table->string('p_id');
			$table->string('mid');
			$table->string('quantity');
			$table->string('price');
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
        Schema::dropIfExists('tbl__orders');
    }
}
