@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Bello stu contenut'</h1>
    <a href="{{ route('admin.posts.create') }}">Crea post</a>
</div>

@endsection