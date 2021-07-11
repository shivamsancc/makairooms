@extends('frontend.listing.layout.app')
@section('content')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style2">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="breadcrumb_content">
                    <h2 class="breadcrumb_title">Blog</h2>
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="{{route('homepage')}}">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Blog</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Blog Post Content -->
<section class="blog_post_container">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="main_blog_post_content">
                    @foreach ($all_POST as $item)
                    <a href="{{route('sigleblog',['slug' => $item->slug])}}">
                        <div class="for_blog list-type feat_property">
                            <div class="thumb w100 pb10">
                                <img class="img-whp" src="{{Storage::url($item['f_image'])}}" alt="{{$item->name}}">
                                <div class="tag bgc-thm"><a class="text-white" href="#">{{$item->category_name}}</a>
                                </div>
                            </div>
                            <a href="{{route('sigleblog',['slug' => $item->slug])}}">
                                <div class="details pb5">
                                    <div class="tc_content pt15">
                                        <div class="bp_meta mb20">
                                            <ul>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-avatar mr10"></span>{{$item->user_name}}</a>
                                                </li>
                                                <li class="list-inline-item"><a href="#"><span
                                                            class="flaticon-date mr10"></span>{{$item->created_at->format('d/m/Y')}}</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <h4 class="mt15 mb20">{{$item->name}}</h4>
                                        <p class="mb10">{!! Str::limit($item->body, 121) !!}</p>
                                        <a class="tdu text-thm"
                                            href="{{route('sigleblog',['slug' => $item->slug])}}">Read More</a>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </a>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-12">
                            {{-- {{ $all_POST->links() }} --}}
                            {{ $all_POST->onEachSide(6)->links() }}


                            {{-- <div class="mbp_pagination mt30">
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
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>



            <div class="col-lg-4 col-xl-4">
                <div class="sidebar_search_widget">
                    <div class="blog_search_widget">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="To search type and hit enter"
                                aria-label="Recipient's username">
                        </div>
                    </div>
                </div>
                <div class="terms_condition_widget">
                    <h4 class="title">Categories Property</h4>
                    <div class="widget_list">
                        <ul class="list_details order_list list-style-type-bullet">
                            @foreach ($allcategory as $item)
                            <li><a href="#">{{$item->name}}</a></li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="sidebar_feature_listing">
                    <h4 class="title">Top Article</h4>
                    @foreach ($all_POST as $item)
                    <div class="media mb0">
                        <img class="align-self-start mr-3" style="max-height: 100px; max-width:100px;" src="{{Storage::url($item['f_image'])}}" alt="{{$item->name}}">
                        <div class="media-body">
                            <h5 class="mt-0 post_title">{{$item->name}}</h5>
                            <a href="#">{{$item->created_at->format('d/m/Y')}}</a>
                        </div>
                    </div><br>
                    @endforeach
                </div>
                <div class="blog_tag_widget">
                    <h4 class="title">Tags</h4>
                    <ul class="tag_list">
                        @foreach ($tags as $item)
                        <li class="list-inline-item"><a href="#">{{$item->name}}</a></li>                           
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Our Footer -->
@endsection
@section('extrajs')
@endsection
