<?php

use Paravel\Database\DB;
use Paravel\Database\Migration;

class CreateUsersTable extends Migration
{
	public function up()
	{
		$query = '
		CREATE TABLE IF NOT EXISTS users (
			id INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			username VARCHAR(50) NOT NULL,
			password VARCHAR(50) NOT NULL,
			created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
		)';

		DB::statement($query);
	}

	public function down()
	{
		$query = 'DROP TABLE users';

		DB::statement($query);
	}
}