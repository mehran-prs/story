<div class="row form-search story-search">
    {!! Form::open(['method' => 'GET', 'role' => 'form']) !!}
            <div class="col-md-10">
                {!! Form::text('search', request()->get('search'), ['class' => 'form-control', 'placeholder' => 'جستجو...']) !!}
            </div>
            <div class="col-md-2">
                {!! Form::submit('بگرد', ['class' => 'btn btn-block btn-default']) !!}
            </div>
    {!! Form::close() !!}
</div>
