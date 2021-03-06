<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWechatTokensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wechat_tokens', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->tinyInteger('type');
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
        Schema::dropIfExists('wechat_tokens');
    }
}
