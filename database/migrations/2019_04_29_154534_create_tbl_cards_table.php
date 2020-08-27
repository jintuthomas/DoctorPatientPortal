<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTblCardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tbl_cards', function (Blueprint $table) {
            $table->bigIncrements('c_id');
			$table->string('c_name');			
			$table->string('c_number');	
			$table->string('cvv');
			$table->string('exp');	
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
        Schema::dropIfExists('tbl_cards');
    }
}
