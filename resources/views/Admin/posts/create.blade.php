@extends('layouts.app')
@section('content')
<div class="container">
    <h2>Questa e la view del create</h2>

    {{-- dentro l'action si mette il route della crud STORE --}}
    <form action="{{ route('admin.posts.store') }}" method='POST'>
        @csrf
        
        <label for="title">Titolo</label>
        <input type="text" name='title' id="title">

        <label for="content">Contenuto</label>
        <input type="text" name='content' id='content'>
        
        <input type="submit" value="Invia">

    </form>

</div>

@endsection