@extends('layouts.app')

@section('content')

    <h1>Create New Task</h1>

    {!! Form::model($task, ['route' => 'tasks.store']) !!}

        {!! Form::label('content', 'Task:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('staus', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('Add') !!}

    {!! Form::close() !!}

@endsection
