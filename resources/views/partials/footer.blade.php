<?php
  $dcComicsLinks = [
    'Characters',
    'Comics',
    'Movies',
    'Tv',
    'Games',
    'Videos',
    'News',
  ];
  
  $shopLinks = [
    'Shop Dc',
    'Shop Collectibles',
  ];
  
  $dcLinks = [
    'Terms Of Use',
    'Privacy Policy(New)',
    'AdChoice',
    'Advertising',
    'Jobs',
    'Subscriptions',
    'Talent Workshops',
    'CPSC Certificates',
    'Ratings',
    'Shop Help',
    'Contact Us',
  ];

  $sitesLinks = [
    'DC',
    'Mad Magazine',
    'DC Kids',
    'DC Universe',
    'DC Power Visa',
  ];
?>
<footer>
  <div class="container-fluid px-0 footer-upper">
    <div class="row mx-0">
      <div class="col-md-9 d-flex justify-content-start align-items-center py-4 mx-auto overflow-hidden position-relative">
        <div class="col-md-4 d-flex justify-content-between px-0">
          <div class="row mx-0">
            <div class="col-4 px-0">
              <h6 class="footer-title">DC COMICS</h6>
              <ul class="list-unstyled">
                @foreach ($dcComicsLinks as $dcomicsLink)
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ $dcomicsLink }}
                  </a>
                </li>
                @endforeach
              </ul>
              <h6 class="footer-title">SHOP</h6>
              <ul class="list-unstyled">
                @foreach ($shopLinks as $shopLink)
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ $shopLink }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-4 px-0">
              <h6 class="footer-title">DC</h6>
              <ul class="list-unstyled">
                @foreach ($dcLinks as $dcLink)
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ $dcLink }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
            <div class="col-4 px-0">
              <h6 class="footer-title">SITES</h6>
              <ul class="list-unstyled">
                @foreach ($sitesLinks as $siteLink)
                <li class="nav-item">
                  <a class="nav-link" href="#">
                    {{ $siteLink }}
                  </a>
                </li>
                @endforeach
              </ul>
            </div>
          </div> 
        </div>
        <div class="col-md-8 div-logo">
          <img src="/images/dc-logo-bg.png" class="logo-img" alt="logo-dc-bg">
        </div>
      </div>
    </div>
  </div>
  
  <div class="container-fluid px-0 footer-lower">
    <div class="row">
      <div class="col-md-9 d-flex justify-content-between align-items-center py-4 mx-auto">
        <div class="col-md-4 d-flex align-items-center justify-content-start">
          <button type="button" class="btn btn-lg btn-outline-primary border-2 rounded-0 text-white">SIGN-UP NOW!</button>
        </div>
        <ul class="nav col-md-4 d-flex justify-content-end align-items-center list-unstyled">
          <li class="ms-3"><h3 class="text-primary fs-4 fw-bold" href="#">FOLLOW US</h3></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-facebook.png" alt="fb-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-twitter.png" alt="twitt-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-youtube.png" alt="yt-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-pinterest.png" alt="pint-footer"></a></li>
          <li class="ms-3"><a class="text-body-secondary" href="#"><img src="/images/footer-periscope.png" alt="locator-footer"></a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>