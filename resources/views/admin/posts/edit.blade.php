@extends('layouts.admin')

@section('content')

    <h1>Edit Post</h1>



    <div class="row">

        <div class="col-sm-3">
            <img src="{{ $post->photo->file }}" alt="" class="img-responsive">
        </div>

        <div class="col-sm-9">

            {!! Form::model($post, ['method' => 'PATCH', 'action'=> ['AdminPostsController@update', $post->id], 'files'=> true]) !!}

            <div class="form-group">
                {!! Form::label('title', 'Title:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('category_id', 'Category:') !!}
                {!! Form::select('category_id', [''=> 'Choose categories'] + $categories, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'Photo:') !!}
                {!! Form::file('photo_id') !!}
            </div>

            <div class="form-group">
                {!! Form::label('body', 'Body:') !!}
                {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Save', ['class'=>'btn btn-primary col-sm-1', 'style'=> 'margin-right: 10px']) !!}
            </div>

            {!! Form::close() !!}



            {!! Form::open(['method' => 'DELETE', 'action'=> ['AdminPostsController@destroy', $post->id]]) !!}

            <div class="form-group">
                {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-1']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">

        @include('includes.form_error')

    </div>

@endsection