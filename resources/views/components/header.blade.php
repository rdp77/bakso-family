<header id="topnav" class="defaultscroll sticky">
    <div class="container">
        <!-- Logo container-->
        <div>
            <a class="logo" href="/">
                <img src="{{ asset('storage/images/logo-dark.png') }}" height="24" alt="">
            </a>
        </div>
        <div class="buy-button">
            <a href="{{ route('shop') }}" class="btn btn-primary">{{ __('Beli Sekarang') }}</a>
        </div>
        <!--end login button-->
        <!-- End Logo container-->
        <div class="menu-extras">
            <div class="menu-item">
                <!-- Mobile menu toggle-->
                <a class="navbar-toggle">
                    <div class="lines">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </a>
                <!-- End mobile menu toggle-->
            </div>
        </div>

        <div id="navigation">
            <!-- Navigation Menu-->
            <ul class="navigation-menu nav-right">
                <li><a href="/">{{ __('Beranda') }}</a></li>
                <li class="has-submenu">
                    <a href="javascript:void(0)">{{ __('Akun') }}</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        @guest
                        <li><a href="{{ route('login') }}">{{ __('Masuk') }}</a></li>
                        <li><a href="{{ route('register') }}">{{ __('Daftar') }}</a></li>
                        @else
                        <li><a href="{{ route('profile') }}">{{ __('Profil') }}</a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">{{ __('Keluar') }}</a></li>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                        @if (Auth::user()->admin == 'TRUE')
                        <li><a href="{{ route('home') }}">{{ __('Dashboard') }}</a></li>
                        @endif
                        @endguest
                    </ul>
                </li>
                @if (Auth::check())
                <li class="has-submenu">
                    <a href="javascript:void(0)">{{ __('Pembelian') }}</a><span class="menu-arrow"></span>
                    <ul class="submenu">
                        <li><a href="{{ route('statusUser') }}">{{ __('Status') }}</a></li>
                        <li><a href="{{ route('historyUser') }}">{{ __('Riwayat') }}</a></li>
                    </ul>
                </li>
                @endif
                <li><a href="{{ route('contact') }}">Kontak</a></li>
            </ul>
            <!--end navigation menu-->
            <div class="buy-menu-btn d-none">
                <a href="{{ route('shop') }}" class="btn btn-primary">Buy Now</a>
            </div>
            <!--end login button-->
        </div>
        <!--end navigation-->
    </div>
    <!--end container-->
</header>