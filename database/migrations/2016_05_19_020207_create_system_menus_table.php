<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSystemMenusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('system_menus', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('parent_id');
            $table->string('name', 50);
            $table->tinyInteger('level');
            $table->integer('sort')->default(0);
            $table->string('url', 200)->nullable();
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
        Schema::table('system_menus', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('system_menus');
    }
}
