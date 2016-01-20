<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnImgPostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::table('posts', function($table) {
			//$table->integer('posttype_id')->unsigned()->default(1);
			$table->string('img', 80)->default('Image1.jpeg');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('posts', function($table) {
			$table->dropColumn('img');
		});
    }
}
