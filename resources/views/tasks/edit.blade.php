@extends('layouts.app')

@section('content')

    <h1>Update Task No. id: {{ $task->id }}</h1>

    {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'Task contents:') !!}
        {!! Form::text('content') !!}

        {!! Form::label('status', 'Status:') !!}
        {!! Form::text('status') !!}

        {!! Form::submit('Update') !!}

    {!! Form::close() !!}


@endsection
