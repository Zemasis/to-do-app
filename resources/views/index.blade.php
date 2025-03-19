<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>To do app</h1>

    <table>
        <tr>
            <th>Task</th>
            <th>Title</th>
            <th>Description</th>
            <th>Completed</th>
            <th>Action</th>
        </tr>
        <tr>
            @if (count($tasks) > 0)
                @foreach ($tasks as $task)
                <tr>
                {{-- phần tử của 1 list --}}
                    <td>{{$task->id}}</td>
                    <td>{{$task->title}}</td>
                    <td>{{$task->description}}</td>
                    <td>{{$task->long_description}}</td>
                    <td>{{$task->completed ? 'Yes' : 'No'}}</td>
                    <td>
                        <a href="{{ route('task.detail', ['id' => $task->id]) }}">Detail</a>
                        <a href="">Edit</a>
                </tr>
                @endforeach
            @else
                <tr>
                    <td colspan="5">No tasks found</td>
                </tr>
            @endif
        </tr>
    @isset($name)
        <h1>Hello world, {{$name}}</h1>


    @endisset
</body>
</html>
