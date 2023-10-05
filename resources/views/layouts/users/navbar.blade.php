<div class="container-fluid container-xl d-flex align-items-center justify-content-between">

    <a href="
    @guest
    {{ route('home1')}}
    @else
    {{route('user.home')}}
    @endguest
    " class="logo d-flex align-items-center">
        <!-- Uncomment the line below if you also wish to use an image logo -->
        <!-- <img src="UserCSS/assets/img/logo.png" alt=""> -->
        <img src="{{ asset('AdminCSS/dist/img/Logo.png') }}" alt="">
    </a>

    <i class="mobile-nav-toggle mobile-nav-show bi bi-list"></i>
    <i class="mobile-nav-toggle mobile-nav-hide d-none bi bi-x"></i>
    <nav id="navbar" class="navbar">
        <ul>

            @guest
                <li><a href="{{ route('home1') }}">Trang chủ</a></li>
                <li><a href="{{ route('about') }}">Về chúng tôi</a></li>
                <li><a href="{{ route('event') }}">Sự kiện</a></li>
                <li><a href="{{ route('blog') }}">Bài viết</a></li>
                <li><a href="{{ route('contact') }}">Liên hệ</a></li>
                
                @if (Route::has('login'))
                    <li>
                        <a href="{{ route('login') }}">{{ __('Đăng nhập') }}</a>
                    </li>
                @endif
                @if (Route::has('register'))
                    <li>
                        <a href="{{ route('register') }}">{{ __('Đăng ký') }}</a>
                    </li>
                @endif
            @else
                <li><a href="{{ route('user.home') }}">Trang chủ</a></li>
                <li><a href="{{ route('user.about') }}">Về chúng tôi</a></li>
                <li><a href="{{ route('user.event') }}">Sự kiện</a></li>
                <li><a href="{{ route('user.blog') }}">Bài viết</a></li>
                <li><a href="{{ route('user.contact') }}">Liên hệ</a></li>
                <li class="dropdown"><a class="dropdown-toggle nav-link" href="#" role="button" id="dropdownMenuLink"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        {{ Auth::user()->name }}
                    </a>
                    <ul>
                        <li><a href="{{ route('user.home') }}">Trang chủ</a></li>
                        <li><a href="{{ route('user.profile',['email'=> Auth::user()->email]) }}">Hồ sơ</a></li>
                        @if (Auth::user()->role == 1)
                            <li><a href="{{ route('admin.home') }}">Admin</a></li>
                        @endif
                        <a href="{{ route('logout') }}"
                            onclick="event.preventDefault();
                               document.getElementById('logout-form').submit();">
                            {{ __('Đăng xuất') }}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </ul>
                </li>
            @endguest
            
        </ul>
    </nav><!-- .navbar -->

</div>
