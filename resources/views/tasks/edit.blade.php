@extends('layouts.app')

@section('content')

    <h1>Update Task No. id: {{ $task->id }}</h1>
    <div class="row">
        <div class="col-xs-12 col-sm-8 col-sm-offset-2 col-lg-6 col-lg-offset-3">
            {!! Form::model($task, ['route' => ['tasks.update', $task->id], 'method' => 'put']) !!}

                <div class="form-group">
                    {!! Form::label('content', 'Task contents:') !!}
                    {!! Form::text('content', null, ['class'=> 'form-control']) !!}
                </div>
        
                <div class="form-group">
                    {!! Form::label('status', 'Status:') !!}
                    {!! Form::text('status', null, ['class' => 'form-control']) !!}
                </div>
        
                {!! Form::submit('Update', ['class' => 'btn btn-default']) !!}
        
            {!! Form::close() !!}
        </div>
    </div>
@endsection
