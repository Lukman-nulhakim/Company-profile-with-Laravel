    <!-- HEADER -->

    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <div class="container py-2">
        <img src="img/logo.png" alt="Responsive image">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ml-auto">
            <a class="nav-link @yield('Home')" href="/home">Home</a>
            <a class="nav-link @yield('About')" href="/about">About</a>
            <a class="nav-link @yield('Produk')" href="/produk">Produk</a>
            <a class="nav-link @yield('Service')" href="/service">Service</a>
            <a class="nav-link @yield('Portfolio')" href="/portfolio">Portfolio</a>
            <a href="#" class="btn btn-primary rounded-pill">Join Us</a>
          </div>
        </div>
      </div>
    </nav>

{{-- Jumbotron --}}
      <div class="jumbotron jumbotron-fluid">
        <div class="container">
          <h1 class="display-4">Welcome To The Extraordinary <br><span>Technology Company</span></h1>
        </div>
      </div>
