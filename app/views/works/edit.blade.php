@extends('layouts.default')
@section('content')
  <h1>Edit Work</h1>
  {{ Form::model($work, array('route' => ['works.update', $work->id], 'method' => 'PUT') ) }}

    {{ Form::label('title', 'Title') }}
    {{ Form::text('title') }}
    {{ $errors->first('title','<small class="error">:message</small>') }}

    {{ Form::label('description', 'Description') }}
    {{ Form::textarea('description') }}

    {{ Form::label('member_id', 'Member') }}
    {{ Form::select('member_id',$members) }}

	{{ Form::label('duration', 'Duration') }}
    {{ Form::text('duration') }}
    {{ $errors->first('duration','<small class="error">:message</small>') }}
	
	{{ Form::label('inidate', 'Initial Date') }}
    {{ Form::text('inidate') }}
    {{ $errors->first('inidate','<small class="error">:message</small>') }}
	
	{{ Form::label('enddate', 'End Date') }}
    {{ Form::text('enddate') }}
    {{ $errors->first('enddate','<small class="error">:message</small>') }}
	
	{{ Form::label('completed', 'Completed') }}
	{{ Form::checkbox('completed') }}
	{{ $errors->first('completed','<small class="error">:message</small>') }}
	
    {{ Form::submit('Publish',array('class'=>'button')) }}

  {{ Form::close() }}
@stop