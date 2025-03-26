    @extends('layouts.app')
    @section('content')
    @section('title', 'To do app')
    {{-- <h1>To do app</h1> --}}
    <a href="{{ route('tasks.create') }}">Create new task</a>
    <table>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
            <th>Action</th>
        </tr>
        <tr>
            {{-- @if (isset($tasks) && count($tasks) > 0) --}}
            @if (count($tasks) >= 0)
                @foreach ($tasks as $task)
                <tr>
                {{-- phần tử của 1 list --}}
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->long_description}}</td>
                    <td>{{$task->completed ? 'Yes' : 'No'}}</td>
                    <td>
                        <a href="{{ route('tasks.detail', ['id' => $task->id]) }}">Detail</a>
                        <a href="{{ route('tasks.edit', ['id' => $task->id]) }}">Edit</a>
                        <form action="{{ route('tasks.delete', ['id' => $task->id]) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>

                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No tasks found</td>
                </tr>
            @endif
        </tr>
    </table>
@endsection

