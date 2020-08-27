<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblcartsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tblcarts', function (Blueprint $table) {
            $table->bigIncrements('cart_id');
			$table->bigInteger('id')->unsigned();
			$table->foreign('id')->references('id')->on('registers')->onDelete('cascade');
			$table->bigInteger('mid')->unsigned();
			$table->foreign('mid')->references('mid')->on('tbl_pharmacies')->onDelete('cascade');
			$table->bigInteger('quantity')->unsigned();
			$table->bigInteger('price')->unsigned();
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
        Schema::dropIfExists('tblcarts');
    }
}
