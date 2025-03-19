<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$task->title}}</title>
</head>
<body>
    <h1>Number {{$task->id}}</h1>
    <h3>{{$task->title}}</h3>
    <p>{{$task->description}}</p>
    <p>{{$task->long_description}}</p>
    <p>{{$task->completed ? 'Yes' : 'No'}}</p>
    <a href="/">Back</a>
</body>
</html>
