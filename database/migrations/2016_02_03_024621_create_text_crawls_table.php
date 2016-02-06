<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTextCrawlsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('text_crawls', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->integer('task_id')->unsigned();            
            $table->text('text')->nullable();
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
        Schema::drop('text_crawls');
    }
}
