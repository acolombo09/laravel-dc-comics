@extends("layouts.public")

@section("title", "DC Comics - Edit")

@section("content")

  <div class="container mx-auto bg-dark py-3">
    <div class="col-2 ms-auto mt-3">
      {{-- button per tornare indietro nella index, non richiesto --}}
      <a href="{{ route("comics.index") }}" class="btn btn-lg btn-outline-primary">Indietro</a>
    </div>

    <div class="row my-3">
      <div class="d-flex justify-content-center align-items-center">
        <h2 class="my-3 text-center me-3">Add your new Comic here</h2>
        <i class="fa-solid fa-angles-down"></i>
      </div>
      <div class="col-8 mx-auto">
        <form action="{{ route("comics.update", $comic->id) }}" method="PUT">
          @csrf()
          <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("title", $comic?->title)}}" name="title" placeholder="Green Arrow">
          </div>
          <div class="mb-3">
            <label for="description" class="form-label">Description</label>
            <textarea class="form-control form-control-lg w-100" name="description" rows="3" placeholder="Write here...">{{ old("description", $comic?->description)}}</textarea>
          </div>
          <div class="mb-3">
            <label for="thumb" class="form-label">Poster Image</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("thumb", $comic?->thumb)}}" name="thumb" placeholder="https://...">
          </div>
          <div class="mb-3">
            <label for="price" class="form-label">Price ($)</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("price", $comic?->price)}}" name="price" placeholder="23.00">
          </div>
          <div class="mb-3">
            <label for="series" class="form-label">Series</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("series", $comic?->series)}}" name="series" placeholder="Action Comics">
          </div>
          <div class="mb-3">
            <label for="sale_date" class="form-label">Sale Date</label>
            <input type="date" class="form-control form-control-lg w-100" value="{{ old("sale_date", $comic?->sale_date)}}" name="sale_date">
          </div>
          <div class="mb-3">
            <label for="type" class="form-label">Type</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("type", $comic?->type)}}" name="type" placeholder="Comic Book">
          </div>
          <div class="mb-3">
            <label for="artists" class="form-label">Artists</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("artists", $comic?->artists)}}" name="artists" placeholder="Justin Hartley">
          </div>
          <div class="mb-3">
            <label for="writers" class="form-label">Writers</label>
            <input type="text" class="form-control form-control-lg w-100" value="{{ old("writers", $comic?->writers)}}" name="writers" placeholder="Mort Weisinger">
          </div>
        
          <a class="btn btn-outline-secondary mt-3" href={{ route("comics.update") }}>Annulla</a>
          <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
      </div>
    </div>
  </div>


@endsection