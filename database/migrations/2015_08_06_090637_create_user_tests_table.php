<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTestsTable extends Migration {

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_tests', function(Blueprint $table)
        {
            $table->engine ='InnoDB';
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('question_id');
            $table->string('user_answer', 200);
            $table->boolean('pass');
            $table->dateTime('started_at')->nullable();
            $table->dateTime('stopped_at')->nullable();
            $table->unsignedInteger('time_spent')->nullable();
            $table->integer('sort', false, true);
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('restrict')->onUpdate('restrict');
            $table->foreign('question_id')->references('id')->on('questions')->onDelete('restrict')->onUpdate('restrict');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down() {
        if (Schema::hasTable('user_tests'))  {
            Schema::table('user_tests', function(Blueprint $table)
            {
                $table->dropForeign('user_tests_user_id_foreign');
                $table->dropForeign('user_tests_question_id_foreign');
            });
        }
        Schema::dropIfExists('user_tests');
    }

}
