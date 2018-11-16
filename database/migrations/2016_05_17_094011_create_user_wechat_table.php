<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserWechatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_wechat', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('open_id', 100);
            $table->string('union_id', 100)->nullable();
            $table->string('nickname', 100)->nullable();
            $table->string('sex', 10)->nullable();
            $table->string('province', 50)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('country', 50)->nullable();
            $table->string('head_img_url', 200)->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('user_wechat'))  {
            Schema::table('user_wechat', function(Blueprint $table)
            {
                $table->dropForeign('user_wechat_user_id_foreign');
            });
        }
        Schema::dropIfExists('user_wechat');
    }
}
