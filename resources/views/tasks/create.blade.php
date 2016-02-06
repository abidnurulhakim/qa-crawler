@extends('_layouts.default')

@section('title', 'Create Task')
@section('page-header-toolbar', 'Create Tasks')
@section('page-header')
  Tasks
@stop

@section('content')
<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
          Create Task
      </div><!-- /.box-header -->
      <div class="box-body">
      @include('tasks.form', $task)
      </div><!-- /.box-body -->
    </div><!-- /.box -->
  </div>
</div>
@stop