@extends('layouts.app')
@section('title', 'Create new task')

@section('content')
    <form action="{{route('tasks.store')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" name="title" id="title">
        <label for="description">Description</label>
        <input type="text" name="description" id="description">
        <label for="long_description">Long description</label>
        <input type="text" name="long_description" id="long_description">
        <button type="submit">Create</button>
    </form>
@endsection

