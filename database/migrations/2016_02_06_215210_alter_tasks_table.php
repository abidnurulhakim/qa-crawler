<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AlterTasksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tasks', function ($table) {
            $table->dropColumn(['url_crawling']);
            $table->string('url_index_crawl')->nullable();
            $table->string('url_article_crawl')->nullable();
            $table->string('url_pagination_crawl')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tasks', function ($table) {
            $table->dropColoumn(['url_index_crawl', 'url_article_crawl', 'url_pagination_crawl']);
            $table->string('url_crawling')->nullable();
        });
    }
}
