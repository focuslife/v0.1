<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnPostsTable extends Migration
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
			$table->foreign('posttype_id')
				  ->references('id')
				  ->on('post_type')
				  ->onDelete('restrict')
				  ->onUpdate('restrict');
		});
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
		Schema::table('posts', function(Blueprint $table) {
			$table->dropForeign('posts_posttype_id_foreign');
		});
        Schema::table('posts', function($table) {
			$table->dropColumn('post_id');
		});
    }
}
