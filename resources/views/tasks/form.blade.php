{!! Form::model($task, array('route' => ($task->exists ? array('tasks.update', $task->id) : array('tasks.store')), 'method' => ($task->exists ? 'PUT' : 'POST'))) !!}
<div class="form-group">
  <label for="inputEmail3" class="col-sm-2 control-label">URL Crawling</label>
  <div class="col-sm-10">
    {!! Form::text('url_crawling', $task->url_crawling, ['class' => 'form-control']); !!}
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