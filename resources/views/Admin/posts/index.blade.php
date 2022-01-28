@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bello stu contenut'</h1>
    <a href="{{ route('admin.posts.create') }}">Crea post</a>
</div>

@foreach($posts as $post)
    <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}"
        method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Cancella Post">
    </form>

@endforeach

@endsection