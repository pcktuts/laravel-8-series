<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My blog site</title>
</head>
<body>
    <h1>My blog posts</h1>
    @foreach ($posts as $item)
        <h2>{{ $item['title']}}</h2>
        <p>{{$item['content']}}</p>
    @endforeach
</body>
</html>