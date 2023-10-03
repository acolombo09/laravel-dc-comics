@extends("layouts.public")

@section("title", "DC Comics - Create")

@section("content")

  <div class="container mx-auto bg-light py-3">
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
        <form action="{{ route("comics.store") }}" method="post">
          @csrf()
          <div class="mb-3">
            <label class="form-label">Title</label>
            <input type="text" class="form-control form-control-lg w-100" name="title" placeholder="Green Arrow">
          </div>
          <div class="mb-3">
            <label class="form-label">Description</label>
            <textarea class="form-control form-control-lg w-100" name="description" rows="3" placeholder="Write here..."></textarea>
          </div>
          <div class="mb-3">
            <label class="form-label">Poster Image</label>
            <input type="text" class="form-control form-control-lg w-100" name="thumb" placeholder="https://...">
          </div>
          <div class="mb-3">
            <label class="form-label">Price ($)</label>
            <input type="text" class="form-control form-control-lg w-100" name="price" placeholder="23.00">
          </div>
          <div class="mb-3">
            <label class="form-label">Series</label>
            <input type="text" class="form-control form-control-lg w-100" name="series" placeholder="Action Comics">
          </div>
          <div class="mb-3">
            <label class="form-label">Sale Date</label>
            <input type="date" class="form-control form-control-lg w-100" name="sale_date">
          </div>
          <div class="mb-3">
            <label class="form-label">Type</label>
            <input type="text" class="form-control form-control-lg w-100" name="type" placeholder="Comic Book">
          </div>
          <div class="mb-3">
            <label class="form-label">Artists</label>
            <input type="text" class="form-control form-control-lg w-100" name="artists" placeholder="Justin Hartley">
          </div>
          <div class="mb-3">
            <label class="form-label">Writers</label>
            <input type="text" class="form-control form-control-lg w-100" name="writers" placeholder="Mort Weisinger">
          </div>
        
          <a class="btn btn-outline-secondary mt-3" href={{ route("comics.index") }}>Annulla</a>
          <button type="submit" class="btn btn-primary mt-3">Salva</button>
        </form>
      </div>
    </div>
  </div>


@endsection