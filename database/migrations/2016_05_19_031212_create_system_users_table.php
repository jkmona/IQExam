<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_users', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('id');
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

            $table->foreign('role_id')->references('id')->on('system_roles')->onDelete('restrict')->onUpdate('restrict');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('system_users'))  {
            Schema::table('system_users', function(Blueprint $table)
            {
                $table->dropForeign('system_users_role_id_foreign');
            });
        }
        Schema::dropIfExists('system_users');
    }
}
