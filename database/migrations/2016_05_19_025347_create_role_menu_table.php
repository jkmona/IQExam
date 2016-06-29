<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_role_menu', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->unsignedInteger('role_id');
            $table->unsignedInteger('menu_id');

            $table->foreign('role_id')->references('role_id')->on('iq_role')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('menu_id')->references('menu_id')->on('iq_menu')->onDelete('restrict')->onUpdate('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('iq_role_menu'))  {
            Schema::table('iq_role_menu', function(Blueprint $table)
            {
                $table->dropForeign('iq_role_menu_role_id_foreign');
                $table->dropForeign('iq_role_menu_menu_id_foreign');
            });
        }
        Schema::dropIfExists('iq_role_menu');
    }
}
