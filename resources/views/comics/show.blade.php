{{-- indico quale layout voglio usare su questa pagina --}}
@extends("layouts.public")

{{-- Versione compatta per indicare il contenuto di uno yield --}}
@section("title", $comics->title . " - DC Comics")

{{-- incido cosa inserire al posto dello yield("content") presente nel layout --}}
@section("content")
<div>
  <div class="vw-100"></div>

  <div class="container-fluid vw-100 p-0">
    <div class="row justify-content-center">
      <div class="col-8">
        <div class="position-relative mb-5">
          <img src="{{ $comic->thumb }}" class="position-absolute">
        </div>

        <div class="py-5 d-flex align-items-start">
          <div class="main-content">

            <div>{{ $comic->title }}</div>
            <div>{{ $comic->price }}$</div>
            <div class="mt-3">{{ $comic->description }}</div>

          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection