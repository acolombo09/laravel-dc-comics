@extends("layouts.public")

@section("title", "COMICS.INDEX")

@section("content")

  @include("partials.cards")
  <div class="container my-3">
    <div class="text-center">
      <a href="{{ route('comics.create') }}" class="btn btn-outline-primary">Add a new comic here (admins only)</a>
    </div>
  </div>
  @include("partials.banner")

@endsection