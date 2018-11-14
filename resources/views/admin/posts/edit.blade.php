@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h2>
                            ویرایش قصه

                            <a href="{{ url('admin/posts') }}" class="btn btn-default pull-left">بازگشت</a>
                        </h2>
                    </div>

                    <div class="panel-body">
                        {!! Form::model($post, ['method' => 'PUT',
                        'url' => "/admin/posts/{$post->id}",
                         'class' => 'form-horizontal',
                          'role' => 'form',
                          'enctype'=>"multipart/form-data"
                          ]) !!}

                        @include('admin.posts._form')

                        <div class="form-group">
                            <div class="col-md-8 col-md-offset-2">
                                <button type="submit" class="btn btn-primary">
                                    تایید
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
