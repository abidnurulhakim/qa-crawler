<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{

    const STATUS_RUNNING = "Running";
    const STATUS_STOP = "Stop";
    const STATUS_FINISH = "Finish";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'tasks';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'status',
        'url_article_crawl',
        'url_pagination_crawl',
        'url_index_crawl'
    ];

    public function user()
    {
        return $this->belongsTo('App\Model\User', 'user_id', 'id');
    }
}
