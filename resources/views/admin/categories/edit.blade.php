@extends('layouts.admin')
@section('content')

    <h1>Categories</h1>

    <div class="row">

        {!! Form::model($category, ['method' => 'PATCH', 'action'=> ['AdminCategoriesController@update', $category->id]]) !!}

        <div class="form-group">
            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class' => 'form-control']) !!}
        </div>

        <div class="form-group">
            {!! Form::submit('Save', ['class'=>'btn btn-primary col-sm-1', 'style'=> 'margin-right: 10px']) !!}
        </div>

        {!! Form::close() !!}



        {!! Form::open(['method' => 'DELETE', 'action'=> ['AdminCategoriesController@destroy', $category->id]]) !!}

        <div class="form-group">
            {!! Form::submit('Delete', ['class'=>'btn btn-danger col-sm-1']) !!}
        </div>

    </div>

    {!! Form::close() !!}

    <div class="row">

        @include('includes.form_error')

    </div>

@endsection