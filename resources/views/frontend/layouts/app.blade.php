@include('frontend.layouts.header')
<div class="wrapper">
    <div class="preloader"></div>
    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one navbar-scrolltofixed stricky main-menu">
        <div class="container-fluid p0">
            <!-- Ace Responsive Menu -->
            <nav>
                <!-- Menu Toggle btn-->
                <div class="menu-toggle">
                    <img class="nav_logo_img img-fluid"
                        src="{{ asset('/web/themes/guido') }}/images/rsz_makairoom_log0_white.png"
                        alt="header-logo.svg">
                    <button type="button" id="menu-btn">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <a href="{{route('homepage')}}" class="navbar_brand float-left dn-smd">
                    <img class="logo1 img-fluid"
                        src="{{ asset('/web/themes/guido') }}/images/rsz_makairoom_log0_white.png"
                        alt="header-logo.svg">
                    <img class="logo2 img-fluid" src="{{ asset('/web/themes/guido') }}/images/makairooms_14045.png"
                        alt="header-logo2.svg">
                    {{-- <span>Guido</span> --}}
                </a>
                <!-- Responsive Menu Structure-->
                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                    <li>
                        <a href="{{route('homepage')}}"><span class="title">Home</span></a>
                    </li>
                @include('frontend.listing.layout.template.explore')
                @include('frontend.listing.layout.template.login_view')
                </ul>
            </nav>
        </div>
    </header>
    <!-- Main Header Nav For Mobile -->
    <div id="page" class="stylehome1 h0">
        <div class="mobile-menu">
            <div class="header stylehome1">
                <div class="main_logo_home2 text-left">
                    <img class="nav_logo_img img-fluid mt15"
                        src="{{ asset('/web/themes/guido') }}/images/makairooms_14045.png" alt="header-logo2.svg">
                    {{-- <span class="mt15">Guido</span> --}}
                </div>
                <ul class="menu_bar_home2">
                    <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"
                            data-toggle="modal" data-target="#staticBackdrop"><span class="flaticon-loupe"></span></a>
                    </li>
                    {{-- @include('frontend.listing.layout.template.login_view'); --}}
                    @if (!Auth::guest())
                    <li>
                        <a href="#"><span class="title">{{Auth::user()->name}}</span></a>
                        <!-- Level Two-->
                        <ul>
                            {{-- <li><a href="page-author-single.html">Profile</a></li> --}}
                            <li><a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="list-inline-item"><a class="muser_icon" href="{{route('login')}}"><span
                                class="flaticon-avatar"></span></a></li>
                    @endif
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
                </ul>
            </div>
        </div><!-- /.mobile-menu -->
        <nav id="menu" class="stylehome1">
            <ul>
                <li>
                <li><a href="{{'/'}}">Home</a></li>
                </li>
                <li><span>Explore</span>
                    <ul>
                        <li><a href="{{route('all_isting',['type' => 'PG'])}}">PG</a></li>
                        <li><a href="{{route('all_isting',['type' => 'FLAT'])}}">Flat</a></li>
                        <li><a href="{{route('all_isting',['type' => 'ROOMS'])}}">Room</a></li>
                    </ul>
                </li>
                <li><a href="{{'/'}}">Blog</a></li>
                <li><a href="page-contact.html">Contact</a></li>
                @if (!Auth::guest())
                <li>
                    <a href="#"><span class="title">{{Auth::user()->name}}</span></a>
                    <!-- Level Two-->
                    <ul>
                        <li><a href="#">Profile</a></li>
                        <li><a href="{{ route('logout') }}"
                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        </li>
                    </ul>
                </li>
                @else
                <li class="list-inline-item list_s"><a href="{{route('login')}}" class="btn flaticon-avatar"> <span
                            class="dn-1200">Login/Sign Up</span></a></li>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </ul>
        </nav>
    </div>



    @yield('content')
    <!-- Our Footer -->
    @include('frontend.layouts.footer')
