<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateLastLocationsTable extends Migration {
		
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema ::create('last__locations', function(Blueprint $table) {
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
			Schema ::dropIfExists('last__locations');
		}
	}
