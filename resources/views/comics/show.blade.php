@extends('layouts.main')

@section('content')
    <div class="container py-5 d-flex flex-column align-items-center">
        <a class="btn btn-secondary mb-5" href="{{ route('comics.index') }}" role="button"><< Back</a>
        <h1>ID : {{ $comic->id }}</h1>
        <div class="row">
            <div class="col-6"><img class="my-3 img-fluid" src="{{ $comic->image }}" alt="{{ $comic->title }}"></div>
            <div class="col-6"><h2 class="my-3">Title : {{ $comic->title }}</h2></div>
        </div>
        <a class="btn btn-secondary" href="{{ route('comics.index') }}" role="button"><< Back</a>
    </div>
@endsection
