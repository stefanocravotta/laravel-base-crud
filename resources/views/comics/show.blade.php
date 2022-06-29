@extends('layouts.main')

@section('content')
    <div class="container py-5 d-flex flex-column align-items-center">
        <h1>ID : {{ $comic->id }}</h1>
        <h2 class="my-3">Title : {{ $comic->title }}</h2>
        <img class="my-3" src="{{ $comic->image }}" alt="{{ $comic->title }}">
        <a class="btn btn-secondary" href="{{ route('comics.index') }}" role="button"><< Back</a>
    </div>
@endsection