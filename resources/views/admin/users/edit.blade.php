@extends('layouts.admin')

@section('content')

    <h1>Edit user</h1>

    <div class="row">

        <div class="col-sm-2">
            <img class="img-responsive img-rounded" src="{{ $user->photo ? $user->photo->file : '' }}" alt="">
        </div>

        <div class="col-sm-10">

            {!! Form::model($user, ['method' => 'PATCH', 'action'=> ['AdminUsersController@update', $user->id], 'files'=> true]) !!}

            <div class="form-group">
                {!! Form::label('name', 'Name:') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('email', 'Email:') !!}
                {!! Form::email('email', null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('role_id', 'Role:') !!}
                {!! Form::select('role_id', ['' => 'Choose options'] + $roles, null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', [1 => 'Active', 0 => 'Not active'], null, ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::label('photo_id', 'File:') !!}
                {!! Form::file('photo_id', null ) !!}
            </div>

            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', ['class' => 'form-control']) !!}
            </div>

            <div class="form-group">
                {!! Form::submit('Create', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>

    </div>

    <div class="row">

        @include('includes.form_error')

    </div>

@endsection