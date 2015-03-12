<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAboutsAndTeamsTables extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('abouts', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('title')->default('');
            $table->string('description')->default('');
            $table->string('video_url')->default('');
            $table->string('created_by')->default('');
            $table->string('modified_by')->default('');
			$table->timestamps();
		});
        Schema::create('teams', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name')->default('');
            $table->string('designation')->default('');
            $table->string('description')->default('');
            $table->text('img_path')->default('');
            $table->string('facebook')->default('');
            $table->string('twitter')->default('');
            $table->string('linked_in')->default('');
            $table->text('google')->default('');
            $table->text('skype')->default('');
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
        Schema::drop('teams');
        Schema::drop('abouts');
	}

}
