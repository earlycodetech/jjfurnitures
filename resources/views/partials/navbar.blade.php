  <!-- Navbar Start -->
  <section>
      <nav class="navbar navbar-expand-lg navbar-light bg-warning-subtle">
          <div class="container-fluid">
              <a class="navbar-brand" href="{{ route('home.page') }}">
                  <img src="assets/images/logo.png" width="40" alt="Logo">
              </a>
              <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
                  data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
              </button>
              <div class="collapse navbar-collapse" id="collapsibleNavId">
                  <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                      <li class="nav-item">
                          <a class="nav-link {{ request()->is('/') ? 'active' : "" }}" href="{{ route('home.page') }}" aria-current="page">Home
                              <span class="visually-hidden">(current)</span></a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="#">About</a>
                      </li>
                      <li class="nav-item dropdown">
                          <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                              aria-haspopup="true" aria-expanded="false">Categories</a>
                          <div class="dropdown-menu" aria-labelledby="dropdownId">
                              <a class="dropdown-item" href="#">Dinning Set</a>
                              <a class="dropdown-item" href="#"> Lounge Set </a>
                          </div>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ request()->is('shop') ? 'active' : "" }}" href="{{ route('shop.page') }}">Shop</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link {{ request()->is('contact') ? 'active' : "" }}" href="{{ route('contact.page') }}">Contact</a>
                      </li>
                      <form class="d-flex my-2 my-lg-0">
                          <input class="form-control me-sm-2" type="text" placeholder="Search" />
                          <button class="btn btn-outline-success my-2 my-sm-0" type="submit">
                              Search
                          </button>
                      </form>
                  </ul>
                  <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ms-auto">
                      <!-- Authentication Links -->
                      @guest
                          @if (Route::has('login'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                              </li>
                          @endif

                          @if (Route::has('register'))
                              <li class="nav-item">
                                  <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                              </li>
                          @endif
                      @else
                          <li class="nav-item dropdown">
                              <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                                  data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                  {{ Auth::user()->name }}
                              </a>

                              <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="{{ route('logout') }}"
                                      onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                      {{ __('Logout') }}
                                  </a>

                                  <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                      @csrf
                                  </form>
                              </div>
                          </li>
                      @endguest
                  </ul>
              </div>
          </div>
      </nav>

  </section>
  <!-- Navbar Ends -->
