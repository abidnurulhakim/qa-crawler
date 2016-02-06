<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Task;

class TaskController extends Controller
{
    
    public function __construct($foo = null) {
        \View::share('navTask', true);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*$html = file_get_contents('https://www.tanyadok.com/artikel-konsultasi/190970-2');
        $dom = new \DOMDocument;

        //Parse the HTML. The @ is used to suppress any parsing errors
        //that will be thrown if the $html string isn't valid XHTML.
        @$dom->loadHTML($html);
        $article = $dom->getElementsByTagName('article');
        dd($article[0]->getElementsByTagName('div')[0]->getAttribute('class'));
        return $html;*/
        $tasks = Task::all();
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
        $url_crawling = $request->get('url_crawling');
        $task = new Task();
        $task->url_crawling = $url_crawling;
        $task->user_id = $auth->user()->id;
        $task->status = Task::STATUS_RUNNING;
        if ($task->save()) {
            return redirect()->route('tasks.index');
        }
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
