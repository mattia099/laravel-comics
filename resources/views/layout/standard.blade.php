<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <title>@yield('meta-title')</title>
</head>
<body>
  <header>
    <header>
      <div class="container">
        
        <img src="{{ asset('img/dc-logo.png') }}">
        
        <nav>
          <ul>
            <li><a href="/">charachter</a></li>
            <li><a href="{{ route('comics.index') }}" class="{{ Request::route()->getName()=='comics.index' ? 'active' : '' }}">comics</a></li>
            <li><a href="/">movies</a></li>
            <li><a href="/">tv</a></li>
            <li><a href="/">games</a></li>
            <li><a href="/">collectibles</a></li>
            <li><a href="/">videos</a></li>
            <li><a href="/">fans</a></li>
            <li><a href="/">news</a></li>
            <li><a href="/">shop</a></li>

          </ul>
        </nav>
      </div>
    </header>
  </header>

  <main>
    <figure class="jumbotron">
      <div class="container">
        <span>Current series</span>
      </div>
    </figure>

    @yield('main')

    <div class="menu">
      <div class="container">
        <ul>
          <li>
            <img src="{{ asset('img/buy-comics-digital-comics.png') }}" alt="">
            <p>digital comics</p>
          </li>
          <li>
            <img src="{{ asset('img/buy-comics-merchandise.png') }}" alt="">
            <p>dc merchandise</p>
          </li>
          <li>
            <img src="{{ asset('img/buy-comics-subscriptions.png') }}" alt="">
            <p>subscription</p>
          </li>
          <li>
            <img src="{{ asset('img/buy-comics-shop-locator.png') }}" alt="">
            <p>comic shop locator</p>
          </li>
          <li>
            <img src="{{ asset('img/buy-dc-power-visa.svg') }}" alt="">
            <p>dc power visa</p>
          </li>
        </ul>
      </div>
    </div>
  </main>

  <footer>
    <div class="footer_first-section">
      <div class="container">
        <section>
          <ul>
            <h3>dc comics</h3>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem ipsum dolor</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <h3>shop</h3>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
          </ul>

          <ul>
            <h3>dc</h3>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
          </ul>

          <ul>
            <h3>sites</h3>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
            <li><a href="">lorem</a></li>
          </ul>
        </section>
                  
        <figure>
          <img src="{{ asset('img/dc-logo-bg.png') }}">
        </figure>
    </div>
  </footer>
</body>
</html>