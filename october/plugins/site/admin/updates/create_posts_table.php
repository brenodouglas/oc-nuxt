<?php namespace Site\Admin\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreatePostsTable extends Migration
{
    public function up()
    {
        Schema::create('site_admin_posts', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('title');
            $table->text('content');
            $table->integer('status');
            $table->date('public_date');
            $table->integer('visibility');
            $table->text('tags');
            $table->string('font');
            $table->string('font_url');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('site_admin_posts');
    }
}
