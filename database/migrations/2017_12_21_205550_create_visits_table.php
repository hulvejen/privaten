<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVisitsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('visits', function (Blueprint $table) {
            $table->increments('id');
			// Foreign key
			$table->integer('handymen_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->integer('handy_id')->unsigned();
			
			
            $table->timestamps();
			$table->text('jobcomment')->nullable();
			$table->date('visitdate')->nullable();
			$table->boolean('done')->nullable();
			
						
			$table->foreign('handymen_id')->references('id')->on('handymen');
            $table->foreign('user_id')->references('id')->on('users');
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
		Schema::table('visits',function(Blueprint $table){
			$table->dropForeign('visits_handymen_id_foreign');
		});
		
        Schema::dropIfExists('visits');
    }
}
