<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;

class UrlLog extends Model
{
    const STATUS_WAITING = "Waiting";    
    const STATUS_FINISH = "Finish";

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'url_logs';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'url',
        'status'
    ];

    public function task()
    {
        return $this->belongsTo('App\Model\Task', 'task_id', 'id');
    }
}
