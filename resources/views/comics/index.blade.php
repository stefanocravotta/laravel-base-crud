@extends('layouts.main')

@section('content')
    <div class="container py-5">
        @if (session('delete_comic'))
            <div class="alert alert-danger d-flex justify-content-between" role="alert">
                <p>{{session('delete_comic')}}</p>
                <a class="btn btn-danger" href="{{ route('comics.index') }}">X</a>
            </div>
        @endif
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Title</th>
                <th scope="col">Type</th>
                <th scope="col">Action</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($comics as $comic)
              <tr>
                <th scope="row">{{ $comic->id }}</th>
                <td>{{ $comic->title }}</td>
                <td>{{ $comic->type }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('comics.show', $comic ) }}" role="button">Show</a>
                    <a class="btn btn-primary" href="{{ route('comics.edit', $comic ) }}" role="button">Edit</a>
                    <form
                    class="d-inline"
                    action="{{ route('comics.destroy' , $comic) }}"
                    method="POST"
                    onsubmit="return confirm('confermi l\'eliminazione di: {{ $comic->title }}?')"
                    >
                    @csrf
                    @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
