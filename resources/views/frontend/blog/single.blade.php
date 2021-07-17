@extends('frontend.listing.layout.app')
@isset($category)
@section('title',e($category->name))
@endisset
@empty($category)
@section('title','Blog Post')    
@endempty
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous"></head>
@section('content')
@isset($POST)
<section class="inner_page_breadcrumb style3" style="background-image:url({{Storage::url($POST->f_image)}})">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="blog_single_post_heading text-center">
                    <div class="contents">
                        <div class="bsph_tag bgc-white text-thm">{{$POST['category_name']}}</div>
                        <h2 class="text-white mb15">{{$POST->name}}</h2>
                        <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                        class="flaticon-avatar mr10"></span>{{$POST->user_name}}</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                        class="flaticon-date mr10"></span>{{$POST->created_at->format('d/m/Y')}}</a>
                            </li>
                        </ul>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Blog Single Post -->
<section class="blog_post_container pb70">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-9">
                @foreach ($POST->tags as $item)
                <button class="btn btn-outline-info">
                    <span class="fas fa-tag">&nbsp;{{$item->name}}</span>
                  </button>
                    {{-- <div class="btn btn-outline-primary">{{$POST->name}}</div> --}}
                @endforeach
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        {!!$POST->body!!}
                    </div>
                    <hr class="mt60">
                    <div class="mbp_pagination_tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_prev">
                                    <div class="detls">
                                        @isset( $POST['pre_record'])
                                        <a href="{{route('sigleblog',['slug' =>  $POST['pre_record']->slug])}}">
                                            <h5 class="text-thm"><span class="fa fa-angle-left mr5"></span> Previous
                                                Post </h5>
                                            <p>{{ $POST['pre_record']->name}}</p>
                                        </a>
                                        @endisset
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_next text-right">
                                    <div class="detls">
                                        @isset($POST['next_record'])
                                        <a href="{{route('sigleblog',['slug' => $POST['next_record']->slug])}}">
                                            <h5 class="text-thm">Next Post <span class="fa fa-angle-right ml5"></span>
                                            </h5>
                                            <p>{{$POST['next_record']->name}}</p>
                                        </a>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div id="disqus_thread"></div>
                </div>
            </div>
        </div>
    </div>
</section>
@endisset
@empty($category)   
    @include('frontend.layouts.404-block')    
@endempty
@endsection
@section('extrajs')
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    var disqus_config = function () {
        this.page.url = '{{URL::full()}}'; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier =
            '{{URL::full()}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://makairooms.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();

</script>
@endsection
