<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLevelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_user_level', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('user_level_id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('level_id');
            $table->integer('reward_state', false, true)->default(0);
            $table->decimal('reward_value')->default(0);
            $table->integer('points', false, true)->default(0);
            $table->integer('state', false, true )->default(1);
            $table->boolean('is_locked');
            $table->dateTime('unlocked_at')->nullable();
            $table->timestamps();

            $table->foreign('level_id')->references('level_id')->on('iq_level')->onDelete('restrict')->onUpdate('restrict');
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
        if (Schema::hasTable('iq_user_level'))  {
            Schema::table('iq_user_level', function(Blueprint $table)
            {
                $table->dropForeign('iq_user_level_level_id_foreign');
                $table->dropForeign('iq_user_level_user_id_foreign');
            });
        }
        Schema::dropIfExists('iq_user_level');
    }
}
