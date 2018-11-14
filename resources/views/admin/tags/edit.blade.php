@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            ویرایش تگ

                            <a href="{{ url('admin/tags') }}" class="btn btn-default pull-left">بازگشت</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($tag, ['method' => 'PUT', 'url' => "/admin/tags/{$tag->id}", 'class' => 'form-horizontal', 'role' => 'form']) !!}

                            @include('admin.tags._form')

                            <div class="form-group">
                                <div class="col-md-8 col-md-offset-2">
                                    <button type="submit" class="btn btn-primary">
                                        ویرایش
                                    </button>
                                </div>
                            </div>

                        {!! Form::close() !!}
                    </div>
                </div>
            </div>

        </div>
    </div>
@endsection
