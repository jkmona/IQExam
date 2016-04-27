<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLevelTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('iq_level', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->string('name');
            $table->tinyInteger('difficult', false, true)->default(0);
            $table->unsignedInteger('parent_id');
            $table->boolean('is_locked')->default(1);
            $table->binary('picture')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        if (Schema::hasTable('iq_level'))
        {
            Schema::table('iq_level', function(Blueprint $table)
            {

            });
        }
        Schema::dropIfExists('iq_level');
    }

}
