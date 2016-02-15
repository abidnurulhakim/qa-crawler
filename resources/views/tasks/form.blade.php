{!! Form::model($task, array('route' => ($task->exists ? array('tasks.update', $task->id) : array('tasks.store')), 'method' => ($task->exists ? 'PUT' : 'POST'))) !!}
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">Type Document Crawl</label>
  <div class="col-sm-9">
    {!! Form::select('type_document', array('Raw' => 'Raw', 'Article' => 'Article'), 'Raw'); !!}
  </div>
</div>
<br><br>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">Max Document</label>
  <div class="col-sm-9">
    {!! Form::number('max_document', $task->max_document); !!}
  </div>
</div>
<br><br>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">URL Index Crawling</label>
  <div class="col-sm-9">
    {!! Form::text('url_index_crawl', $task->url_index_crawl, ['class' => 'form-control', 'placeholder' => 'URL Article Crawl']); !!}
  </div>
</div>
<br><br><br>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">URL Article Crawling</label>
  <div class="col-sm-9">
    {!! Form::text('url_article_crawl', $task->url_article_crawl, ['class' => 'form-control', 'placeholder' => 'URL Article Crawl']); !!}
  </div>
</div>
<br><br>
<div class="form-group">
  <label for="inputEmail3" class="col-sm-3 control-label">URL Pagination Crawling</label>
  <div class="col-sm-9">
    {!! Form::text('url_pagination_crawl', $task->url_pagination_crawl, ['class' => 'form-control', 'placeholder' => 'URL Pagination Crawl']); !!}
  </div>
</div>
<br><br>
<div class="form-group text-center">
  <button type="reset" class="btn btn-danger">Reset</button>
  @if($task->exists)
  <button type="submit" class="btn btn-success">Save</button>
  @else
  <button type="submit" class="btn btn-success">Create</button>
  @endif
</div>
{!! Form::close() !!}