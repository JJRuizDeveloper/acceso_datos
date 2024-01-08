<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        form {
            display: flex;
            flex-direction: column;
            width: 350px;
            margin-top: 15px;
        }
        </style>
</head>
<body>
    <a href="{{ route('index') }}">GO BACK</a>
    <form method="post" action="{{ route('update', $todo->id) }}">
        @method('put')
        @csrf
        <label>title:</label>
        <input type="text" name="title" value="{{ $todo->title }}" />
        <label>Content:</label>
        <input type="text" name="content" value="{{ $todo->content }}" />
        <label>Done ?</label>
        <input type="checkbox" name="is_done" value="{{ $todo->is_done }}" />
        <input type="submit" value="Update" />
    </form>
</body>
</html>