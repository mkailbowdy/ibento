<!doctype html>

<title>My Events</title>
<head>
    <link rel="stylesheet" href="/app.css">
</head>
<body>

@foreach ($events as $event)

<article>
    <p>{{$event->date ." ". $event->time}}</p>
    <h2>
        <a href="/events/{{$event->slug}}">
            {{$event->title}}
        </a>
    </h2>
    <h3>
        {{$event->organization}}

    </h3>

    <div>
        {{$event->time}}
    </div>
</article>
@endforeach

</body>
