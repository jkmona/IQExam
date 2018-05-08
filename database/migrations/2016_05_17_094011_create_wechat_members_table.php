<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_wechat_members', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('wechat_member_id');
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

            $table->foreign('user_id')->references('user_id')->on('iq_user')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('iq_wechat'))  {
            Schema::table('iq_wechat', function(Blueprint $table)
            {
                $table->dropForeign('iq_wechat_user_id_foreign');
            });
        }
        Schema::dropIfExists('iq_wechat');
    }
}
