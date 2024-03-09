<?php

use App\Models\Event;
use App\Models\Post;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;
use Spatie\YamlFrontMatter\YamlFrontMatter;
use Symfony\Component\Yaml\Yaml;

//use Spatie\YamlFrontMatter\YamlFrontMatter;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('posts',[
        'posts' => Post::all()
    ]);
});

Route::get('posts/{post}', function ($slug) {
    // Find a post by its slug and pass it to a view called "post"
    return view('post', [
        'post' => Post::find($slug)
    ]);
})->where('post', '[A-z_\-]+');

Route::get('events', function () {
    return view('events',[
        'events' => Event::all()
    ]);
});

Route::get('events/{event}', function ($slug) {
    // Find a post by its slug and pass it to a view called "post"
    return view('event', [
        'event' => Event::find($slug)
    ]);
})->where('event', '[A-z_\-]+');
