@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel story-card trans panel-default">
                    <div class="panel-img">
                        <img src="{{ isset($post->poster) ? Storage::url($post->poster): asset('img/story.jpg') }}" alt="Story Poster">
                    </div>
                    <div class="panel-heading">
                        {{ $post->title }} - <small>توسط {{ $post->user->name }}</small>

                        <span class="pull-left t block">
                            {{ $post->created_at->toDayDateTimeString() }}
                        </span>
                    </div>

                    @if($post->voice)
                        <div class="voice">
                            <audio controls>
                                <source src="{{ Storage::url($post->voice) }}" type="audio/mpeg">
                                Your browser does not support the audio element.
                            </audio>
                        </div>
                    @endif

                    <div class="panel-body">
                        <p>{{ $post->body }}</p>
                        <p>
                            دسته بتدی: <span class="label label-success">{{ $post->category->name }}</span> <br>
                            تگ ها:
                            @forelse ($post->tags as $tag)
                                <span class="label label-default">{{ $tag->name }}</span>
                            @empty
                                <span class="label label-danger">No tag found.</span>
                            @endforelse
                        </p>
                    </div>
                </div>

                @includeWhen(Auth::user(), 'frontend._form')

                @include('frontend._comments')

            </div>

        </dev>
    </dev>
@endsection
