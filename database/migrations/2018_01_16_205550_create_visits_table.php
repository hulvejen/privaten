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
			
            $table->timestamps();
			$table->text('job')->nullable();
			$table->date('date')->nullable();
						
			$table->foreign('handymen_id')->references('id')->on('handymen');
			
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
