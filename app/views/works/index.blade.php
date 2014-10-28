@extends('layouts.default')
@section('content')
  <h1>Recent Works</h1>

  {{ HTML::linkAction('works.create','New work',[],['class'=>'button']) }}

  @foreach($works as $work)
    <div class="row">
      <div class="columns large-11">
        {{ HTML::linkAction('works.show',$work->title,[$work->id],[]) }}<br>
		{{ $work->member->name . ' ' . $work->member->lastname }}<br>
        {{ $work->duration }}<br>
		@if ($work->completed)
			Complete<br>
		@else
			Incomplete<br>
		@endif
        <small>{{ $work->inidate }}</small><br>
		<small>{{ $work->enddate }}</small><br>
      </div>
      <div class="columns large-1">
        {{ HTML::linkAction('works.edit','Edit',[$work->id],['class'=>'button tiny']) }}
        {{ Form::model($work, ['route' => ['works.destroy', $work->id], 'method' => 'DELETE' ]) }}
        {{ Form::button('Destroy', ['type' => 'submit', 'class' => 'tiny alert button'])}}
        {{ Form::close() }}
      </div>
    </div>
    <hr>
  @endforeach
@stop