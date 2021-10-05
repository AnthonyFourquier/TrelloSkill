<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edit</title>
</head>
<body>

    @foreach ($comments as $comment)


    <form action="{{ route('comments.update',$comment->id) }}" method="POST">
        @csrf
        @method('PUT')
        <input type="text" name="content" value=" {{ $comment->content }} " />
        <button type="submit" class="btn-edit" >update</button>
    </form>

    @endforeach
</body>
</html>
