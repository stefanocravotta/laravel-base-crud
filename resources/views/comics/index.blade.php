@extends('layouts.main')

@section('content')
    <div class="container py-5">
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
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection
