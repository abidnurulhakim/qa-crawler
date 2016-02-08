<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Model\Task;
use App\Model\UrlLog;
use App\Model\TextCrawl;

class CrawlController extends Controller
{
    public function crawl($id) {
        ignore_user_abort(true);
        set_time_limit(0);
        $status = 202;
        $task = Task::find($id);
        if (!is_null($task)) {
            if ($task->status === $task::STATUS_RUNNING) {
                date_default_timezone_set('Asia/Jakarta');
                libxml_use_internal_errors(true);
                $urlLog = UrlLog::where('task_id', $id)->where('status', \App\Model\UrlLog::STATUS_WAITING)->first();
                $status = 201;
                if (!is_null($urlLog)) {
                    $status = 200;
                    $task = $urlLog->task;
                    try {
                        $html = file_get_contents($urlLog->url);
                        $dom = new \DOMDocument;
                        $dom->loadHTML($html);
                        $articles = $dom->getElementsByTagName('article');
                        if ($articles->length == 1) {
                            $textCrawl = new TextCrawl();
                            $textCrawl->task_id = $urlLog->task_id;
                            $textCrawl->text = $dom->saveHTML($articles[0]);
                            $textCrawl->save();
                        } else {
                            $urls = $dom->getElementsByTagName('a');
                            foreach ($urls as $url) {
                                if ((strpos(strtolower($url->getAttribute("href")), strtolower($task->url_article_crawl)) !== false) || (strpos(strtolower($url->getAttribute("href")), strtolower($task->url_pagination_crawl)) !== false)) {
                                    if (UrlLog::where('url', $url->getAttribute("href"))->where('task_id', $id)->count() < 1) {
                                        $newUrlLog = new UrlLog();
                                        $newUrlLog->task_id = $id;
                                        $newUrlLog->url = $url->getAttribute("href");
                                        $newUrlLog->status = $newUrlLog::STATUS_WAITING;
                                        $newUrlLog->save();
                                    }
                                }
                            }
                        }
                    } catch (Exception $e) {}
                    $urlLog->status =  $urlLog::STATUS_FINISH;
                    $urlLog->save();
                } else {
                    $task->status = $task::STATUS_FINISH;
                    $task->save();
                }
                libxml_use_internal_errors(false);
                if ($status === 201 && is_null($urlLog)) {
                    $this->sendNotification($task->id);
                }
            }
        }
        return response()->json(['status' => $status]);
    }

    public function sendNotification($taskId)
    {
        $task = Task::findOrFail($taskId);
        $email = $task->user->email;
        $status_code = 201;
        if ($task->status == Task::STATUS_FINISH) {
            $status_code = 200;
            \Mail::send('email.notification-task', ['user' => $task->user, 'taskId' => $taskId], function ($message) use ($email, $taskId){
                $message->from(env('MAIL_FROM_ADDRESS'), env('MAIL_FROM_NAME'));
                $message->to($email);
                $message->subject("Notification Task Crawler #".$taskId);
            });
        }
    }
}
