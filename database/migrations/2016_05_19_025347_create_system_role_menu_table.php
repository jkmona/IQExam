<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemRoleMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_role_menu', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('menu_id');

            $table->foreign('role_id')->references('id')->on('system_roles')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('menu_id')->references('id')->on('system_menus')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('system_role_menu'))  {
            Schema::table('system_role_menu', function(Blueprint $table)
            {
                $table->dropForeign('system_role_menu_role_id_foreign');
                $table->dropForeign('system_role_menu_menu_id_foreign');
            });
        }
        Schema::dropIfExists('system_role_menu');
    }
}
