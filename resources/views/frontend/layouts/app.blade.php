<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" itemscope itemtype="http://schema.org/WebPage">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="keywords" content="airbnb, booking, city guide, directory, events, hotel booking, listings, marketing, places, restaurant, restaurant">
    <meta name="description" content="Guido - Directory & Listing HTML Template">
    <meta name="CreativeLayers" content="ATFN">
    <!-- Title -->
    <title> @yield('title') | {{ config('app.name', 'NextGyaan') }}</title> 
    {{--==============================Included================================--}}
    <!--============================== css file ==============================-->
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/bootstrap.min.css">
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/style.css">
    <!-- Responsive stylesheet -->
    <link rel="stylesheet" href="{{ asset('/web/themes/guido') }}/css/responsive.css">
    <!--============================== Favicon ==============================-->
    <link href="{{ asset('/web/themes/guido') }}/images/favicon.ico" sizes="128x128" rel="shortcut icon" type="image/x-icon" />
    <link href="{{ asset('/web/themes/guido') }}/images/favicon.ico" sizes="128x128" rel="shortcut icon" />
    {{--==============================Included================================--}}
</head>

<body>
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
                            src="{{ asset('/web/themes/guido') }}/images/header-logo.svg" alt="header-logo.svg">
                        <button type="button" id="menu-btn">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <a href="{{route('homepage')}}" class="navbar_brand float-left dn-smd">
                        <img class="logo1 img-fluid" src="{{ asset('/web/themes/guido') }}/images/header-logo.svg"
                            alt="header-logo.svg">
                        <img class="logo2 img-fluid" src="{{ asset('/web/themes/guido') }}/images/header-logo2.svg"
                            alt="header-logo2.svg">
                        <span>Guido</span>
                    </a>
                    <!-- Responsive Menu Structure-->
                    <ul id="respMenu" class="ace-responsive-menu text-right" data-menu-style="horizontal">
                        <li>
                            <a href="{{route('homepage')}}"><span class="title">Home</span></a>
                            <!-- Level Two-->
                            {{-- <ul>
                                <li><a href="index-2.html">Home V1</a></li>
                                <li><a href="index2.html">Home V2</a></li>
                                <li><a href="index3.html">Home V3</a></li>
                            </ul> --}}
                        </li>
                        <li>
                            <a href="#"><span class="title">Listing</span></a>
                            <ul>
                                <li>
                                    <a href="#">Listing Styles</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-listing-v1.html">Listing v1</a></li>
                                        <li><a href="page-listing-v2.html">Listing v2</a></li>
                                        <li><a href="page-listing-v3.html">Listing v3</a></li>
                                        <li><a href="page-listing-v4.html">Listing v4</a></li>
                                        <li><a href="page-listing-v5.html">Listing v5</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Listing Map</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-listing-v6.html">Map v1</a></li>
                                        <li><a href="page-listing-v7.html">Map v2</a></li>
                                        <li><a href="page-listing-v8.html">Map v3</a></li>
                                        <li><a href="page-listing-v9.html">Map v4</a></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">Listing Single</a>
                                    <!-- Level Three-->
                                    <ul>
                                        <li><a href="page-listing-single-v1.html">Single V1</a></li>
                                        <li><a href="page-listing-single-v2.html">Single V2</a></li>
                                        <li><a href="page-listing-single-v3.html">Single V3</a></li>
                                    </ul>
                                </li>
                                <li><a href="page-add-new-listing.html">New Listing</a></li>
                            </ul>
                        </li>
                        <li class="list-inline-item list_s"><a href="#" class="btn flaticon-avatar" data-toggle="modal"
                                data-target=".bd-example-modal-lg"> <span class="dn-1200">Login/Sign Up</span></a></li>
                        <li class="list-inline-item add_listing home2"><a href="page-add-new-listing.html"><span
                                    class="icon">+</span><span class="dn-lg"> Add Listing</span></a></li>
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
                                        <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home"
                                            role="tab" aria-controls="home" aria-selected="true">Sign in</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile"
                                            role="tab" aria-controls="profile" aria-selected="false">Register</a>
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
                                                <input type="text" class="form-control"
                                                    id="inlineFormInputGroupUsername2" placeholder="Username / Email">
                                            </div>
                                            <div class="input-group form-group mb5">
                                                <input type="password" class="form-control" id="exampleInputPassword1"
                                                    placeholder="Password">
                                            </div>
                                            <div class="form-group custom-control custom-checkbox">
                                                <input type="checkbox" class="custom-control-input" id="exampleCheck1">
                                                <label class="custom-control-label" for="exampleCheck1">Remember
                                                    me</label>
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
                                                                    class="fa fa-facebook float-left mt5"></i> Log In
                                                                via Facebook</button>
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
                                                                    class="fa fa-facebook float-left mt5"></i> Log In
                                                                via Facebook</button>
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
                            src="{{ asset('/web/themes/guido') }}/images/header-logo2.svg" alt="header-logo2.svg">
                        <span class="mt15">Guido</span>
                    </div>
                    <ul class="menu_bar_home2">
                        <li class="list-inline-item"><a class="custom_search_with_menu_trigger msearch_icon" href="#"
                                data-toggle="modal" data-target="#staticBackdrop"><span
                                    class="flaticon-loupe"></span></a></li>
                        <li class="list-inline-item"><a class="muser_icon" href="page-register.html"><span
                                    class="flaticon-avatar"></span></a></li>
                        <li class="list-inline-item"><a class="menubar" href="#menu"><span></span></a></li>
                    </ul>
                </div>
            </div><!-- /.mobile-menu -->
            <nav id="menu" class="stylehome1">
                <ul>
                    <li><span>Home</span>
                        <ul>
                            <li><a href="index-2.html">Home V1</a></li>
                            <li><a href="index2.html">Home V2</a></li>
                            <li><a href="index3.html">Home V3</a></li>
                        </ul>
                    </li>
                    <li><span>Blog</span>
                        <ul>
                            <li><a href="page-blog-grid.html">Blog Grid</a></li>
                            <li><a href="page-blog-grid-sidebar.html">Blog Grid Sidebar</a></li>
                            <li><a href="page-blog-details.html">Blog Details</a></li>
                            <li><a href="page-blog-list.html">Blog List</a></li>
                            <li><a href="page-blog-single.html">Blog Single</a></li>
                        </ul>
                    </li>
                    <li><a href="page-contact.html">Contact</a></li>
                    <li><a href="page-login.html"><span class="flaticon-avatar"></span> Login</a></li>
                    <li><a href="page-register.html"><span class="flaticon-edit"></span> Register</a></li>
                    <li class="cl_btn"><a class="btn btn-block btn-lg btn-thm rounded" href="#"><span
                                class="icon">+</span> Create Listing</a></li>
                </ul>
            </nav>
        </div>

        <!-- Search Field Modal -->
        <section class="modal fade search_dropdown" id="staticBackdrop" data-backdrop="static" data-keyboard="false"
            tabindex="-1" aria-hidden="true">
            <div class="modal-dialog modal-xl">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="popup_modal_wrapper">
                            <div class="container-fluid">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <a class="close closer" data-dismiss="modal" aria-label="Close"
                                            href="#"><span><img
                                                    src="{{ asset('/web/themes/guido') }}/images/icons/close.svg"
                                                    alt=""></span></a>
                                    </div>
                                </div>
                            </div>
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 mb30">
                                        <h3>Filter by Category</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-cutlery"></span></div>
                                            <div class="content-details">
                                                <div class="title">Restaurant</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-shopping-bag"></span></div>
                                            <div class="content-details">
                                                <div class="title">Shopping</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-tent"></span></div>
                                            <div class="content-details">
                                                <div class="title">Outdoor Activities</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-desk-bell"></span></div>
                                            <div class="content-details">
                                                <div class="title">Hotels</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-mirror"></span></div>
                                            <div class="content-details">
                                                <div class="title">Beautu & Spa</div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-2">
                                        <div class="icon-box text-center">
                                            <div class="icon"><span class="flaticon-brake"></span></div>
                                            <div class="content-details">
                                                <div class="title">Automotive</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12 mb15 mt20">
                                        <h3>Explore Hot Location</h3>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc18.jpg"
                                                    alt="pc18.jpg"></div>
                                            <div class="details">
                                                <h4>Miami</h4>
                                                <p>62 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc19.jpg"
                                                    alt="pc19.jpg"></div>
                                            <div class="details">
                                                <h4>Roma</h4>
                                                <p>92 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc20.jpg"
                                                    alt="pc20.jpg"></div>
                                            <div class="details">
                                                <h4>New Delhi</h4>
                                                <p>12 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc21.jpg"
                                                    alt="pc21.jpg"></div>
                                            <div class="details">
                                                <h4>London</h4>
                                                <p>74 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc22.jpg"
                                                    alt="pc22.jpg"></div>
                                            <div class="details">
                                                <h4>Amsterdam</h4>
                                                <p>62 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc23.jpg"
                                                    alt="pc23.jpg"></div>
                                            <div class="details">
                                                <h4>Berlin</h4>
                                                <p>92 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc24.jpg"
                                                    alt="pc24.jpg"></div>
                                            <div class="details">
                                                <h4>Paris</h4>
                                                <p>12 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-6 col-md-6 col-lg-4 col-xl-3">
                                        <div class="property_city_home6 tac-xsd">
                                            <div class="thumb"><img class="w100"
                                                    src="{{ asset('/web/themes/guido') }}/images/property/pc25.jpg"
                                                    alt="pc25.jpg"></div>
                                            <div class="details">
                                                <h4>New Zealand</h4>
                                                <p>74 Listings</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @yield('content')
        <!-- Our Footer -->
        <section class="footer_one home2">
            <div class="container pb70">
                <div class="row">
                    <div class="col-sm-6 col-md-6 col-lg-3 col-xl-3">
                        <div class="footer_contact_widget home2">
                            <h4>Contact Us</h4>
                            <ul class="list-unstyled">
                                <li class="df"><span class="flaticon-pin mr15"></span><a href="#">329 Queensberry
                                        Street, North Melbourne VIC 3051, Australia.</a></li>
                                <li><span class="flaticon-phone mr15"></span><a href="#">+123 456 7890</a></li>
                                <li><span class="flaticon-email mr15"></span><a href="#">support@skola.com</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-2 col-xl-3">
                        <div class="footer_qlink_widget home2">
                            <h4>Company</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Help Center</a></li>
                                <li><a href="#">About</a></li>
                                <li><a href="#">Career</a></li>
                                <li><a href="#">How It Works</a></li>
                                <li><a href="#">Article & Tips</a></li>
                                <li><a href="#">Terms & Service</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-5 col-md-6 col-lg-2 col-xl-2">
                        <div class="footer_qlink_widget pl0 home2">
                            <h4>Discover</h4>
                            <ul class="list-unstyled">
                                <li><a href="#">Chicago</a></li>
                                <li><a href="#">Los Angels</a></li>
                                <li><a href="#">Miami</a></li>
                                <li><a href="#">New York</a></li>
                                <li><a href="#">Florida</a></li>
                                <li><a href="#">Boston</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-7 col-md-6 col-lg-4 col-xl-4">
                        <div class="footer_social_widget home2">
                            <h4>Subscribe</h4>
                            <p class="mb20">We don’t send spam so don’t worry.</p>
                            <form class="footer_mailchimp_form home2">
                                <div class="form-row align-items-center">
                                    <div class="col-auto">
                                        <input type="email" class="form-control" id="inlineFormInput"
                                            placeholder="Enter your email">
                                        <button type="submit" class="btn btn-primary">Subscribe</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <hr>
            <div class="container pt20 pb30">
                <div class="row">
                    <div class="col-md-4 col-lg-4">
                        <div class="copyright-widget mt10 mb15-767 home2">
                            <p>© Guido {{date('Y')}} - All rights reserved.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer_logo_widget text-center mb15-767 home2">
                            <div class="wrapper">
                                <div class="logo text-center">
                                    <img src="{{ asset('/web/themes/guido') }}/images/header-logo3.svg"
                                        alt="header-logo3.svg">
                                    <span class="logo_title pl15">Guido</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4">
                        <div class="footer_social_widget text-right tac-smd mt10 home2">
                            <ul class="mb0">
                                <li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <a class="scrollToHome" href="#"><i class="fa fa-angle-up"></i></a>
    </div>
{{--==============================Included================================--}}
    <!-- Wrapper End -->
    <script src="{{ asset('/web/themes/guido') }}/js/jquery-3.6.0.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/jquery-migrate-3.0.0.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/popper.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/bootstrap.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/jquery.mmenu.all.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/ace-responsive-menu.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/bootstrap-select.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/isotop.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/snackbar.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/simplebar.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/parallax.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/scrollto.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/jquery-scrolltofixed-min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/jquery.counterup.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/wow.min.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/progressbar.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/slider.js"></script>
    <script src="{{ asset('/web/themes/guido') }}/js/timepicker.js"></script>
    <!-- Custom script for all pages -->
    <script src="{{ asset('/web/themes/guido') }}/js/script.js"></script>
{{--==============================Included================================--}}
</body>

</html>
