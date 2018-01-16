<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateHandymenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('handymen', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			
			$table->string('name');
			$table->string('address');
			$table->string('zip');
			$table->string('city');
			
			$table->string('phone');
			
			$table->text('about');
			
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('handymen');
    }
}
