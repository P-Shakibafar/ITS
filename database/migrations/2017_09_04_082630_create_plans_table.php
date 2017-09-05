<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreatePlansTable extends Migration {
		
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema ::create('plans', function(Blueprint $table) {
				$table -> increments('id');
				$table -> date('date');
				$table -> string('day');
				$table -> string('hour');
				$table -> integer('driver_id') -> unsigned();
				$table -> foreign('driver_id') -> references('id') -> on('users');
				$table -> integer('path_id') -> unsigned();
				$table -> foreign('path_id') -> references('id') -> on('paths');
				$table -> timestamps();
			});
		}
		
		/**
		 * Reverse the migrations.
		 *
		 * @return void
		 */
		public function down()
		{
			Schema ::dropIfExists('plans');
		}
	}
