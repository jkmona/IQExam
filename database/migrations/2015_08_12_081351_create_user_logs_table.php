<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLogsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_logs', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->tinyInteger('type',false,true);
            $table->string('action', 500);
            $table->timestamps();

            //$table->index('user_id');

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
        if (Schema::hasTable('user_logs'))  {
            Schema::table('user_logs', function(Blueprint $table)
            {
                $table->dropForeign('user_logs_user_id_foreign');
            });
        }
        Schema::dropIfExists('user_logs');
    }
}
