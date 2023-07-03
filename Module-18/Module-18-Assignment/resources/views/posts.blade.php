<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>
    @foreach ($posts as $post)
    <div>
        <p>{{ $post->id }}</p>
        <h2>{{ $post->author }}</h2>
        <p>{{ $post->description }}</p>
        
    </div>
    <hr>
@endforeach
</body>
</html>


