@extends('layouts.main')

@section('content')
    <div class="container py-5">
        <div class="row">
            <div class="col-8 offset-2">
                <form action="{{ route('comics.store') }}" method="POST">
                    {{-- IMPORTANTE --}}
                        @csrf
                    {{-- IMPORTANTE --}}

                    <div class="mb-3">
                      <label for="title" class="form-label">Title</label>
                      <input type="text" name="title" class="form-control" id="id" placeholder="Insersci il titolo" required>
                    </div>
                    <div class="mb-3">
                      <label for="type" class="form-label">Type</label>
                      <input type="type" name="type" class="form-control" id="type" placeholder="Insersci la tipologia" required>
                    </div>
                    <div class="mb-3">
                      <label for="image" class="form-label">Image</label>
                      <input type="text" name="image" class="form-control" id="image" placeholder="Insersci l'Url dell'immagine" required>
                    </div>
                    <button type="submit" class="btn btn-danger">Invia</button>
                  </form>

            </div>
        </div>

    </div>
@endsection
