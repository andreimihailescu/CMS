@extends('layouts.admin')

@section('content')

    <h1>Posts</h1>

    <table class="table">
        <thead>
        <tr>
            <th>Id</th>
            <th>Photo</th>
            <th>Owner</th>
            <th>Category</th>
            <th>Title</th>
            <th>Body</th>
            <th>Created</th>
            <th>Updated</th>
        </tr>
        </thead>
        <tbody>

        @if($posts)

            @foreach($posts as $post)

                <tr>
                    <td>{{ $post->id }}</td>
                    <td><img height="100" src="{{ $post->photo ? $post->photo->file : 'No user photo' }}" alt=""></td>
                    <td>{{ $post->user->name }}</td>
                    <td>{{ $post->category ? $post->category->name : 'Uncategorized' }}</td>
                    <td><a href="{{ route('admin.posts.edit', $post->id) }}">{{ $post->title }}</a></td>
                    <td>{{ str_limit($post->body, 20) }}</td>
                    <td>{{ $post->created_at }}</td>
                    <td>{{ $post->updated_at }}</td>
                </tr>

            @endforeach

        @endif

        </tbody>
    </table>

@endsection