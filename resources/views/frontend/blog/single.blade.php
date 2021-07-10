@extends('frontend.listing.layout.app')
@section('content')
<!-- Inner Page Breadcrumb -->
<section class="inner_page_breadcrumb style3">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-8">
                <div class="blog_single_post_heading text-center">
                    <div class="contents">
                        <div class="bsph_tag bgc-white text-thm">{{$POST['0']->category_name}}</div>
                        <h2 class="text-white mb15">{{$POST['0']->name}}</h2>
                        <ul class="mb0">
                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                        class="flaticon-avatar mr10"></span>{{$POST['0']->user_name}}</a></li>
                            <li class="list-inline-item"><a class="text-white" href="#"><span
                                        class="flaticon-date mr10"></span>{{$POST['0']->created_at->format('d/m/Y')}}</a>
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
                <div class="main_blog_post_content">
                    <div class="mbp_thumb_post">
                        {!!$POST['0']->body!!}
                    </div>
                    <hr class="mt60">
                    <div class="mbp_pagination_tab">
                        <div class="row">
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_prev">
                                    <div class="detls">
                                        @isset($pre_record)
                                        <a href="{{route('sigleblog',['slug' => $pre_record->slug])}}">
                                        <h5 class="text-thm"><span class="fa fa-angle-left mr5"></span> Previous Post </h5>
                                            <p>{{$pre_record->name}}</p>
                                        </a>
                                        @endisset
                                        </h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-6">
                                <div class="pag_next text-right">
                                    <div class="detls">
                                        @isset($next_record)
                                        <a href="{{route('sigleblog',['slug' => $next_record->slug])}}">
                                            <h5 class="text-thm">Next Post <span class="fa fa-angle-right ml5"></span>
                                            </h5>
                                            <p>{{$next_record->name}}</p>
                                        </a>
                                        @endisset
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    {{-- <div class="product_single_content mb50">
							<div class="mbp_pagination_comments">
								<div class="total_review">
									<h4>14 Reviews</h4>
								</div>
								<div class="mbp_first media">
									<img src="images/blog/reviewer1.png" class="mr-3" alt="reviewer1.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Jane Cooper</h4>
								    	<div class="sspd_postdate fz14 mb20">April 6, 2021 at 3:21 AM
											<div class="sspd_review pull-right">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item">(5 reviews)</li>
												</ul>
											</div>
								    	</div>
								    	<p class="fz14 mt10">Every single thing we tried with John was delicious! Found some awesome places we would definitely go back to on our trip. John was also super friendly and passionate about Beşiktaş and Istanbul. we had an awesome time!</p>
								    	<div class="thumb-list mt30">
								    		<ul>
								    			<li class="list-inline-item"><a href="#"><img src="images/blog/bsp1.jpg" alt="bsp1.jpg"></a></li>
								    			<li class="list-inline-item"><a href="#"><img src="images/blog/bsp2.jpg" alt="bsp2.jpg"></a></li>
								    			<li class="list-inline-item"><a href="#"><img src="images/blog/bsp3.jpg" alt="bsp3.jpg"></a></li>
								    			<li class="list-inline-item"><a href="#"><img src="images/blog/bsp4.jpg" alt="bsp4.jpg"></a></li>
								    		</ul>
								    	</div>
									</div>
								</div>
								<div class="mbp_first media">
									<img src="images/blog/reviewer2.png" class="mr-3" alt="reviewer2.png">
									<div class="media-body">
								    	<h4 class="sub_title mt-0">Bessie Cooper</h4>
								    	<div class="sspd_postdate fz14 mb20">April 6, 2021 at 3:21 AM
											<div class="sspd_review pull-right">
												<ul class="mb0 pl15">
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
													<li class="list-inline-item">(5 reviews)</li>
												</ul>
											</div>
								    	</div>
								    	<p class="fz14 mt10">I enjoyed the tour. John is very friendly, observant, and funny. He cares for the guests and really works hard on providing a good experience by understanding each person's needs.…</p>
									</div>
								</div>
							</div>
						</div> --}}
                    <div id="disqus_thread"></div>

                    {{-- <div class="bsp_reveiw_wrt">
							<h4>Add a Review</h4>
							<form class="comments_form">
								<div class="form-group">
							    	<input type="text" class="form-control" id="exampleInputName1" placeholder="Name">
								</div>
								<div class="form-group">
							    	<input type="email" class="form-control" id="exampleInputEmail14" placeholder="Email">
								</div>
								<div class="form-group">
								    <textarea class="form-control" id="exampleFormControlTextarea1" rows="6" placeholder="Message"></textarea>
								</div>
								<button type="submit" class="btn btn-thm">Send Your Review</button>
							</form>
						</div> --}}
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
@section('extrajs')
<script>
    /**
     *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
     *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables    */
    var disqus_config = function () {
        this.page.url = '{{URL::full()}}'; // Replace PAGE_URL with your page's canonical URL variable
        this.page.identifier = '{{URL::full()}}'; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
    };
    (function () { // DON'T EDIT BELOW THIS LINE
        var d = document,
            s = d.createElement('script');
        s.src = 'https://makairooms.disqus.com/embed.js';
        s.setAttribute('data-timestamp', +new Date());
        (d.head || d.body).appendChild(s);
    })();

</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
        Disqus.</a></noscript>
@endsection
