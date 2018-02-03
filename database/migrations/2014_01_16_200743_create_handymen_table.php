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

            // Foreign key
            $table->integer('handy_id')->unsigned();

			$table->string('address')->nullable();
			$table->string('zipcode')->nullable();
			$table->string('city')->nullable();
			
			$table->string('phone')->nullable();
			
			$table->text('about')->nullable();

            $table->foreign('handy_id')->references('id')->on('handies');
			
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
