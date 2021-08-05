@extends('frontend.listing.layout.app')
@isset($property)
@section('title',e($property->name))
@endisset
@empty($property)
@section('title','404 Not Foud')
@endempty
@section('content')
@section('excss')
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />
{!! NoCaptcha::renderJs() !!}
@endsection
@isset($property)
<!-- Listing Single Property -->
<section class="listing-title-area p0 bb1">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12 p0">
                <div class="listing_single_property_slider">
                    @foreach ($property['images'] as $item)
                    <div class="item">
                        <img class="img-fluid" src="{{Storage::url($item->img_name)}}" alt="{{$item->img_name}}">
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row mb20 mt20">
            <div class="col-xl-7">
                <div class="single_property_title">
                    <div class="media">
                        <div class="media-body mt20">
                            <h2 class="mt-0">{{$property->name}}</h2>
                            <ul class="mb0 agency_profile_contact">
                                <li class="list-inline-item"><a href="#"><span
                                            class="flaticon-pin"></span>{{$property['distName']}}</a></li>
                                <li class="list-inline-item"><a class="price_range"
                                        href="#">₹{{$property->price_range1}} -- ₹{{$property->price_range2}}</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dn db-lg">
                    <div id="main2">
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="single_property_social_share">
                    <div class="spss style2 mt30 float-left fn-lg">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Agent Single Grid View -->
<section class="our-agent-single pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
                        <div class="listing_single_description mb60">
                            <h4 class="mb30">Overview</h4>
                            <p class="first-para mb25">{{$property->about_property}}</p>
                            <p class="overlay_close">
                                <a class="text-thm fz15 tdu" data-toggle="collapse" href="#collapseExample"
                                    role="button" aria-expanded="false" aria-controls="collapseExample">Show More</a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="additional_details mb30">
                            <div class="row">
                                <div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
                                    <h4 class="mb30">Features</h4>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-credit-card"></span>
                                        </div>
                                        <div class="details">
                                            <div class="title">Accepts Credit Cards</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-bike"></span></div>
                                        <div class="details">
                                            <div class="title">Bike Parking</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-car"></span></div>
                                        <div class="details">
                                            <div class="title">Parking Street</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-wifi"></span></div>
                                        <div class="details">
                                            <div class="title">Wireless Internet</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-disabled"></span></div>
                                        <div class="details">
                                            <div class="title">Wheelchair Accessible</div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
                                    <div class="listing_feature_iconbox mb30">
                                        <div class="icon float-left mr10"><span class="flaticon-pawprint"></span></div>
                                        <div class="details">
                                            <div class="title">Pets Friendly</div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @isset($property['property_item'])
                    <div class="col-lg-12 pl0 pl15-767">
                        <div class="custom_reivews mt30 mb30 row">
                            <h3 class="text-center">Property Items</h3>
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>For (People)</th>
                                        <th>Price (In INR)</th>
                                        <th>View</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($property['property_item'] as $item)
                                    <tr>
                                        <td>{{$item->item_name}}</td>
                                        <td>{{$item->item_for}}</td>
                                        <td>{{$item->item_price}}</td>
                                        <td><a href="#{{$item->item_price}}">View</a></td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                    @endisset
                    <div class="col-lg-12 pl0 pl15-767">
                        <div class="listing_single_video">
                            <h4 class="mb30">video</h4>
                            <div class="property_video">
                                <div class="thumb">
                                    <img class="pro_img img-fluid w100"
                                        src="{{ asset('/web/themes/guido') }}/images/listing/lspv2.jpg"
                                        alt="ListingSingleVideo2.jpg">
                                    <div class="overlay_icon">
                                        <a class="video_popup_btn popup-youtube"
                                            href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span
                                                class="fa fa-play body-color"></span></a>
                                    </div>
                                </div><br><br>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-12 pl0 pl15-767">
                        <div class="single_listing_faq">
                            <h4 class="mb35">Frequently Asked Questions</h4>
                            <div class="faq_content mb40">
                                <div class="faq_according">
                                    <div class="accordion" id="accordionExample">
                                        <div class="card">
                                            <div class="card-header active" id="headingOne">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link" type="button" data-toggle="collapse"
                                                        data-target="#collapseOne" aria-expanded="true"
                                                        aria-controls="collapseOne">What is the Check in and check out
                                                        time?</button>
                                                </h5>
                                            </div>
                                            <div id="collapseOne" class="collapse show" aria-labelledby="headingOne"
                                                data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    <p>Dishes are loosely based on Jewish cooking from the Middle East
                                                        and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised
                                                        by its creator, Belgian chef Lucien Olivier, or many of his
                                                        antecedents. Instead, whole green beans, large chunks of carrot,
                                                        peas and potatoes were very lightly dressed with mayonnaise, and
                                                        all the better for it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingTwo">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseTwo"
                                                        aria-expanded="false" aria-controls="collapseTwo">How far is the
                                                        Hotel from airport?</button>
                                                </h5>
                                            </div>
                                            <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo"
                                                data-parent="#accordionExample">
                                                <div class="card-body">
                                                    <p>Dishes are loosely based on Jewish cooking from the Middle East
                                                        and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised
                                                        by its creator, Belgian chef Lucien Olivier, or many of his
                                                        antecedents. Instead, whole green beans, large chunks of carrot,
                                                        peas and potatoes were very lightly dressed with mayonnaise, and
                                                        all the better for it.</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="card">
                                            <div class="card-header" id="headingThree">
                                                <h5 class="mb-0">
                                                    <button class="btn btn-link collapsed" type="button"
                                                        data-toggle="collapse" data-target="#collapseThree"
                                                        aria-expanded="false" aria-controls="collapseThree">Do you have
                                                        cocktails on the bar?</button>
                                                </h5>
                                            </div>
                                            <div id="collapseThree" class="collapse" aria-labelledby="headingThree"
                                                data-parent="#accordionExample" style="">
                                                <div class="card-body">
                                                    <p>Dishes are loosely based on Jewish cooking from the Middle East
                                                        and Europe. Loosely, as a ‘Russian salad’ wouldn’t be recognised
                                                        by its creator, Belgian chef Lucien Olivier, or many of his
                                                        antecedents. Instead, whole green beans, large chunks of carrot,
                                                        peas and potatoes were very lightly dressed with mayonnaise, and
                                                        all the better for it.</p>
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
            <div class="col-lg-4 col-xl-4">
                <div class="listing_single_sidebar">
                    <div class="lss_contact_location ">
                        <h4 class="mb25">Location</h4>
                        <div class="sidebar_map mb30">
                            <div class="lss_map h200" id="map-canvas"></div>
                        </div>
                        <ul class="contact_list list-unstyled mb15">
                            <li class="df"><span class="flaticon-pin mr15"></span><a target="_blank"
                                    href="https://www.google.com/maps/@<?php echo $property->lat?>,<?php echo $property->long ?>,16z?hl=en-US">
                                    {{$property->address}}
                                    <br> <span class="tdu text-thm">Get Direction</span></a></li>
                        </ul>
                        <ul class="sidebar_social_icon mb0">
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{URL::full()}}"><i
                                        class="fa fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://twitter.com/share?url={{URL::full()}}"><i
                                        class="fa fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://api.whatsapp.com/send?text={{URL::full()}}"><i
                                        class="fa fa-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://www.linkedin.com/sharing/share-offsite/?{{URL::full()}}"><i
                                        class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar_contact_business_widget">
                    <h4 class="title mb25">Book Now</h4>
                    <form action="" method="post">
                        <ul class="business_contact mb0">
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>Name</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>Email:</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>PG Detials</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>Sharing</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>From Date</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>months</li>
                            <li><div class="form-group"><input type="text" class="form-control" required name="date_of_visit" value=""placeholder="Date" /></div>Price</li>
                        </ul>
                    </form>
                    </div>
                    <div class="sidebar_contact_business_widget">
                        <h4 class="title mb25">SCHEDULE A VISIT</h4>
                        <form action="{{route('propertyquerySubmit')}}" method="post">@csrf
                            <ul class="business_contact mb0">
                                <li>
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="date_of_visit" value=""
                                            placeholder="Date" />
                                            <input type="hidden" class="form-control" required name="property_id" value="{{$property->id}}"/>
                                            <input type="hidden" class="form-control" required name="partner_id" value="{{$property->partner_id}}"/>
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="text" class="form-control" required name="name"
                                            id="exampleInputName3" placeholder="Name">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="email" class="form-control" required name="email"
                                            id="exampleInputEmail" placeholder="Email">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <input type="number" class="form-control" required name="phone"
                                            id="exampleInputName4" placeholder="Phone">
                                    </div>
                                </li>
                                <li class="search_area">
                                    <div class="form-group">
                                        <textarea id="form_message" name="form_message" required name="messege"
                                            class="form-control required" rows="5" required="required"
                                            placeholder="Message"></textarea>
                                    </div>
                                </li>
                                {!! app('captcha')->display() !!}
                                <li>
                                    <div class="search_option_button">
                                        <button type="submit" class="btn btn-block btn-thm h55">Send Message</button>
                                    </div>
                                </li>
                            </ul>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Feature Properties -->
<section class="feature-property bgc-f4">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="main-title text-center">
                    <h2>Recently Added</h2>
                    <p>Discover some of the most popular listings in Toronto based on user reviews and ratings.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="popular_listing_slider1">
                    @foreach ($property['related_listing'] as $item)
                    <div class="item">
                        <div class="feat_property">
                            <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                <div id="demo{{$item->id}}" class="carousel slide" data-ride="carousel">
                                    <div class="carousel-inner">
                                        @foreach ($item['images'] as $itema => $slider)
                                        {{-- ----------------{{$itema}} --}}
                                        <div class="carousel-item {{$itema == 0 ? 'active' : '' }}"
                                            style="max-height: 200px !important">
                                            <img class="d-block w-100" src="{{Storage::url($slider['img_name'])}}"
                                                alt="{{$slider['img_name']}}">
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Left and right controls -->
                                    <a class="carousel-control-prev" href="#demo{{$item->id}}" data-slide="prev">
                                        <span class="carousel-control-prev-icon"></span>
                                    </a>
                                    <a class="carousel-control-next" href="#demo{{$item->id}}" data-slide="next">
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
                                            {{-- <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-phone pr5"></span>
                                                        {{$item['partnername']['0']->phone}}
                                    </a></li> --}}
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span>
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
                                    {{-- <ul class="fp_meta float-left mb0">
                                            <li class="list-inline-item"><a href="#"><img
                                                        src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg"
                                    alt="icon3.svg"></a></li>
                                    <li class="list-inline-item"><a href="#">Outdoor
                                            Activities</a></li>
                                    </ul> --}}
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
</section>
<input type="hidden" name="lat" id="lat" value="{{$property->lat}}">
<input type="hidden" name="lan" id="lan" value="{{$property->long}}">
@endsection
@section('extrajs')
<script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
<script type="text/javascript">
    $(function () {
        $('input[name="date_of_visit"]').daterangepicker({
            autoUpdateInput: false,
            locale: {
                cancelLabel: 'Clear'
            }
        });

        $('input[name="date_of_visit"]').on('apply.daterangepicker', function (ev, picker) {
            $(this).val(picker.startDate.format('MM/DD/YYYY') + ' - ' + picker.endDate.format(
                'MM/DD/YYYY'));
        });

        $('input[name="date_of_visit"]').on('cancel.daterangepicker', function (ev, picker) {
            $(this).val('');
        });

    });

</script>
<script src="https://apis.mapmyindia.com/advancedmaps/api/<?php echo $property['latestmapapi']->access_token ?>/map_sdk"
    defer async>
</script>
<script type="text/javascript">
    //=====================================MAP-MY-INDIA=====================
    var lng = document.getElementById('lan').value
    var lat = document.getElementById('lat').value
    var url_result;
    var marker;
    /*put your REST API URL with key here**/
    var rev_geocode_api_url =
        "https://apis.mapmyindia.com/advancedmaps/v1/<?php echo $property['latestmapapi']->access_token ?>/rev_geocode?";
    window.onload = function () {
        document.getElementById('lat').value = lat;
        document.getElementById('lan').value = lng;
        var centre = [lat, lng];
        map = new MapmyIndia.Map('map-canvas', {
            center: centre,
            zoomControl: true,
            // hybrid: true,
            // layer:Indic,
            zoom: 15,
        });
        /*1.create a MapmyIndia Map by simply calling new MapmyIndia.Map() and passsing it at the minimum div object, all others are optional...
        2.all leaflet mapping functions can be called simply on the L object
        3.MapmyIndia may extend and in future modify the customised/forked Leaflet object to enhance mapping functionality for developers, which will be clearly documented in the MapmyIndia API documentation section.*/
        marker = new MapmyIndia.Marker({
            map: map,
            position: centre,
            icon: 'https://maps.mapmyindia.com/images/2.png',
            draggable: false,
        });
        map.setCenter(centre);
        map.setZoom(15);
        // marker = L.marker(centre, {draggable: 'true'}).addTo(map);/*add marker at center position*/
        var region = 'ind';
        if (region != '') {
            region = "&region=" + region;
        }
        // var rev_geocode_api_url_with_param = rev_geocode_api_url + "lng=" + lng + "&lat=" + lat + region;
        // getUrlResult(rev_geocode_api_url_with_param); /***get revgeocode result corresponding to the position***/
        // show_info_window(url_result, lng, lat);
    };

</script>
@endisset
@empty($property)
@include('frontend.layouts.404-block')
@endempty
@endsection
