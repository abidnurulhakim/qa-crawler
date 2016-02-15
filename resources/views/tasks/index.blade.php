@extends('_layouts.default')

@section('title', 'Task')
@section('page-header-toolbar', 'Tasks')
@section('page-header')
  Tasks
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          <a href="{{ route('tasks.create') }}" class="btn btn-primary pull-right"><i class="fa fa-plus"></i> <span>Create</span></a>
      </div><!-- /.box-header -->
      <div class="box-body">
        <table id="dataTables" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th>ID</th>
              <th>Status</th>
              <th>Type</th>
              <th>Max</th>
              <th>URL Index Crawling</th>
              <th>URL Article Crawling</th>
              <th>URL Pagination Crawling</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            @foreach($tasks as $task)
            <tr>
              <td>{{ $task->id }}</td>
              <td>{{ $task->status }}</td>
              <td>{{ $task->type_document }}</td>
              <td>{{ $task->max_document }}</td>
              <td>{{ $task->url_index_crawl }}</td>
              <td>{{ $task->url_article_crawl }}</td>
              <td>{{ $task->url_pagination_crawl }}</td>
              <td>{{ $task->created_at }}</td>
              <td>
                @if ($task->status === $task::STATUS_RUNNING)
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-warning btn-sm btn-cell"><i class="fa fa-pause"></i> <span>Pause</span></a>
                @elseif ($task->status === $task::STATUS_STOP)
                <a href="{{ route('tasks.edit', $task) }}" class="btn btn-primary btn-sm btn-cell"><i class="fa fa-play"></i> <span>Play</span></a>
                @else
                <a href="{{ route('tasks.download', $task) }}" class="btn btn-success btn-sm btn-cell"><i class="fa fa-cloud-download"></i> <span>Download</span></a>
                @endif
                <!-- <a href="{{ route('tasks.edit', $task) }}" class="btn btn-success btn-sm btn-cell"><i class="fa fa-pencil"></i> <span>Edit</span></a> -->
                <a data-href="{{ route('tasks.destroy', $task) }}" class="btn btn-danger btn-sm btn-cell btn-delete" data-token="{{ csrf_token() }}"><i class="fa fa-trash"></i> <span>Delete</span></a>
              </td>
            </tr>
            @endforeach
          </tbody>
          <tfoot>
            <tr>
              <th>ID</th>
              <th>Status</th>
              <th>URL Crawling</th>
              <th>Created At</th>
              <th>Action</th>
            </tr>
          </tfoot>
        </table>
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
@stop
