<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_user_logs', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('user_log_id');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('type',false,true);
            $table->string('action', 500);
            $table->timestamps();

            $table->index('user_id');

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
        if (Schema::hasTable('iq_user_log'))  {
            Schema::table('iq_user_log', function(Blueprint $table)
            {
                $table->dropForeign('iq_user_log_user_id_foreign');
            });
        }
        Schema::dropIfExists('iq_user_log');
    }
}
