<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateLocationsTable extends Migration {
		
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema ::create('locations', function(Blueprint $table) {
				$table -> increments('id');
				$table -> string('longitude');
				$table -> string('latitude');
				$table -> integer('driver_id') -> unsigned();
				$table -> foreign('driver_id') -> references('id') -> on('users');
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
			Schema ::dropIfExists('locations');
		}
	}
