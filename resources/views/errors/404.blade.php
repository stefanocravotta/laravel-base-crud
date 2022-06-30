@extends('layouts.main')

@section('content')
    <div class="container py-5 d-flex flex-column align-items-center">
        <a class="btn btn-secondary mb-5" href="{{ route('comics.index') }}" role="button"><< Back</a>
        <h1>Errore 404 | {{ $exception->getMessage() }}</h1>
        <a class="btn btn-secondary mt-5" href="{{ route('comics.index') }}" role="button"><< Back</a>
    </div>
@endsection
