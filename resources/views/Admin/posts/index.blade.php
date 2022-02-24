@extends('layouts.app')

@section('content')
<head>
    <script src="{{ asset('js/vue.js') }}" defer></script>
</head>


<div class="container">
    <h1>Contenuto</h1>
    <a href="{{ route('admin.posts.create') }}">Crea post</a>
</div>

{{-- <div id="app">Ciaone!</div> --}}
<App></App>

@foreach($posts as $post)
    <form action="{{ route('admin.posts.destroy', ['post' => $post->id]) }}"
        method="POST">
        @csrf
        @method('DELETE')

        <input type="submit" value="Cancella Post">
    </form>

@endforeach

@endsection