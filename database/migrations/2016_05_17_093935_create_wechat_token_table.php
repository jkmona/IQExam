<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatTokenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_wechat_token', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('wechat_token_id');
            $table->tinyInteger('token_type');
            $table->string('token', 100);
            $table->string('open_id', 100)->nullable();
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
        Schema::dropIfExists('iq_wechat_token');
    }
}
