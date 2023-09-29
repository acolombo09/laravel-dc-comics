<?php
  $headerLinks = [
    'HOME',
    'COMICS',
    'MOVIES',
    'TV',
    'GAMES',
    'COLLECTIBLES',
    'VIDEOS',
    'FANS',
    'NEWS',
    'SHOP',
  ]
?>
<header class="bg-white">
  <div class="header-top bg-primary py-1">
    <div class="container">
      <div class="d-flex gap-5 justify-content-end">
        <a href="#" class="link-top">
          DC POWER VISA
        </a>
        <a href="#" class="link-top">
          ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i>
        </a>
      </div>
    </div>
  </div>
  <div class="row py-2">
    <div class="col-md-9 d-flex align-items-center justify-content-around mx-auto px-0">
      <img src="/images/dc-logo.png" alt="dc-logo-header">
      <ul class="nav nav-pills">
        @foreach ($headerLinks as $link)
        <li class="nav-item">
          @if ($link === 'HOME')
            <a class="nav-link" href="/">
              {{ $link }}
            </a>
          @else
            <a class="nav-link" href="/{{ strtolower($link) }}">
              {{ $link }}
            </a>
          @endif
        </li>
        @endforeach
      </ul>
      <div>
        <form action="">
          <div class="input-block">
            <input class="border-top-0 border-start-0 border-end-0" type="text" placeholder="Search">
          </div>
        </form>
    </div>
    </div>
  </div>
</header>