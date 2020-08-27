<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblDelievryAddressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl__delievry_addresses', function (Blueprint $table) {
			$table->bigIncrements('dl_id');
			$table->string('p_id');	
			$table->string('name');	
			$table->string('address');	
			$table->string('city');	
			$table->string('district');	
			$table->string('pin');	
			$table->string('phone');
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
        Schema::dropIfExists('tbl__delievry_addresses');
    }
}
