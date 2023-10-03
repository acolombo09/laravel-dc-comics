@extends("layouts.public")

@section("title", "COMICS.INDEX")

@section("content")

  @include("partials.cards")
  <div class="container">
    <div class="text-center">
      <a href="{{ route('comics.create') }}" class="btn btn-outline-primary">Aggiungi</a>
    </div>
  </div>
  @include("partials.banner")

@endsection