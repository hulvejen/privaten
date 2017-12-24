<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaskTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tasks', function (Blueprint $table) {
            $table->increments('id');
			// Foreign key
			$table->integer('user_id')->unsigned();
			
			$table->string('task');
			$table->string('image')->nullable();
			
			$table->boolean('done')->nullable();
			$table->string('handy_id')->nullable();
            $table->timestamps();
			
			$table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('tasks',function(Blueprint $table){
			$table->dropForeign('tasks_user_id_foreign');
		});
		
        Schema::dropIfExists('tasks');
    }
}
