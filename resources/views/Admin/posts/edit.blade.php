@extends('layouts.admin')
@section('content')

<form action="{{ route('Admin.posts.update', ['id' => $post->id]) }}"
    method="POST">
    @csrf
    @method('PUT')

    <label for="title">Titolo</label>
    <input type="text" name='title' id="title"
    value="{{ $post->title}}">
    

    <label for="content">Contenuto</label>
    <input type="text" name='content' id='content'
    value="{{ $post->content}}">
    
    
    <input type="submit" value="Invia">
</form>