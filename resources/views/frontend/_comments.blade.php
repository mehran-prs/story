@forelse ($post->comments as $comment)
    <div class="panel panel-default">
        <div class="panel-heading">
            {{ $comment->user->name }} میگه...

            <span class="pull-right">{{ $comment->created_at->diffForHumans() }}</span>
        </div>

        <div class="panel-body">
            <p>{{ $comment->body }}</p>
        </div>
    </div>
@empty
    <div class="panel panel-default">
        <div class="panel-heading">یافت نشد!!</div>

        <div class="panel-body">
            <p>متاسفیم - نظری برای قصه یافت نشد</p>
        </div>
    </div>
@endforelse
