@extends('layouts.main')

@section('content')
  <div class="container">
    <h1>{{ $comic->title }}</h1>

    <h2>-{{ $comic->type }}</h2>

    <h4>-{{ $comic->series }}</h4>

    <p>-{!! $comic->description !!}</p>

    <img src="{{ $comic->image }}" alt="">
  </div>

  <div class="container">
    <a href="{{ route('comics.index')}}">indietro</a>
  </div>
@endsection