@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bello stu contenut'</h1>
    <a href="{{ route('admin.posts.create') }}">Crea post</a>
</div>

<form action="{{ route('Admin.posts.destroy', ['id' => $user->id]) }}"
    method="POST">
    @csrf
    @method('DELETE')

    <input type="submit" value="Cancella Post">
</form>

@endsection