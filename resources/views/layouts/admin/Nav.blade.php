      <!-- Navbar -->
      <nav class="main-header navbar navbar-expand navbar-white navbar-light">
          <!-- Left navbar links -->
          <ul class="navbar-nav">
              <li class="nav-item">
                  <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
              </li>
          </ul>

          <!-- Right navbar links -->
          <ul class="navbar-nav ml-auto">
              <!-- Navbar Search -->
              <li class="nav-item">
                  <a class="nav-link" data-widget="navbar-search" href="#" role="button">
                      <i class="fas fa-search"></i>
                  </a>
                  <div class="navbar-search-block">
                      <form class="form-inline">
                          <div class="input-group input-group-sm">
                              <input class="form-control form-control-navbar" type="search" placeholder="Search"
                                  aria-label="Search">
                              <div class="input-group-append">
                                  <button class="btn btn-navbar" type="submit">
                                      <i class="fas fa-search"></i>
                                  </button>
                                  <button class="btn btn-navbar" type="button" data-widget="navbar-search">
                                      <i class="fas fa-times"></i>
                                  </button>
                              </div>
                          </div>
                      </form>
                  </div>
              </li>
              <li class="nav-item">
                  <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                      <i class="fas fa-expand-arrows-alt"></i>
                  </a>
              </li>
              <li class="nav-item">
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
                  <div class="dropdown show" style=" display: block; padding: auto; margin: auto;">
                      <a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink"
                          data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                          {{ Auth::user()->name }}
                      </a>

                      <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                              <a class="dropdown-item" href="{{ route('user.home') }}">Trang chủ</a>
                              <a class="dropdown-item" href="{{ route('admin.profile',['email'=> Auth::user()->email]) }}">Hồ sơ</a>
                              <a class="dropdown-item" href="{{ route('logout') }}"
                              onclick="event.preventDefault();
                                     document.getElementById('logout-form').submit();">
                              {{ __('Đăng xuất') }}
                          </a>
                          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                              @csrf
                          </form>

                      </div>
                  </div>
              @endguest
              </li>
          </ul>
      </nav>
      <!-- /.navbar -->
