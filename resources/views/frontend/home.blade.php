@extends('frontend.layouts.app')
@section('title','best institute for iit in patna,Top coaching in Patna for NEET,Best coaching in Patna for 11 and
12,Best Coaching in Patna for SSC,Best IIT coaching in Bihar')
@section('content')
<style>
    /* Make the image fully responsive */
    .carousel-inner img {
        width: 100%;
        height: 100%;
    }

</style>
<!-- Home Design -->
<section class="home-one home1-overlay bg-img2">
    <div class="container">
        <div class="row posr">
            <div class="col-lg-12">
                <div class="home_content home1">
                    <div class="home-text text-center">
                        <h2 class="fz50">Discover Dream Places</h2>
                        <p class="fz18 color-white">Find great places to stay, eat, shop, or visit from local
                            experts.</p>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-lg-10 col-xl-8">
                            <div class="home_adv_srch_opt text-center">
                                <div class="wrapper">
                                    <div class="home_adv_srch_form home2">
                                        <div class="home_adv_srch_form">
                                            <form class="bgc-white bgct-767 pl30 pt10 pl0-767">
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto home_form_input mb20-xsd">
                                                        <label class="sr-only">Username</label>
                                                        <div class="input-group style1 mb-2 mb0-767">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text pl0 pb0-767">Where
                                                                </div>
                                                            </div>
                                                            <div class="select-wrap style1-dropdown">
                                                                <select name="lang" class="form-control js-searchBox">
                                                                    <option value="">Your City</option>
                                                                    <option value="NewYork">New York</option>
                                                                    <option value="London">London</option>
                                                                    <option value="Paris">Paris</option>
                                                                    <option value="Istanbul">Istanbul</option>
                                                                    <option value="LosAngeles">Los Angeles
                                                                    </option>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto home_form_input">
                                                        <label class="sr-only">Username</label>
                                                        <div class="input-group style2 mb-2 mb0-767">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text pb0-767">What
                                                                </div>
                                                            </div>
                                                            <div class="select-wrap style2-dropdown">

                                                                <select name="lang" class="form-control js-searchBox2">
                                                                    <option value="" selected>Select</option>
                                                                    <option value="">PG</option>
                                                                    <option value="TopPicks">Flat</option>
                                                                    <option value="CityOfLondon">Room</option>
                                                                </select>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-auto home_form_input2">
                                                        <button type="submit" class="btn search-btn mb-2"><span
                                                                class="flaticon-loupe"></span></button>
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
</section>

<!-- Property Cities -->
<section id="property-city" class="property-city border-bottom pb70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>Featured Places</h2>
                    <p>Cities You Must Explore This Summer</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="feature_place_home2_slider">
                    <div class="item">
                        <div class="properti_city">
                            <div class="thumb"><img class="img-fluid w100"
                                    src="{{ asset('/web/themes/guido') }}/images/property/pc5.jpg" alt="pc5.jpg"></div>
                            <div class="overlay">
                                <div class="details">
                                    <h4>Miami</h4>
                                    <p>62 Listing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properti_city">
                            <div class="thumb"><img class="img-fluid w100"
                                    src="{{ asset('/web/themes/guido') }}/images/property/pc6.jpg" alt="pc6.jpg"></div>
                            <div class="overlay">
                                <div class="details">
                                    <h4>Roma</h4>
                                    <p>92 Listing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properti_city">
                            <div class="thumb"><img class="img-fluid w100"
                                    src="{{ asset('/web/themes/guido') }}/images/property/pc7.jpg" alt="pc7.jpg"></div>
                            <div class="overlay">
                                <div class="details">
                                    <h4>New Delhi</h4>
                                    <p>12 Listing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properti_city">
                            <div class="thumb"><img class="img-fluid w100"
                                    src="{{ asset('/web/themes/guido') }}/images/property/pc8.jpg" alt="pc8.jpg"></div>
                            <div class="overlay">
                                <div class="details">
                                    <h4>London</h4>
                                    <p>74 Listing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="properti_city">
                            <div class="thumb"><img class="img-fluid w100"
                                    src="{{ asset('/web/themes/guido') }}/images/property/pc5.jpg" alt="pc5.jpg"></div>
                            <div class="overlay">
                                <div class="details">
                                    <h4>Miami</h4>
                                    <p>62 Listing</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Property Cities popular_listing_slider -->
<section class="bgc-f4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center mb20">
                    <h2>Most Popular Thing To Do</h2>
                    <p>Discover some of the most popular listings in Toronto based on user reviews and ratings.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="popular_listing_sliders row">
                    <!-- Nav tabs -->
                    <div class="nav nav-tabs mb50 col-lg-12 justify-content-center" role="tablist">
                        <a class="nav-link active" id="nav-shopping-tab" data-toggle="tab" href="#nav-shopping"
                            role="tab" aria-controls="nav-shopping" aria-selected="false">PG</a>
                        <a class="nav-link" id="nav-hotels-tab" data-toggle="tab" href="#nav-hotels" role="tab"
                            aria-controls="nav-hotels" aria-selected="false">Flat</a>
                        <a class="nav-link" id="nav-destination-tab" data-toggle="tab" href="#nav-destination"
                            role="tab" aria-controls="nav-destination" aria-selected="false">Rooms</a>
                    </div>

                    <!-- Tab panes -->
                    <div class="tab-content col-lg-12" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-shopping" role="tabpanel"
                            aria-labelledby="nav-shopping-tab">
                            <div class="popular_listing_slider1">
                                @foreach ($all_pg as $item)
                                <div class="item">
                                    <div class="feat_property">
                                        <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                            <div id="demo{{$item->id}}" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($item['images'] as $itema => $slider)
                                                    {{-- ----------------{{$itema}} --}}
                                                    <div class="carousel-item {{$itema == 0 ? 'active' : '' }}"
                                                        style="max-height: 200px !important">
                                                        <img class="d-block w-100"
                                                            src="{{Storage::url($slider['img_name'])}}"
                                                            alt="{{$slider['img_name']}}">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#demo{{$item->id}}"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demo{{$item->id}}"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </a>
                                        <div class="thmb_cntnt">
                                        </div>
                                        {{-- </div> --}}

                                        <div class="details">
                                            <div class="tc_content">
                                                <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{ Str::limit($item->about_property, 55) }}</p>
                                                    <ul class="prop_details mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-phone pr5"></span>
                                                                {{$item['partnername']['0']->phone}}</a></li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-pin pr5"></span>
                                                                {{$item->distName}}</a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center"><br>
                                                        Price Range &nbsp;
                                                        <a href="#">₹{{$item->price_range1}} --
                                                            ₹{{$item->price_range2}}</a>
                                                        </li>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#"><img
                                                                src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg"
                                                                alt="icon3.svg"></a></li>
                                                    <li class="list-inline-item"><a href="#">Outdoor
                                                            Activities</a></li>
                                                </ul>
                                                <ul class="fp_meta float-right mb0">
                                                    <li class="list-inline-item"><a
                                                            href="{{route('siglelisting',['slug' => $item->slug])}}"><span
                                                                class="flaticon-zoom"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-hotels" role="tabpanel" aria-labelledby="nav-hotels-tab">
                            <div class="popular_listing_slider1">
                                @foreach ($all_flats as $item)
                                <div class="item">
                                    <div class="feat_property">
                                        <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                            <div id="demo{{$item->id}}" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($item['images'] as $itema => $slider)
                                                    {{-- ----------------{{$itema}} --}}
                                                    <div class="carousel-item {{$itema == 0 ? 'active' : '' }}"
                                                        style="max-height: 200px !important">
                                                        <img class="d-block w-100"
                                                            src="{{Storage::url($slider['img_name'])}}"
                                                            alt="{{$slider['img_name']}}">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#demo{{$item->id}}"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demo{{$item->id}}"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </a>
                                        <div class="thmb_cntnt">
                                        </div>
                                        {{-- </div> --}}

                                        <div class="details">
                                            <div class="tc_content">
                                                <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{ Str::limit($item->about_property, 55) }}</p>
                                                    <ul class="prop_details mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-phone pr5"></span>
                                                                {{$item['partnername']['0']->phone}}</a></li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-pin pr5"></span>
                                                                {{$item->distName}}</a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center"><br>
                                                        Price Range &nbsp;
                                                        <a href="#">₹{{$item->price_range1}} --
                                                            ₹{{$item->price_range2}}</a>
                                                        </li>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#"><img
                                                                src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg"
                                                                alt="icon3.svg"></a></li>
                                                    <li class="list-inline-item"><a href="#">Outdoor
                                                            Activities</a></li>
                                                </ul>
                                                <ul class="fp_meta float-right mb0">
                                                    <li class="list-inline-item"><a
                                                            href="{{route('siglelisting',['slug' => $item->slug])}}"><span
                                                                class="flaticon-zoom"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-destination" role="tabpanel"
                            aria-labelledby="nav-destination-tab">
                            <div class="popular_listing_slider1">
                                @foreach ($all_rooms as $item)
                                <div class="item">
                                    <div class="feat_property">
                                        <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                            <div id="demo{{$item->id}}" class="carousel slide" data-ride="carousel">
                                                <div class="carousel-inner">
                                                    @foreach ($item['images'] as $itema => $slider)
                                                    {{-- ----------------{{$itema}} --}}
                                                    <div class="carousel-item {{$itema == 0 ? 'active' : '' }}"
                                                        style="max-height: 200px !important">
                                                        <img class="d-block w-100"
                                                            src="{{Storage::url($slider['img_name'])}}"
                                                            alt="{{$slider['img_name']}}">
                                                    </div>
                                                    @endforeach
                                                </div>
                                                <!-- Left and right controls -->
                                                <a class="carousel-control-prev" href="#demo{{$item->id}}"
                                                    data-slide="prev">
                                                    <span class="carousel-control-prev-icon"></span>
                                                </a>
                                                <a class="carousel-control-next" href="#demo{{$item->id}}"
                                                    data-slide="next">
                                                    <span class="carousel-control-next-icon"></span>
                                                </a>
                                            </div>
                                        </a>
                                        <div class="thmb_cntnt">
                                        </div>
                                        {{-- </div> --}}

                                        <div class="details">
                                            <div class="tc_content">
                                                <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                                    <h4>{{$item->name}}</h4>
                                                    <p>{{ Str::limit($item->about_property, 55) }}</p>
                                                    <ul class="prop_details mb0">
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-phone pr5"></span>
                                                                {{$item['partnername']['0']->phone}}</a></li>
                                                        <li class="list-inline-item"><a href="#"><span
                                                                    class="flaticon-pin pr5"></span>
                                                                {{$item->distName}}</a>
                                                        </li>
                                                    </ul>
                                                    <div class="text-center"><br>
                                                        Price Range &nbsp;
                                                        <a href="#">₹{{$item->price_range1}} --
                                                            ₹{{$item->price_range2}}</a>
                                                        </li>
                                                    </div>
                                                </a>
                                            </div>
                                            <div class="fp_footer">
                                                <ul class="fp_meta float-left mb0">
                                                    <li class="list-inline-item"><a href="#"><img
                                                                src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg"
                                                                alt="icon3.svg"></a></li>
                                                    <li class="list-inline-item"><a href="#">Outdoor
                                                            Activities</a></li>
                                                </ul>
                                                <ul class="fp_meta float-right mb0">
                                                    <li class="list-inline-item"><a
                                                            href="{{route('siglelisting',['slug' => $item->slug])}}"><span
                                                                class="flaticon-zoom"></span></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Why Chose Us -->
<section id="why-chose" class="whychose_us pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Filter by Category</h2>
                    <p>Discover some of the most popular listings in Toronto based on user reviews and ratings.
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-cutlery"></span></div>
                        <div class="details">
                            <h5 class="title">Restaurant</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-shopping-bag"></span></div>
                        <div class="details">
                            <h5 class="title">Shopping</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-tent"></span></div>
                        <div class="details">
                            <h5 class="title">Outdoor Activities</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-desk-bell"></span></div>
                        <div class="details">
                            <h5 class="title">Hotels</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-mirror"></span></div>
                        <div class="details">
                            <h5 class="title">Beauty & Spa</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-2">
                <div class="icon_hvr_img_box" style="background-image: url(web/themes/guido/images/service/4.jpg);">
                    <div class="overlay">
                        <div class="icon"><span class="flaticon-brake"></span></div>
                        <div class="details">
                            <h5 class="title">Automotive</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Blog -->
<section class="our-blog bgc-f4 pb70">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3">
                <div class="main-title text-center">
                    <h2>News & Tips</h2>
                    <p>Checkout Latest News And Articles From Our Blog.</p>
                </div>
            </div>
        </div>
        <div class="row">
            @foreach ($all_POST as $item)
            <a href="{{route('sigleblog',['slug' => $item->slug])}}">
                <div class="col-md-6 col-lg-4 col-xl-4">
                    <div class="for_blog feat_property">
                        <div class="thumb">
                            <img class="img-whp" src="{{Storage::url($item['f_image'])}}" alt="{{$item->name}}">
                            @isset($item->category_name)
                               <div class="tag bgc-thm"><a class="text-white" href="#">{{$item->category_name}}</a></div>
                            @endisset
                        </div>
                        <div class="details">
                            <div class="tc_content">
                                <div class="bp_meta">
                                    <ul>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-avatar mr10"></span>{{$item->user_name}}</a></li>
                                        <li class="list-inline-item"><a href="#"><span class="flaticon-date mr10"></span> {{$item->created_at->format('d/m/Y')}}</a></li>
                                    </ul>
                                </div>
                                <h4>{{$item->name}}</h4>
                            </div>
                        </div>
                    </div>
                </div>
            </a>
            @endforeach
        </div>
    </div>
</section>

<!-- Our Divider -->
{{-- <section class="divider bg-img5 parallax" data-stellar-background-ratio="0.2">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-lg-8">
				<div class="business_exposer text-center">
					<h2 class="title text-white mb20">Stay at Amazing Places</h2>
					<p class="text-white mb35">We've pre-picked the best hotels, hostels and bed and breakfasts
						to make your stay as enjoyable as possible.</p>
					<a class="btn stay_amplace_btn" href="#">See All Places</a>
				</div>
			</div>
		</div>
	</div>
</section> --}}
@endsection
