<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('iq_system_user', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('system_user_id');
            $table->unsignedInteger('role_id');
            $table->string('account',50);
            $table->string('password',60);
            $table->string('salt',6);
            $table->string('real_name',50)->nullable();
            $table->string('phone',15)->nullable();
            $table->string('email',50)->nullable();
            $table->string('sex', 10)->nullable();
            $table->boolean('active')->nullable();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('role_id')->references('role_id')->on('iq_role')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('iq_system_user'))  {
            Schema::table('iq_system_user', function(Blueprint $table)
            {
                $table->dropForeign('iq_system_user_role_id_foreign');
            });
        }
        Schema::dropIfExists('iq_system_user');
    }
}
