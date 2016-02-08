<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUrlLog extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('url_logs', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('task_id')->unsigned();
            $table->string('url')->nullable();
            $table->string('status')->default('Waiting');
            $table->timestamps();

            $table->foreign('task_id')
                  ->references('id')->on('tasks')
                  ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('url_logs');
    }
}
