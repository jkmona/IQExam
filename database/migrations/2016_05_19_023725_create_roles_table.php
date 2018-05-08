<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRoleTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_roles', function (Blueprint $table) {
            $table->engine ='InnoDB';
            $table->increments('role_id');
            $table->string('name', 50);
            $table->boolean('enabled');
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
        Schema::table('iq_role', function (Blueprint $table) {
            //
        });
        Schema::dropIfExists('iq_role');
    }
}
