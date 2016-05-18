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
            $table->increments('level_id');
            $table->unsignedInteger('parent_id');
            $table->string('name');
            $table->tinyInteger('difficult', false, true)->default(0);
            $table->integer('points', false, true)->default(0);
            $table->string('pic_url', 100)->nullable();
            $table->string('pic_suffix', 10)->nullable();
            $table->string('pic_full_url', 100)->nullable();
            $table->binary('picture')->nullable();
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
        if (Schema::hasTable('iq_level'))
        {
            Schema::table('iq_level', function(Blueprint $table)
            {

            });
        }
        Schema::dropIfExists('iq_level');
    }

}
