<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Task;
use App\Model\UrlLog;
use App\Model\TextCrawl;

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
            shell_exec("nohup php crawlprocess.php --url=".route('crawl.crawling', ['id' => $task->id])." >/dev/null 2>&1 &");
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

    public function getTexts(Guard $auth, $taskId)
    {
        $task = Task::findOrFail($taskId);
        $texts = TextCrawl::where('task_id', $taskId)->get();
        $title = "crawl/".$task->id."_".\Carbon\Carbon::now()->format('Y-m-d-His')."_texts.txt";
        foreach ($texts as $text) {
            file_put_contents($title, $text->text."\n", FILE_APPEND);
        }
        return response()->download($title)->deleteFileAfterSend(true);
    }
}
