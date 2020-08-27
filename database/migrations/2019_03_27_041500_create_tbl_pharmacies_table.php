<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblPharmaciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_pharmacies', function (Blueprint $table) {
            $table->bigIncrements('mid');
			$table->string('b_id');
			$table->string('c_id');
			$table->string('m_name');
			$table->string('gram');
			$table->string('quantity');
			$table->string('price');
			$table->string('description');
			$table->string('type');
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
        Schema::dropIfExists('tbl_pharmacies');
    }
}
