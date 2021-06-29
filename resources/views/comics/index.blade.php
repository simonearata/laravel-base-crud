@extends('layouts.main')

@section('content')

  <h1>i fumetti</h1>

  <div class="container">
    <table class="table">
      <thead>
          <tr>
              <th>ID</th>
              <th>Title</th>
              <th>Type</th>
              <th>Series</th>
              <th>Price</th>
              <th colspan="3">Actions</th>
          </tr>
      </thead>
      <tbody>
          @foreach ($comics as $comic)
              <tr>
                  <td>{{ $comic->id }}</td>
                  <td>{{ $comic->title }}</td>
                  <td>{{ $comic->type }}</td>
                  <td>{{ $comic->series }}</td>
                  <td>{{ $comic->price }} $</td>
                  <td>
                    <a href="{{ route('comics.show', $comic) }}" class="btn">SHOW</a>
                  </td>
                  <td>EDIT</td>
                  <td>DELETE</td>
              </tr>
          @endforeach

      </tbody>
    </table>

    <div>
      {{ $comics->links() }}
    </div>
  </div>

@endsection