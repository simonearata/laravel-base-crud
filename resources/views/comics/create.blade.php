@extends('layouts.main')

@section('content')

  <div class="container">
    <h1>Nuovo fumetto</h1>

    <div class="row">
      <form action="{{ route('comics.store') }}" method="post">
        @csrf
        @method('POST')

        <div class="mb-3">
          <label for="title" class="form-label">Nome fumetto</label>
          <input type="text" id="title" name="title" class="form-control">
        </div>

        <div class="mb-3">
          <label for="description" class="form-label">Descrizione</label>
          <textarea id="description" name="description" class="form-control"></textarea>
        </div>

        <div class="mb-3">
          <label for="type" class="form-label">tipo</label>
          <input id="type" name="type" class="form-control">
        </div>

        <div class="mb-3">
          <label for="image" class="form-label">immagine</label>
          <input id="image" name="image" class="form-control">
        </div>

        <div class="mb-3">
          <label for="price" class="form-label">prezzo</label>
          <input id="price" name="price" class="form-control">
        </div>

        <div class="mb-3">
          <label for="series" class="form-label">serie</label>
          <input id="series" name="series" class="form-control">
        </div>

        <div class="mb-3">
          <label for="sale_date" class="form-label">data di caricamento</label>
          <input id="sale_date" name="sale_date" class="form-control">
        </div>

        <button type="submit" class="btn">Invia</button>
        <button type="reset" class="btn">Reset</button>
      </form>
    </div>
  
  </div>

@endsection