@extends('frontend.layouts.app')
@section('title','Find Brokrege Free Stay : Find Flats , Apartment , PG for Rent')
@section('content')
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
                                            <form class="bgc-white bgct-767 pl30 pt10 pl0-767" action="{{route('properyfilter')}}" method="POST"> @csrf 
                                                <div class="form-row align-items-center">
                                                    <div class="col-auto home_form_input mb20-xsd">
                                                        <label class="sr-only">Username</label>
                                                        <div class="input-group style1 mb-2 mb0-767">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text pl0 pb0-767">Where
                                                                </div>
                                                            </div>
                                                            <div class="select-wrap style1-dropdown">
                                                                <select name="city" class="form-control js-searchBox">
                                                                    <option value="">Your City</option>
                                                                    @foreach ($allcity as $item)
                                                                        <option value="{{$item->id}}">{{$item->city_name}}</option>   
                                                                    @endforeach
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
                    @foreach ($allcity as $item)
                        <div class="item">
                            <div class="properti_city">
                                <div class="thumb"><img class="img-fluid w100"src="{{Storage::url($item->city_img)}}" alt="{{$item->city_name}}" alt="pc5.jpg"></div>
                                <div class="overlay">
                                    <div class="details">
                                        <h4>{{$item->city_name}}</h4>
                                        <p>{{$item->count}}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                    {{-- <div class="item">
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
                    </div> --}}
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Property Cities popular_listing_slider -->


<!-- Why Chose Us -->
<section id="why-chose" class="whychose_us pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Why Choose Makairooms</h2>
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
                                        <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-avatar mr10"></span>{{$item->user_name}}</a></li>
                                        <li class="list-inline-item"><a href="#"><span
                                                    class="flaticon-date mr10"></span>
                                                {{$item->created_at->format('d/m/Y')}}</a></li>
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
        <center><a href="{{route('blog')}}" type="submit" class=" txt-center  btn btn-outline-primary">View All</a></center>
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
