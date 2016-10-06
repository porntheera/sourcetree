<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookqueueTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bookqueues', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('register');
			$table->string('usecar');
			$table->string('valet');
			$table->time('valet1');
			$table->date('valet2');
			$table->string('wash');
			$table->string('aa');
			$table->string('bb');
			$table->string('cc');
			$table->string('dd');
			$table->string('ee');
			$table->string('ff');
			$table->string('mend');
			$table->string('tel');
			$table->datetime('sevice');
			$table->string('comment');
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
		Schema::drop('bookqueues');
	}

}
