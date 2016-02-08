<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class TextCrawl extends Model
{   
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'text_crawls';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'task_id',
        'text'
    ];

    public function task()
    {
        return $this->belongsTo('App\Model\Task', 'task_id', 'id');
    }
}
