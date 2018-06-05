@extends('layouts.app')

@section('content')

    <h1>Details of No.{{ $task->id }}</h1>
    <table class="table table-bordered">
        <tr>
            <th>id</th>
            <td>{{ $task->id }}</td>
        </tr>
        <tr>
            <th>Content</th>
            <td>{{ $task->content }}</td>
        </tr>
        <tr>
            <th>Status</th>
            <td>{{ $task->status }}</td>
        </tr>
    </table>
     {!! link_to_route('tasks.edit', 'Edit', ['id' => $task->id], ['class' => 'btn btn-default']) !!}

    {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
