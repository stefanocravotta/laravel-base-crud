@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            @if ($errors->any())
                <div class="alert alert-danger d-flex justify-content-between align-items-center " role="alert">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                    <a class="btn btn-danger" href="{{ route('comics.create') }}">X</a>
                </div>
            @endif
        </div>
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
                       value="{{ old ('title', $comic->title)}}"
                       name="title" class="form-control @error('title') is-invalid @enderror"
                       id="id"
                       placeholder="Insersci il titolo" required>
                       @error('title')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="type"
                      value="{{ old('type' , $comic->type) }}"
                      name="type" class="form-control @error('type') is-invalid @enderror"
                      id="type" placeholder="Insersci la tipologia" required>
                      @error('type')
                      <p class="input-error">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                        <img class="w-25" src="{{ $comic->image }}" alt="{{ $comic->title }}">
                      <label for="image" class="form-label"></label>
                      <input type="text"
                      value="{{ old('image' , $comic->image ) }}"
                      name="image"
                      class="form-control mt-2 @error('image') is-invalid @enderror"
                      id="image" placeholder="Insersci l'Url dell'immagine" required>
                      @error('image')
                      <p class="input-error">{{ $message }}</p>
                      @enderror
                    </div>
                    <button type="submit" class="btn btn-danger">Invia</button>
                  </form>

            </div>
        </div>

    </div>
@endsection
