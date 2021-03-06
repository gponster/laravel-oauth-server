<?php
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOAuthAccessTokensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('oauth_access_tokens',
			function ($table) {
				$table->increments('id');
				$table->string('token', 64);
				$table->string('token_secret', 64);
				$table->string('consumer_key', 64);
				$table->string('username', 32);
				$table->string('referer_url')
					->nullable();
				$table->string('callback_url')
					->nullable();
				$table->string('info')
					->nullable();
				$table->timestamp('expires_at');
				$table->timestamps();
			});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('oauth_access_tokens');
	}
}
