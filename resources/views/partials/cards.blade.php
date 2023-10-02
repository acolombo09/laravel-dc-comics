@php
  $comics = config('comics');
@endphp

  <div class="container-fluid cards-list">
    <div class="row">
      <div class="col-md-9 mx-auto px-0 d-flex justify-content-center flex-wrap">
        <div class="row row-cols-6 g-3">
          @foreach ($comics as $comic)
            <a href="/comics" class="text-decoration-none">
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
            </a>
            @endforeach
        </div>
        <button class="btn btn-custom fw-semibold">LOAD MORE</button>
      </div>
    </div>
  </div>
</div>