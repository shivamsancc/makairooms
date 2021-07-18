@extends('frontend.listing.layout.app')
@isset($property)
@section('title',e($property->name))
@endisset
@empty($property)
@section('title','404 Not Foud')
@endempty
@section('content')
@section('excss')
<link href="{{ asset('admin/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@isset($property)
    <!-- Listing Single Property -->
<section class="listing-title-area pb50">
    <div class="container">
        <div class="row mb30">
            <div class="col-xl-7">
                <div class="single_property_title mt30-767">
                    <div class="media">
                        <img class="mr-3" src="{{ asset('/web/themes/guido') }}/images/team/agency2.png"
                            alt="agency2.png">
                        <div class="media-body mt20">
                            <h2 class="mt-0">{{$property->name}}</h2>
                            <ul class="mb0 agency_profile_contact">
                                {{-- <li class="list-inline-item"><a href="tel:{{$property['partnername']->phone}}"><span
                                            class="flaticon-phone"></span>&nbsp;{{$property['partnername']->phone}}</a> --}}
                                </li>
                                <li class="list-inline-item"><a href="#"><span
                                            class="flaticon-pin"></span>&nbsp;{{$property['distName']}}</a></li>
                                            
                                <li class="list-inline-item"><span class="flaticon-pin"></span>
                                    Price: <span class="float-right heading-color">₹{{$property->price_range1}}--&nbsp;₹{{$property->price_range2}}
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="dn db-lg">
                    <div id="main2">
                        <span id="open2" class="fa fa-filter filter_open_btn single_proprety_v3"> Show Filter</span>
                    </div>
                </div>
            </div>
            <div class="col-xl-5">
                <div class="single_property_social_share">
                    <div class="spss style2 mt30 float-left fn-lg">
                    </div>
                    <div class="price mt25 float-right fn-lg">
                    </div>
                </div>
            </div>
        </div>
        <div class="row">

            @foreach ($property['images'] as $item)
            <div class="col-md-5 col-lg-4">
                <div class="col-md-7 col-lg-8">
                    <div class="row">
                        <div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
                            <div class="spls_style_two mb30-767">
                                <a class="popup-img" href="{{Storage::url($item->img_name)}}">
                                    <img class="img-fluid w100" src="{{Storage::url($item->img_name)}}"
                                        alt="{{$item->alt_name}}"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<!-- Agent Single Grid View -->
<section class="our-agent-single pt0 pb30-991">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-8">
                <div class="row">
                    <div class="col-lg-12 pl0 pr0 pl15-767">
                        <div class="listing_single_description mb60">
                            <h4 class="mb30">Overview About Property</h4>
                            <p class="first-para mb25">{{$property->about_property}}</p>
                        </div>
                    </div>
                    @isset($property['property_features'])
                    <div class="col-lg-12 pl0 pr0 pl15-767">
                        <div class="listing_single_description mb60">
                            <h4 class="mb30">Property Features</h4>
                            @foreach ($property['property_features'] as $item)
                                <i class="{{$item->f_icon}} fa-2x">&nbsp;<br>{{$item->f_name}}</i>&nbsp;
                            @endforeach
                        </div>
                    </div>  
                    @endisset
                    @if(isset($property->youtube_link))
                    <div class="col-lg-12 pl0 pl15-767">
                        <div class="listing_single_video">
                            <h4 class="mb30">video</h4>
                            <div class="property_video">
                                <div class="thumb">
                                    <img class="pro_img img-fluid w100"
                                        src="{{ asset('/web/themes/guido') }}/images/listing/lspv3.jpg"
                                        alt="ListingSingleVideo3.jpg">
                                    <div class="overlay_icon">
                                        <a class="video_popup_btn popup-youtube"
                                            href="{{$property->youtube_link}}"><span
                                                class="fa fa-play body-color"></span></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @else
                    @endif
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
                </div>
            </div>
            <div class="col-lg-4 col-xl-4">
                <div class="listing_single_sidebar">
                    <div class="lss_contact_location ">
                        <ul class="sidebar_social_icon mb0">
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://www.facebook.com/sharer.php?u={{URL::full()}}"><i
                                        class="fab fa-facebook"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://twitter.com/share?url={{URL::full()}}"><i
                                        class="fab fa-twitter"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://api.whatsapp.com/send?text={{URL::full()}}"><i
                                        class="fab fa-whatsapp"></i></a></li>
                            <li class="list-inline-item"><a target="_blank"
                                    href="https://www.linkedin.com/sharing/share-offsite/?{{URL::full()}}"><i
                                        class="fab fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <div class="sidebar_pricing_widget">
                        <h4 class="title mb20">Price Range</h4>
                        <ul class="mb0">
                            <li><a href="#">Price: <span class="float-right heading-color">₹{{$property->price_range1}}
                                        --
                                        ₹{{$property->price_range2}}</span></a></li>
                            <li><a href="#">Own or work here? <span class="float-right text-thm">Claim Now!</span></a>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar_author_widget">
                        <h4 class="title mb25">Property Manger</h4>
                        <div class="media">
                            <img class="mr-3" src="{{ asset('/web/themes/guido') }}/images/team/author.png"
                                alt="author.png">
                            <div class="media-body">
                                <h5 class="mt15 mb0">{{$property['partnername']->name}}</h5>
                                <p class="mb0">{{$property['partnername']->phone}}</p>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar_contact_business_widget">
                        <h4 class="title mb25">Contact Business</h4>
                        <ul class="business_contact mb0">
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="text" class="form-control" id="exampleInputName3" placeholder="Name">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="email" class="form-control" id="exampleInputEmail" placeholder="Email">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <input type="number" class="form-control" id="exampleInputName4"
                                        placeholder="Phone">
                                </div>
                            </li>
                            <li class="search_area">
                                <div class="form-group">
                                    <textarea id="form_message" name="form_message" class="form-control required"
                                        rows="5" required="required" placeholder="Message"></textarea>
                                </div>
                            </li>
                            <li>
                                <div class="search_option_button">
                                    <button type="submit" class="btn btn-block btn-thm h55">Send Message</button>
                                </div>
                            </li>
                        </ul>
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
                                                    {{$item['partnername']['0']->phone}}</a></li> --}}
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
<script src="{{ asset('/web/themes/guido') }}/js/isotop.js"></script>
<script src="{{ asset('/web/themes/guido') }}/js/wow.min.js"></script>
@endisset
@empty($property)
    @include('frontend.layouts.404-block')
@endempty
@endsection
