<?php

namespace App\Models;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Event extends Post
{
    public $time;
    public $organization;
    public $participants;

    public function __construct($date, $time, $title, $organization, $participants, $body, $slug)
    {
        $this->date = $date;
        $this->time = $time;
        $this->title = $title;
        $this->organization = $organization;
        $this->participants = $participants;
        $this->body = $body;
        $this->slug = $slug;
    }


    public static function all()
    {
        return collect(File::files(resource_path("events")))
            ->map(function ($file) {
                return YamlFrontMatter::parseFile($file);
            })
            ->map(function ($document) {
                return new Event(
                    $document->date,
                    $document->time,
                    $document->title,
                    $document->organization,
                    $document->participants,
                    $document->body(),
                    $document->slug
                );
            })
            ->sortBy('date');
    }
}
