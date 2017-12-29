<?php namespace Site\Admin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

/**
* create v1 tables
*/
class CreateV1Tables extends Migration
{

	public function up()
	{
        Schema::create('site_admin_user', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('tel');
            $table->string('password');
            $table->string('email');
            $table->integer('role');
            // $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });

        Schema::create('site_admin_condo', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->string('facebook');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });

        Schema::create('site_admin_event', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->string('whatsapp');
            $table->string('telegram');
            $table->string('facebook');
            $table->integer('user_id')->unsigned()->nullable()->index();
            $table->timestamps();
        });
	}

    public function down()
    {

    }
}
