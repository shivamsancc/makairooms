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
                                    <form action="{{route('properyfilter')}}" method="get">
                                        <li>
                                            <div class="search_option_two">
                                                <div class="sidebar_select_options">
                                                    <select name="property_type" id="property_type"
                                                        class="selectpicker w100 show-tick">
                                                        <option value="">All Categories</option>
                                                        <option
                                                            <?= app('request')->input('property_type') == 'PG' ? ' selected="selected"' : '';?>
                                                            value="PG">PG</option>
                                                        <option
                                                            <?= app('request')->input('property_type') == 'FLAT' ? ' selected="selected"' : '';?>
                                                            value="FLAT">Flat</option>
                                                        <option
                                                            <?= app('request')->input('property_type') == 'ROOMS' ? ' selected="selected"' : '';?>
                                                            value="ROOMS">Room</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_two">
                                                <div class="sidebar_select_options">
                                                    <select name="gender" id="gender"
                                                        class="selectpicker w100 show-tick">
                                                        <option value="" selected>Select One</option>
                                                        <option value="male"
                                                            <?= app('request')->input('gender') == 'male' ? ' selected="selected"' : '';?>>
                                                            Male</option>
                                                        <option value="female"
                                                            <?= app('request')->input('gender')  == 'female' ? ' selected="selected"' : '';?>>
                                                            Female</option>
                                                        <option value="unisex"
                                                            <?= app('request')->input('gender')  == 'unisex' ? ' selected="selected"' : '';?>>
                                                            Unisex</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="ui_kit_checkbox sidebar_tag">
                                                <h4 class="title">Locality</h4>
                                                <div class="wrapper">
                                                    <div class="form-group">
                                                        <label for=""></label>
                                                        <select class="selectpicker w100 show-tick" name="localities"
                                                            id="localities">
                                                            <option value="" selected> Select </option>
                                                            @foreach ($localities as $item)
                                                            <option
                                                                <?= app('request')->input('localities')  == $item->id ? ' selected="selected"' : '';?>
                                                                value="{{$item->id}}">{{$item->name}}</option>
                                                            @endforeach
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="search_option_button text-center mt25">
                                                <button type="submit" class="btn btn-block btn-thm mb15">Search</button>
                                                <a class="tdu fz14" href="#">Reset Filter</a>
                                            </div>
                                        </li>
                                    </form>
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
                        <span id="open2" class="fa fa-filter filter_open_btn style2">&nbsp; Show Filter</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3">
                <form action="{{route('properyfilter')}}" method="get">
                    <div class="sidebar_listing_grid1 dn-lg bgc-f4">
                        <div class="sidebar_listing_list">
                            <div class="sidebar_advanced_search_widget">
                                <ul class="sasw_list mb0">
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select name="property_type" id="property_type"
                                                    class="selectpicker w100 show-tick">
                                                    <option value="">All Categories</option>
                                                    <option
                                                        <?= app('request')->input('property_type') == 'PG' ? ' selected="selected"' : '';?>
                                                        value="PG">PG</option>
                                                    <option
                                                        <?= app('request')->input('property_type') == 'FLAT' ? ' selected="selected"' : '';?>
                                                        value="FLAT">Flat</option>
                                                    <option
                                                        <?= app('request')->input('property_type') == 'ROOMS' ? ' selected="selected"' : '';?>
                                                        value="ROOMS">Room</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="search_option_two">
                                            <div class="sidebar_select_options">
                                                <select name="gender" id="gender" class="selectpicker w100 show-tick">
                                                    <option value="" selected>Select One</option>
                                                    <option value="male"
                                                        <?= app('request')->input('gender') == 'male' ? ' selected="selected"' : '';?>>
                                                        Male</option>
                                                    <option value="female"
                                                        <?= app('request')->input('gender')  == 'female' ? ' selected="selected"' : '';?>>
                                                        Female</option>
                                                    <option value="unisex"
                                                        <?= app('request')->input('gender')  == 'unisex' ? ' selected="selected"' : '';?>>
                                                        Unisex</option>
                                                </select>
                                            </div>
                                        </div>
                                    </li>
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
                                            <h4 class="title">Locality</h4>
                                            <div class="wrapper">
                                                <div class="form-group">
                                                    <label for=""></label>
                                                    <select class="selectpicker w100 show-tick" name="localities"
                                                        id="localities">
                                                        <option value="" selected> Select </option>
                                                        @foreach ($localities as $item)
                                                        <option
                                                            <?= app('request')->input('localities')  == $item->id ? ' selected="selected"' : '';?>
                                                            value="{{$item->id}}">{{$item->name}}</option>
                                                        @endforeach
                                                    </select>
                                                </div>
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
                </form>
            </div>
            <div class="col-xl-9">
                <div class="row">
                    <div class="listing_filter_row dif db-767">
                        <div class="col-sm-12 col-md-4 col-lg-4 col-xl-5">
                            <div class="left_area tac-xsd mb30-767">
                                {{-- <p class="mb0">Showing <span class="heading-color">1-8 of 10 results</span></p> --}}
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
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-phone pr5"></span>
                                                        {{$item->listingphone}}</a></li>
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
                                    <a href="{{route('siglelisting',['slug' => $item->slug])}}">
                                        <div class="fp_footer">
                                            {{-- <li class="list-inline-item text-center"><span
                                            class="flaticon-zoom"></span></li> --}}
                                        </div>
                                    </a>
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
