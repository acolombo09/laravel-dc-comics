@php
  $bannerLinks = [
    ['name' => 'DIGITAL COMICS', 'image' => '/images/buy-comics-digital-comics.png'], 
    ['name' => 'SHOP DC', 'image' => '/images/buy-comics-subscriptions.png'], 
    ['name' => 'COMIC SHOP LOCATOR', 'image' => '/images/buy-comics-shop-locator.png'], 
    ['name' => 'SUBSCRIPTION', 'image' => '/images/buy-comics-merchandise.png']
    ];
@endphp

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
      <div class="col-2 ms-5">
        <div class="col">
          <div class="card rounded-0">
            <img src="{{ $comic->thumb }}" alt="">
          </div>
        </div>
      </div>
      <div class="col-2 ms-auto mt-3">
      {{-- button per tornare indietro nella index, non richiesto --}}
      <a href={{ route("comics.index", ["id" => $comic->id]) }} class="btn btn-lg btn-outline-light">Indietro</a>
      </div>
    </div>
  </div>
</div>

<div class="container-fluid my-5">
  <div class="col-md-8 mx-auto my-5">
    <div class="row my-5">
      <div class="col-md-8">
        <h2 class="mt-2 show-title">{{ $comic->title }}</h2>
        <div class="bg-light-green text-white p-3">
          <div class="row">
            <div class="col-md-8 d-flex justify-content-between align-items-center">
              <h6 class="mb-0">U.S. Price: $ {{ $comic->price }}</h6>
              <h6 class="mb-0">AVAILABLE</h6>
            </div>
            <div class="col-md-4 d-flex justify-content-center align-items-center">
              <select class="form-select form-select-sm bg-transparent text-white">
                <option selected="">Check Availability</option>
                <option value="1">Available</option>
                <option value="2">Unavailable</option>
              </select>
            </div>
          </div>
        </div>
        <p class="mt-3">{{ $comic->description }}</p>
      </div>
      <div class="col-md-4">
        <h5 class="text-center text-tertiary">ADVERTISEMENT</h5>
        <img src="/images/adv.jpg" alt="Immagine del Fumetto" class="img-fluid">
      </div>
    </div>
  </div>
</div>

<div class="container-fluid py-4 border" style="background-color: #f6f6f6;">
  <div class="col-md-8 mt-3 mb-5 mx-auto">
    <div class="row">
      <div class="col-md-7">
        <table class="table caption-top bg-transparent">
          <caption>
            <h3 class="show-title">Talent</h3>
          </caption>
          <tbody>
            <tr>
              <th scope="row">
                <h6 class="show-title text-nowrap">Art by:</h6>
              </th>
              <td colspan="2">
                <a class="text-decoration-none" href="#">
                  @if(is_array($comic['artists']))
                    {{ implode(", ", $comic['artists']) }}
                  @else
                      {{ $comic['artists'] }}
                  @endif
                </a>
              </td>
            </tr>
            <tr>
              <th scope="row">
                <h6 class="show-title text-nowrap">Written by:</h6>
              </th>
              <td colspan="2">
                <a class="text-decoration-none" href="#">
                  @if(is_array($comic['writers']))
                    {{ implode(", ", $comic['writers']) }}
                  @else
                    {{ $comic['writers'] }}
                  @endif
                </a>
              </td>
            </tr>
          </tbody>
        </table>

      </div>
      <div class="col-md-5">
        <table class="table caption-top bg-transparent">
          <caption>
            <h3 class="show-title">Specs</h3>
          </caption>
          <tbody>
            <tr>
              <th scope="row">
                <h6 class="show-title">Series</h6>
              </th>
              <td colspan="2"><a class="text-decoration-none" href="#">{{ strtoupper($comic->series) }}</a></td>
            </tr>
            <tr>
              <th scope="row">
                <h6 class="show-title">U.S. Price</h6>
              </th>
              <td colspan="2">${{ $comic->price }}</td>
            </tr>
            <tr>
              <th scope="row">
                <h6 class="show-title">On Sale Date</h6>
              </th>
              {{-- errore format, uso laravel casts. vai in nel model comic--}}
              <td colspan="2">{{ $comic->sale_date->format('M d Y') }}</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
{{-- Bannerino --}}
<div class="container-fluid p-0 vw-100 bannerino" style="background-color: #adadad48;">
  <div class="row justify-content-center">
    <div class="col-8">
      <div class="d-flex justify-content-evenly align-items-center gap-5">
        @foreach ($bannerLinks as $bannerLink)
          <a href="#" class="text-decoration-none">
            <div class="d-flex align-items-center gap-3">
              <div class="text-secondary">{{ $bannerLink['name'] }}</div>
              <img class="bannerino-icon" src="{{ $bannerLink['image'] }}" alt="">
            </div>
          </a>
        @endforeach
      </div>
    </div>
  </div>
</div>

@endsection