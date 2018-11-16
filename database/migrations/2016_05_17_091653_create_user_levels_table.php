<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserLevelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_levels', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('level_id');
            $table->tinyInteger('reward_state', false, true)->default(0);
            $table->decimal('reward_value')->default(0);
            $table->integer('points', false, true)->default(0);
            $table->tinyInteger('state', false, true )->default(1);
            $table->boolean('is_locked');
            $table->dateTime('unlocked_at')->nullable();
            $table->timestamps();

            $table->foreign('level_id')->references('id')->on('levels')->onDelete('restrict')->onUpdate('restrict');
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
        if (Schema::hasTable('user_levels'))  {
            Schema::table('user_levels', function(Blueprint $table)
            {
                $table->dropForeign('user_levels_level_id_foreign');
                $table->dropForeign('user_levels_user_id_foreign');
            });
        }
        Schema::dropIfExists('user_levels');
    }
}
