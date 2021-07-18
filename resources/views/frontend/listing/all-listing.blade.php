@extends('frontend.listing.layout.app')
@section('content')
<section class="our-listing pb30-991">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <div class="listing_sidebar dn db-lg">
                    <div class="sidebar_content_details style3">
                        <!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
                        <div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
                            <div class="sidebar_advanced_search_widget">
                                <h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right"
                                        href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a>
                                </h4>
                                <ul class="sasw_list style2 mb0">
                                    {{-- <li class="search_area">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="exampleInputName1"
                                                placeholder="What are you looking for">
                                        </div>
                                    </li> --}}
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option value="">All Categories</option>
                                                    <option value="Automotive">Automotive</option>
                                                    <option value="Beautu&Spa">Beautu & Spa</option>
                                                    <option value="Hotels">Hotels</option>
                                                    <option value="Istanbul">Outdoor Activities</option>
                                                    <option value="Restaurant">Restaurant</option>
                                                    <option value="Shopping">Shopping</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select class="selectpicker w100 show-tick">
                                                    <option value="Location">Location</option>
                                                    <option value="NewYork">New York</option>
                                                    <option value="London">London</option>
                                                    <option value="Paris">Paris</option>
                                                    <option value="Istanbul">Istanbul</option>
                                                    <option value="LogAngeles">Log Angeles</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="sidebar_range_slider mb30 mt70">
                                            <input class="range-example-km mb20" value="50" type="text">
                                            <P class="mt20">Radius around selected destination</P>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="small_dropdown2">
                                            <div id="prncgs2" class="btn dd_btn">
                                                <span>Price</span>
                                                <label for="exampleInputEmail2"><span
                                                        class="fa fa-angle-down"></span></label>
                                            </div>
                                            <div class="dd_content2">
                                                <div class="pricing_acontent">
                                                    <input class="mt30" data-addui='slider' data-min='0' data-max='1000'
                                                        data-formatter='usd' data-fontsize='14' data-step='0.05'
                                                        data-range='true' value='150,692'>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="ui_kit_checkbox sidebar_tag">
                                            <h4 class="title">Tags</h4>
                                            <div class="wrapper">
                                                <ul>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckCredit3">
                                                            <label class="custom-control-label"
                                                                for="customCheckCredit3">Accepts Credit Cards</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckSmoking3">
                                                            <label class="custom-control-label"
                                                                for="customCheckSmoking3">Smoking Allowed</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckBikeP3">
                                                            <label class="custom-control-label"
                                                                for="customCheckBikeP3">Bike Parking</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckStreet3">
                                                            <label class="custom-control-label"
                                                                for="customCheckStreet3">Street Parking</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckWireless3">
                                                            <label class="custom-control-label"
                                                                for="customCheckWireless3">Wireless Internet</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckAlco3">
                                                            <label class="custom-control-label"
                                                                for="customCheckAlco3">Alcohol</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckPet3">
                                                            <label class="custom-control-label"
                                                                for="customCheckPet3">Pet Friendly</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckCredit4">
                                                            <label class="custom-control-label"
                                                                for="customCheckCredit4">Accepts Credit Cards</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckSmoking4">
                                                            <label class="custom-control-label"
                                                                for="customCheckSmoking4">Smoking Allowed</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckBikeP4">
                                                            <label class="custom-control-label"
                                                                for="customCheckBikeP4">Bike Parking</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckStreet4">
                                                            <label class="custom-control-label"
                                                                for="customCheckStreet4">Street Parking</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckWireless4">
                                                            <label class="custom-control-label"
                                                                for="customCheckWireless4">Wireless Internet</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckAlco4">
                                                            <label class="custom-control-label"
                                                                for="customCheckAlco4">Alcohol</label>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <div class="custom-control custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input"
                                                                id="customCheckPet4">
                                                            <label class="custom-control-label"
                                                                for="customCheckPet4">Pet Friendly</label>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_button text-center mt25">
                                            <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                            <a class="tdu fz14" href="#">Reset Filter</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumb_content style2 mb0-991">
                    <h2 class="breadcrumb_title">Listing</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Listing</li>
                    </ol>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="dn db-lg mt30 mb0 tac-767">
                    <div id="main2">
                        <span id="open2" class="fa fa-filter filter_open_btn style2"> Show Filter</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <div class="sidebar_listing_grid1 dn-lg bgc-f4">
                    <div class="sidebar_listing_list">
                        <div class="sidebar_advanced_search_widget">
                            <ul class="sasw_list mb0">
                                <li>
                                    <div class="search_option_two">
                                        <div class="sidebar_select_options">
                                            <select class="selectpicker w100 show-tick">
                                                <option value="">All Categories</option>
                                                <option value="Automotive">Automotive</option>
                                                <option value="Beautu&Spa">Beautu & Spa</option>
                                                <option value="Hotels">Hotels</option>
                                                <option value="Istanbul">Outdoor Activities</option>
                                                <option value="Restaurant">Restaurant</option>
                                                <option value="Shopping">Shopping</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_two">
                                        <div class="sidebar_select_options">
                                            <select class="selectpicker w100 show-tick">
                                                <option value="Location">Location</option>
                                                <option value="NewYork">New York</option>
                                                <option value="London">London</option>
                                                <option value="Paris">Paris</option>
                                                <option value="Istanbul">Istanbul</option>
                                                <option value="LogAngeles">Log Angeles</option>
                                            </select>
                                        </div>
                                    </div>
                                </li>
                                {{-- <li>
                                    <div class="sidebar_range_slider mb30 mt70">
                                        <input class="range-example-km mb20" value="50" type="text">
                                        <P class="mt20">Radius around selected destination</P>
                                    </div>
                                </li> --}}
                                <li>
                                    <div class="small_dropdown2">
                                        <div id="prncgs" class="btn dd_btn">
                                            <span>Price</span>
                                            <label for="exampleInputEmail2"><span
                                                    class="fa fa-angle-down"></span></label>
                                        </div>
                                        <div class="dd_content2">
                                            <div class="pricing_acontent">
                                                <input class="mt30" data-addui='slider' data-min='0' data-max='1000'
                                                    data-formatter='usd' data-fontsize='14' data-step='0.05'
                                                    data-range='true' value='150,692'>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="ui_kit_checkbox sidebar_tag">
                                        <h4 class="title">Amenities</h4>
                                        <div class="wrapper">
                                            <ul>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckCredit">
                                                        <label class="custom-control-label"
                                                            for="customCheckCredit">Accepts Credit Cards</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckSmoking">
                                                        <label class="custom-control-label"
                                                            for="customCheckSmoking">Smoking Allowed</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckBikeP">
                                                        <label class="custom-control-label" for="customCheckBikeP">Bike
                                                            Parking</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckStreet">
                                                        <label class="custom-control-label"
                                                            for="customCheckStreet">Street Parking</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckWireless">
                                                        <label class="custom-control-label"
                                                            for="customCheckWireless">Wireless Internet</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckAlco">
                                                        <label class="custom-control-label"
                                                            for="customCheckAlco">Alcohol</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckPet">
                                                        <label class="custom-control-label" for="customCheckPet">Pet
                                                            Friendly</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckCredit2">
                                                        <label class="custom-control-label"
                                                            for="customCheckCredit2">Accepts Credit Cards</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckSmoking2">
                                                        <label class="custom-control-label"
                                                            for="customCheckSmoking2">Smoking Allowed</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckBikeP2">
                                                        <label class="custom-control-label" for="customCheckBikeP2">Bike
                                                            Parking</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckStreet2">
                                                        <label class="custom-control-label"
                                                            for="customCheckStreet2">Street Parking</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckWireless2">
                                                        <label class="custom-control-label"
                                                            for="customCheckWireless2">Wireless Internet</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckAlco2">
                                                        <label class="custom-control-label"
                                                            for="customCheckAlco2">Alcohol</label>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="custom-control custom-checkbox">
                                                        <input type="checkbox" class="custom-control-input"
                                                            id="customCheckPet2">
                                                        <label class="custom-control-label" for="customCheckPet2">Pet
                                                            Friendly</label>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <div class="search_option_button text-center mt25">
                                        <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                        <a class="tdu fz14" href="#">Reset Filter</a>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9">
                <div class="row">
                    <div class="listing_filter_row dif db-767">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                            <div class="left_area tac-xsd mb30-767">
                                <p class="mb0">Showing <span class="heading-color">1-8 of 10 results</span></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-8 col-lg-8 col-xl-7">
                            <div class="listing_list_style tac-767">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
        @foreach ($all_properties as $item)
        <div class="col-md-4 col-lg-4">
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
                                    <li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span>
                                            {{$item['partnername']['0']->phone}}</a></li>
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
                                <li class="list-inline-item text-center"><a
                                        href="{{route('siglelisting',['slug' => $item->slug])}}"><span
                                            class="flaticon-zoom"></span></a></li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
        {{-- <div class="col-lg-12">
            <div class="mbp_pagination mt10">
                <ul class="page_navigation">
                    <li class="page-item">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true"> <span
                                class="fa fa-angle-left"></span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">3 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item"><a class="page-link" href="#">...</a></li>
                    <li class="page-item"><a class="page-link" href="#">15</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#"><span class="fa fa-angle-right"></span></a>
                    </li>
                </ul>
            </div>
        </div> --}}
        {{-- {{ $all_properties->links() }} --}}
    </div>
    </div>
    </div>
    </div>
</section>
@endsection
