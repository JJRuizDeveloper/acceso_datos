<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>My TODO list</h1>
    <ul>
        @foreach($todos as $todo)
        <li>{{$todo->title}} <a href="{{ route('edit', $todo->id) }}">Edit</a></li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('create') }}">
        @csrf
        <input type="text" name="title" />
        <input type="text" name="content" />
        <input type="submit" />
    </form>

</body>

</html>