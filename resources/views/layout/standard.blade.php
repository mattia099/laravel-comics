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
        
        <img src="../assets/dc-logo.png">
        
        <nav>
          <ul>
            <li><a href="">charachter</a></li>
            <li><a href="">comics</a></li>
            <li><a href="">movies</a></li>
            <li><a href="">tv</a></li>
            <li><a href="">games</a></li>
            <li><a href="">collectibles</a></li>
            <li><a href="">videos</a></li>
            <li><a href="">fans</a></li>
            <li><a href="">news</a></li>
            <li><a href="">shop</a></li>

          </ul>
        </nav>
      </div>
    </header>
  </header>

  <main>
    @yield('main')
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
          <img src="../assets/dc-logo-bg.png" alt="">
        </figure>
    </div>
  </footer>
</body>
</html>