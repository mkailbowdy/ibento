<!doctype html>

<title>All Events</title>
<head>
    <link rel="stylesheet" href="/app.css">
</head>
<body>
    <article>
        <h1>{{$event->title}}</h1>

        <div>
            {!! $event->body; !!}
        </div>
    </article>
<a href="/events">Go back</a>
</body>
