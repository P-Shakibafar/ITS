<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateReservationsTable extends Migration {
		
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema ::create('reservations', function(Blueprint $table) {
				$table -> increments('id');
				$table -> integer('student_id') -> unsigned();
				$table -> foreign('student_id') -> references('id') -> on('users')
				       -> onUpdate('cascade') -> onDelete('cascade');
				$table -> integer('plan_id') -> unsigned();
//				$table -> foreign('plan_id') -> references('id') -> on('palns')
//				       -> onUpdate('cascade') -> onDelete('cascade');
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
			Schema ::dropIfExists('reservations');
		}
	}
