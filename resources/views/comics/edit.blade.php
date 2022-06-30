@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.update', $comic) }}" method="POST">
                    {{-- IMPORTANTE --}}
                        @csrf
                        @method('PUT')
                    {{-- IMPORTANTE --}}

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input
                       type="text"
                       value="{{ $comic->title }}"
                       name="title" class="form-control"
                       id="id"
                       placeholder="Insersci il titolo" required>
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="type"
                      value="{{ $comic->type }}"
                      name="type" class="form-control"
                      id="type" placeholder="Insersci la tipologia" required>
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                      <label for="image" class="form-label"></label>
                      <input type="text"
                      value="{{ $comic->image }}"
                      name="image"
                      class="form-control mt-2"
                      id="image" placeholder="Insersci l'Url dell'immagine" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Invia</button>
                  </form>

            </div>
        </div>

    </div>
@endsection
