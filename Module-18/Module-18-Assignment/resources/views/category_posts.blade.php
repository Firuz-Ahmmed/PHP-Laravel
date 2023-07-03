<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Category posts</title>
</head>
<body>
    @foreach ($categories as $category)
    <div>
        <h2>{{ $category->id }}</h2>
        @if ($category->latestPost)
            <p>Latest Post author: {{ $category->latestPost->author }}</p>
            <p>Latest Post Description: {{ $category->latestPost->description }}</p>
        @else
            <p>No posts found.</p>
        @endif
    </div>
    <hr>
@endforeach
</body>
</html>