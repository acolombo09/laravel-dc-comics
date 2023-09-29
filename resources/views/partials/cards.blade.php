@php
  $comics = config('comics');
@endphp

<div class="container-jumbo-cards">
  <div class="jumbotron-custom w-100 position-relative">
    <button class="btn btn-custom fw-bold fs-5 position-absolute px-4">CURRENT SERIES</button>
  </div>
  <div class="container-fluid cards-list">
    <div class="row">
      <div class="col-md-9 mx-auto px-0 d-flex justify-content-center flex-wrap">
        <div class="row row-cols-6 g-3">
          @foreach ($comics as $comic)
            <div class="col">
              <div class="card border-0 rounded-0 bg-transparent">
                <img src="{{ $comic['thumb'] }}" class="card-img-top rounded-0" alt="{{ $comic['series'] }}">
                <div class="card-body px-0">
                  <h5 class="text-white">
                    {{ $comic['series'] }}
                  </h5>
                </div>
              </div>
            </div>
            @endforeach
        </div>
        <button class="btn btn-custom fw-semibold">LEARN MORE</button>
      </div>
    </div>
  </div>
</div>