<body>
  <header>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container-fluid">
        <a class="navbar-brand h5 mb-0" href="{{action('PagesController@index')}}">SQULABO</a>
        <button class="navbar-toggler" type="button"
        data-toggle="collapse"
        data-target="#navbarTogglerDemo"

        aria-controls="navbarTogglerDemo"
        aria-expanded="false"
        aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="text-right collapse navbar-collapse" id="navbarTogglerDemo">
        <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
          <li class="nav-item mr-4 mb-2 mb-lg-0">
            <a class="nav-link" href="{{action('PagesController@index')}}">Home</a>
          </li>
          <li class="nav-item mr-4 mb-2 mb-lg-0">
            <a class="nav-link" href="{{action('PagesController@business')}}">Business</a>
          </li>
        </ul>
        @if(Auth::check())
        <ul class="navbar-nav ">
          <li class="nav-item dropdown">
            <a class="nav-link" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              {{ Auth::user()->name }} <i class="fas fa-angle-down small ml-1"></i>
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="{{route('user.profile')}}">Profile</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="{{route('user.logout')}}">Sign Out</a>
            </div>
          </li>
        </ul>


        @else
        <div class=" my-2 my-lg-0 pr-2">
          <a class="btn btn-secondary" href="{{route('user.signin')}}">ログイン</a>
        </div>

        <div class="my-2 my-lg-0 pr-2">
          <a class="btn btn-info" href="{{route('user.signup')}}">新規登録</a>
        </div>
        @endif

      </div>
    </div>
  </nav>
  <!-- End Navbar -->
  @yield('header')
</header>
<!-- End Header -->
