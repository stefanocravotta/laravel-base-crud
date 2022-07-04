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
                <form action="{{ route('comics.store') }}" method="POST">
                    {{-- IMPORTANTE --}}
                        @csrf
                    {{-- IMPORTANTE --}}

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name="title"
                      value="{{ old('title') }}"
                      class="form-control
                      @error('title') is-invalid @enderror"
                      id="id" placeholder="Insersci il titolo">
                        @error('title')
                            <p class="input-error">{{ $message }}</p>
                        @enderror
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="type" name="type"
                      value="{{ old('type') }}"
                      class="form-control @error('type') is-invalid @enderror"
                      id="type" placeholder="Insersci la tipologia">
                      @error('type')
                      <p class="input-error">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="text" name="image"
                      value="{{ old('image') }}"
                      class="form-control @error('image') is-invalid @enderror"
                      id="image" placeholder="Insersci l'Url dell'immagine">
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
