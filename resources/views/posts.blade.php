<!doctype html>

<title>My Blog</title>
<head>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    @foreach ($posts as $post)
        <article>
            <h1>
                <a href="/posts/{{$post->slug}}">
                    {{$post->title}}
                </a>
            </h1>

            <div>
                    {{$post->excerpt}}
            </div>
        </article>
    @endforeach
</body>
