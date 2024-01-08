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
        <li>{{$todo->title}} 
            <a href="{{ route('edit', $todo->id) }}">Edit</a>
            <form action="{{ route('delete', $todo->id) }}" method="post">
                @method('delete')
                @csrf
                <input type="submit" value="Borrar" />
            </form>
        </li>
        @endforeach
    </ul>

    <form method="POST" action="{{ route('create') }}">
        @csrf
        <input type="text" name="title" />
        @error('title')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <input type="text" name="content" />
        @error('content')
        <small style="color: red;">{{$message}}</small>
        @enderror
        <input type="submit" />
    </form>

</body>

</html>