{{-- indico quale layout voglio usare su questa pagina --}}
@extends("layouts.public")

{{-- @dd($comic) --}}
{{-- Versione compatta per indicare il contenuto di uno yield --}}
@section("title", $comic->title )

{{-- incido cosa inserire al posto dello yield("content") presente nel layout --}}
@section("content")

<div class="container-blue">
  <div class="container">
    <div class="d-flex justify-content-start">
      <div class="col-2">
        <div class="col">
          <div class="card rounded-0">
            <img src="{{ $comic->thumb }}" class="card-img-top" alt="">
          </div>
        </div>
      </div>
      
    </div>
  </div>
</div>

{{-- button per tornare indietro nella index, non richiesto --}}
{{-- <a href={{ route("comics.index", ["id" => $comic->id]) }} class="btn btn-outline-primary">Indietro</a> --}}
{{-- <h2>{{ $comic->title }}</h2>
<p class="mt-3">{{ $comic->description }}</p> --}}

@endsection