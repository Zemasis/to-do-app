@extends('layouts.app')
@section('title', $task->title)


@section('content')
    <h1>Number {{$task->id}}</h1>
    <p>{{$task->description}}</p>
    <p>{{$task->long_description}}</p>
    <p>{{$task->completed ? 'Yes' : 'No'}}</p>
    <a href="/">Back</a>
@endsection

