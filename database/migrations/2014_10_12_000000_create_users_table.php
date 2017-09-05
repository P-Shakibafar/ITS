<?php
	use Illuminate\Support\Facades\Schema;
	use Illuminate\Database\Schema\Blueprint;
	use Illuminate\Database\Migrations\Migration;
	
	class CreateUsersTable extends Migration {
		
		/**
		 * Run the migrations.
		 *
		 * @return void
		 */
		public function up()
		{
			Schema ::create('users', function(Blueprint $table) {
				$table -> increments('id');
				$table -> string('first_name');
				$table -> string('last_name');
				$table -> string('field')->default(NULL);
				$table -> string('username')->nullable();
				$table -> string('student_nubmer')->unique();
				$table -> tinyInteger('enter_year')->default(0);
				$table -> string('sex');
				$table -> integer('mobile');
				$table -> string('photo')->nullable();
				$table -> boolean('native')->default(NULL);
				$table -> string('email') -> unique();
				$table -> string('password');
				$table -> boolean('status')->default(FALSE);
//				$table -> integer('vehicle_id') -> unsigned()->index();
//				$table -> foreign('vehicle_id') -> references('id') -> on('cars')
//				       -> onUpdate('cascade') -> onDelete('cascade');
				$table -> rememberToken();
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
			Schema ::dropIfExists('users');
		}
	}
