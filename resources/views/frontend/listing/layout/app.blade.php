@include('frontend.layouts.header')
<div class="wrapper">
    <div class="preloader"></div>

    <!-- Main Header Nav -->
    <header class="header-nav menu_style_home_one style2 menu_boxshadow navbar-scrolltofixed stricky main-menu">
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
                    <img class="logo1 img-fluid" src="{{ asset('/web/themes/guido') }}/images/makairooms_14045.png"
                        alt="header-logo.svg">
                    <img class="logo2 img-fluid" src="{{ asset('/web/themes/guido') }}/images/makairooms_14045.png"
                        alt="header-logo2.svg">
                    {{-- <span>Guido</span> --}}
                </a>
                <!-- Responsive Menu Structure-->
                <!--Note: declare the Menu style in the data-menu-style="horizontal" (options: horizontal, vertical, accordion) -->
                <div class="ht_left_widget style2 float-left">
                    <ul>
                        <li class="list-inline-item">
                            <div class="ht_search_widget">
                                <div class="header_search_widget inner_page">
                                    <form class="form-inline mailchimp_form">
                                        <input type="text" class="custom_search_with_menu_trigger form-control"
                                            placeholder="What are you looking for?" data-toggle="modal"
                                            data-target="#staticBackdrop">
                                        <button type="submit" class="btn"><span class="flaticon-loupe"></span></button>
                                    </form>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                    <li>
                        <a href="{{route('homepage')}}"><span class="title">Home</span></a>
                    </li>
                    @include('frontend.listing.layout.template.explore')
                    @include('frontend.listing.layout.template.login_view')
                    <li class="list-inline-item add_listing"><a href="#"><span class="icon">+</span><span class="dn-lg">
                                Add Listing</span></a></li>
                </ul>
            </nav>
        </div>
    </header>
    <!-- Modal -->
    <div class="sign_up_modal modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-md mt100" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span></button>
                </div>
                <div class="modal-body container pb20 pl0 pr0 pt0">
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="sign_up_tab nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab"
                                        aria-controls="home" aria-selected="true">Sign in</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab"
                                        aria-controls="profile" aria-selected="false">Register</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-content container" id="myTabContent">
                        <div class="row mt40 tab-pane fade show active pl20 pr20" id="home" role="tabpanel"
                            aria-labelledby="home-tab">
                            <div class="col-lg-12">
                                <div class="login_form">
                                    <form action="#">
                                        <div class="input-group mb-2 mr-sm-2">
                                            <input type="text" class="form-control" id="inlineFormInputGroupUsername2"
                                                placeholder="Username / Email">
                                        </div>
                                        <div class="input-group form-group mb5">
                                            <input type="password" class="form-control" id="exampleInputPassword1"
                                                placeholder="Password">
                                        </div>
                                        <div class="form-group custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                            <label class="custom-control-label" for="exampleCheck1">Remember me</label>
                                            <a class="btn-fpswd float-right" href="#">Forgot password?</a>
                                        </div>
                                        <button type="submit" class="btn btn-log btn-block btn-thm">Sign in</button>
                                        <p class="text-center mb30 mt20">Don't have an account? <a class="text-thm"
                                                href="#">Sign up</a></p>
                                        <hr>
                                        <div class="row mt30">
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-fb btn-block"><i
                                                        class="fa fa-facebook float-left mt5"></i> Log In via
                                                    Facebook</button>
                                            </div>
                                            <div class="col-lg-6">
                                                <button type="submit" class="btn btn-googl btn-block"><i
                                                        class="fa fa-google float-left mt5"></i> Log In via
                                                    Google+</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="row mt40 tab-pane fade pl20 pr20" id="profile" role="tabpanel"
                            aria-labelledby="profile-tab">
                            <div class="col-lg-12">
                                <div class="sign_up_form">
                                    <ul class="nav nav-pills mb-4" id="pills-tab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link active" id="pills-home-tab" data-toggle="pill"
                                                href="#pills-home" role="tab" aria-controls="pills-home"
                                                aria-selected="true">Customer</a>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <a class="nav-link" id="pills-profile-tab" data-toggle="pill"
                                                href="#pills-profile" role="tab" aria-controls="pills-profile"
                                                aria-selected="false">Business Owner</a>
                                        </li>
                                    </ul>
                                    <div class="tab-content" id="pills-tabContent">
                                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                                            aria-labelledby="pills-home-tab">
                                            <form action="#">
                                                <div class="form-group input-group">
                                                    <input type="email" class="form-control" id="exampleInputEmail2"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group input-group">
                                                    <input type="text" class="form-control" id="exampleInputName"
                                                        placeholder="Username">
                                                </div>
                                                <div class="form-group input-group mb20">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword2" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-log btn-block btn-thm">Sign
                                                    Up</button>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="btn btn-block btn-fb"><i
                                                                class="fa fa-facebook float-left mt5"></i> Log In via
                                                            Facebook</button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="btn btn-block btn-googl"><i
                                                                class="fa fa-google float-left mt5"></i> Log In via
                                                            Google+</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                                            aria-labelledby="pills-profile-tab">
                                            <form action="#">
                                                <div class="form-group input-group">
                                                    <input type="email" class="form-control" id="exampleInputEmail3"
                                                        placeholder="Email">
                                                </div>
                                                <div class="form-group input-group">
                                                    <input type="text" class="form-control" id="exampleInputName2"
                                                        placeholder="Username">
                                                </div>
                                                <div class="form-group input-group mb20">
                                                    <input type="password" class="form-control"
                                                        id="exampleInputPassword3" placeholder="Password">
                                                </div>
                                                <button type="submit" class="btn btn-log btn-block btn-thm">Sign
                                                    Up</button>
                                                <hr>
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="btn btn-block btn-fb"><i
                                                                class="fa fa-facebook float-left mt5"></i> Log In via
                                                            Facebook</button>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <button type="submit" class="btn btn-block btn-googl"><i
                                                                class="fa fa-google float-left mt5"></i> Log In via
                                                            Google+</button>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

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

    <!-- Listing Grid View -->
    @yield('content')
    @include('frontend.layouts.footer')
