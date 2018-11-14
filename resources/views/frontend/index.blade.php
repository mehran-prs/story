@extends('layouts.app')

@section('content')
    <div class="container">

        @include('frontend._search')

        <div class="row">

            <?php $i = 0;?>
            @forelse ($posts as $post)
                <?php $i++;?>
                <div class="col-md-6">
                    <div class="panel story-card panel-default">
                        <div class="panel-img">
                            <img src="{{ isset($post->poster) ? Storage::url($post->poster): asset('img/story.jpg') }}"
                                 alt="Story Poster">
                        </div>
                        <div class="panel-heading">
                            {{ $post->title }} -
                            <small>توسط {{ $post->user->name }}</small>

                            <span class="text-left block t">
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
                            <p>{{ str_limit($post->body, 200) }}</p>
                            <p>
                                تگ ها:
                                @forelse ($post->tags as $tag)
                                    <span class="label label-default">{{ $tag->name }}</span>
                                @empty
                                    <span class="label label-danger">بدون تگ.</span>
                                @endforelse
                            </p>
                            <p>
                                <span class="btn btn-sm btn-success">{{ $post->category->name }}</span>
                                <span class="btn btn-sm btn-info">نظرات <span
                                            class="badge">{{ $post->comments_count }}</span></span>

                                <a href="{{ url("/posts/{$post->id}") }}" class="btn btn-sm btn-primary">خوندن قصه</a>
                            </p>
                        </div>
                    </div>
                </div>

                @if($i%2==0)
                    <div class="col-xs-12"></div>
                @endif
            @empty
                <div class="panel panel-default">
                    <div class="panel-heading">یافت نشد!!</div>

                    <div class="panel-body">
                        <p>متاسفانه قصه یافت نشد.</p>
                    </div>
                </div>
            @endforelse


        </div>
        <div align="center">
            {!! $posts->appends(['search' => request()->get('search')])->links() !!}
        </div>
    </div>
@endsection
