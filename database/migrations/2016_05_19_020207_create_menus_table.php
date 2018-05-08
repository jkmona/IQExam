<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMenuTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_menus', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('menu_id');
            $table->unsignedInteger('parent_id');
            $table->string('menu_name', 50);
            $table->tinyInteger('menu_level');
            $table->integer('menu_sort')->default(0);
            $table->string('menu_url', 200)->nullable();
            $table->boolean('deleted')->nullable();
            $table->rememberToken();
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
        Schema::table('iq_menu', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('iq_menu');
    }
}
