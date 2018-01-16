<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbbinfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('abbinfos', function (Blueprint $table) {
            $table->increments('id');
			
			// Foreign key
			$table->integer('user_id')->unsigned();
			
			$table->date('abb_date')->format('d.m.Y');
			$table->time('time');
			
			$table->string('year_rest')->nullable()->unsigned()->change();
			$table->date('next_scheduled_date')->format('d.m.Y');
			$table->boolean('payed')->default(false);
			
			$table->foreign('user_id')->references('id')->on('users');
			
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
        Schema::dropIfExists('abbinfo');
    }
}
