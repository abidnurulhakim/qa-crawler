<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Task;
use App\Model\UrlLog;

use Illuminate\Auth\Guard;

class TaskController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
        \View::share('navTask', true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Guard $auth)
    {
        $tasks = $auth->user()->tasks;
        return view('tasks.index', compact('tasks'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $task = new Task();
        return view('tasks.create', compact('task'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Guard $auth, Request $request)
    {
        $task = new Task();
        $task->fill($request->all());
        $task->user_id = $auth->user()->id;
        $task->status = Task::STATUS_RUNNING;
        if ($task->save()) {
            $urlLog = new UrlLog();
            $urlLog->task_id = $task->id;
            $urlLog->url = $request->get('url_index_crawl');
            $urlLog->save();
            exec('nohup php crawlprocess.php '.route('crawl.crawling', ['id' => $task->id]).' &',$op);        
            return redirect()->route('tasks.index');
        }
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $task = Task::findOrFail($id);
        if (!is_null($task)) {
            $task->delete();
        }
    }
}
