<!doctype html>

<title>My Blog</title>
<head>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
        <h1>
            {{$post->title}}
        </h1>

        <div>
            {!! $post->body !!}
        </div>
    </article>
<a href="/">Go back</a>
</body>
