@extends('frontend.listing.layout.app')
@section('content')
    <!-- Listing Single Property -->
	<section class="listing-title-area pb50">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="listing_sidebar dn db-lg">
						<div class="sidebar_content_details style3">
							<!-- <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a> -->
							<div class="sidebar_listing_list style2 mobile_sytle_sidebar mb0">
								<div class="sidebar_advanced_search_widget">
									<h4 class="mb25">Advanced Search <a class="filter_closed_btn float-right" href="#"><small>Hide Filter</small> <span class="flaticon-close"></span></a></h4>
									<ul class="sasw_list style2 mb0">
										<li class="search_area">
										    <div class="form-group">
										    	<input type="text" class="form-control" id="exampleInputName1" placeholder="What are you looking for">
										    </div>
										</li>
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
											    	<label for="exampleInputEmail2"><span class="fa fa-angle-down"></span></label>
											    </div>
											  	<div class="dd_content2">
												    <div class="pricing_acontent">
														<input class="mt30" data-addui='slider' data-min='0' data-max='1000' data-formatter='usd' data-fontsize='14' data-step='0.05' data-range='true' value='150,692'>
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
																<input type="checkbox" class="custom-control-input" id="customCheckCredit3">
																<label class="custom-control-label" for="customCheckCredit3">Accepts Credit Cards</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckSmoking3">
																<label class="custom-control-label" for="customCheckSmoking3">Smoking Allowed</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckBikeP3">
																<label class="custom-control-label" for="customCheckBikeP3">Bike Parking</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckStreet3">
																<label class="custom-control-label" for="customCheckStreet3">Street Parking</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckWireless3">
																<label class="custom-control-label" for="customCheckWireless3">Wireless Internet</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckAlco3">
																<label class="custom-control-label" for="customCheckAlco3">Alcohol</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckPet3">
																<label class="custom-control-label" for="customCheckPet3">Pet Friendly</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckCredit4">
																<label class="custom-control-label" for="customCheckCredit4">Accepts Credit Cards</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckSmoking4">
																<label class="custom-control-label" for="customCheckSmoking4">Smoking Allowed</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckBikeP4">
																<label class="custom-control-label" for="customCheckBikeP4">Bike Parking</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckStreet4">
																<label class="custom-control-label" for="customCheckStreet4">Street Parking</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckWireless4">
																<label class="custom-control-label" for="customCheckWireless4">Wireless Internet</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckAlco4">
																<label class="custom-control-label" for="customCheckAlco4">Alcohol</label>
															</div>
									                	</li>
									                	<li>
															<div class="custom-control custom-checkbox">
																<input type="checkbox" class="custom-control-input" id="customCheckPet4">
																<label class="custom-control-label" for="customCheckPet4">Pet Friendly</label>
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
			<div class="row mb30">
				<div class="col-xl-7">
					<div class="single_property_title mt30-767">
						<div class="media">
							<img class="mr-3" src="{{ asset('/web/themes/guido') }}/images/team/agency2.png" alt="agency2.png">
							<div class="media-body mt20">
						    	<h2 class="mt-0">{{$property['0']->name}}</h2>
						    	<ul class="mb0 agency_profile_contact">
						    		<li class="list-inline-item"><a href="#"><span class="flaticon-phone"></span>&nbsp;{{$partnername['0']->phone}}</a></li>
						    		<li class="list-inline-item"><a href="#"><span class="flaticon-pin"></span>&nbsp;{{$distName}}</a></li>
						    		<li class="list-inline-item sspd_review">
						    			<ul class="mb0">
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item"><a href="#"><i class="fa fa-star"></i></a></li>
											<li class="list-inline-item">(5 reviews)</li>
										</ul>
						    		</li>
						    		<li class="list-inline-item"><a class="price_range" href="#">$$$$</a></li>
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
							<ul class="mb0">
								<li class="list-inline-item icon"><a href="#"><span class="flaticon-upload"></span></a></li>
								<li class="list-inline-item"><a href="#">Share</a></li>
								<li class="list-inline-item icon"><a href="#"><span class="flaticon-love"></span></a></li>
								<li class="list-inline-item"><a href="#">Save</a></li>
							</ul>
						</div>
						<div class="price mt25 float-right fn-lg">
							<a href="#" class="btn btn-thm spr_btn">Submit Reveiw</a>
						</div>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-7 col-lg-8">
					<div class="row">
						<div class="col-lg-12 pl0 pr0 pl15-767 pr15-767">
							<div class="spls_style_two mb30-767">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/1.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/1.jpg" alt="1.jpg"></a>
							</div>
						</div>
					</div>
				</div>
				<div class="col-md-5 col-lg-4">
					<div class="row">
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/2.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/2.jpg" alt="2.jpg"></a>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/3.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/3.jpg" alt="3.jpg"></a>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/4.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/4.jpg" alt="4.jpg"></a>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/5.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/5.jpg" alt="5.jpg"></a>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/6.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/6.jpg" alt="6.jpg"></a>
							</div>
						</div>
						<div class="col-sm-4 col-md-6 col-lg-6 pr5 pr15-767">
							<div class="spls_style_two mb10">
								<a class="popup-img" href="{{ asset('/web/themes/guido') }}/images/property/7.jpg"><img class="img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/property/7.jpg" alt="7.jpg"></a>
								<div class="overlay popup-img">
									<h3 class="title">+4</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
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
								<h4 class="mb30">Overview</h4>
						    	<p class="first-para mb25">{{$property['0']->about_property}}</p>
							</div>
						</div>
						<div class="col-lg-12">
							<div class="additional_details mb30">
								<div class="row">
									<div class="col-lg-12 pl0 pr0 pl15-767">
										<h4 class="mb30">Features</h4>
									</div>
									<div class="col-md-6 col-lg-6 col-xl-4 pl0 pr0 pl15-767">
										<div class="listing_feature_iconbox mb30">
											<div class="icon float-left mr10"><span class="flaticon-credit-card"></span></div>
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
						<div class="col-lg-12 pl0 pl15-767">
							<div class="listing_single_video">
								<h4 class="mb30">video</h4>
								<div class="property_video">
									<div class="thumb">
										<img class="pro_img img-fluid w100" src="{{ asset('/web/themes/guido') }}/images/listing/lspv3.jpg" alt="ListingSingleVideo3.jpg">
										<div class="overlay_icon">
											<a class="video_popup_btn popup-youtube" href="https://www.youtube.com/watch?v=oqNZOOWF8qM"><span class="fa fa-play body-color"></span></a>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pl0 pl15-767">
							<div class="custom_reivews mt30 mb30 row">
								<div class="col-lg-12">
									<h4 class="mb25">4.67 (14 reviews)</h4>
								</div>
								<div class="col-lg-2">
									<div class="title">Overall Rating</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line"></div>
										<div class="review_point">4.7</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Services</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line"></div>
										<div class="review_point">4.7</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Hospitality</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line style2"></div>
										<div class="review_point">4.9</div>
									</div>
								</div>
								<div class="col-lg-2">
									<div class="title">Pricing</div>
								</div>
								<div class="col-lg-4">
									<div class="review_content">
										<div class="review_line style2"></div>
										<div class="review_point">4.9</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-12 pl0 pl15-767">
							<div class="listing_single_reviews">
								<div class="product_single_content mb30">
									<div class="mbp_first media mb30">
										<img src="{{ asset('/web/themes/guido') }}/images/blog/reviewer1.png" class="mr-3" alt="reviewer1.png">
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
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/blog/bsp1.jpg" alt="bsp1.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/blog/bsp2.jpg" alt="bsp2.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/blog/bsp3.jpg" alt="bsp3.jpg"></a></li>
									    			<li class="list-inline-item mb10-lg"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/blog/bsp4.jpg" alt="bsp4.jpg"></a></li>
									    		</ul>
									    	</div>
										</div>
									</div>
									<div class="mbp_first media">
										<img src="{{ asset('/web/themes/guido') }}/images/blog/reviewer2.png" class="mr-3" alt="reviewer2.png">
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
								<li class="df"><span class="flaticon-pin mr15"></span><a href="#">
									{{$property['0']->address}} 
									<br> <span class="tdu text-thm">Get Direction</span></a></li>
								<li><span class="flaticon-phone mr15"></span><a href="#">{{$partnername['0']->phone}}</a></li>
								<li><span class="flaticon-email mr15"></span><a href="#">{{$partnername['0']->mail}}</a></li>
								{{-- <li><span class="flaticon-link mr15"></span><a href="#">www.guido.com</a></li> --}}
							</ul>
							<ul class="sidebar_social_icon mb0">
								<li class="list-inline-item"><a href="#"><i class="fa fa-facebook"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-twitter"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-instagram"></i></a></li>
								<li class="list-inline-item"><a href="#"><i class="fa fa-linkedin"></i></a></li>
							</ul>
						</div>
						<div class="sidebar_category_widget">
							<h4 class="title mb30">Categories</h4>
							<ul class="mb0">
								<li class="mb25"><a href="#"><img class="mr5" src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg" alt="icon3.svg"> Outdoor Activity</a></li>
								<li class="mb25"><a href="#"><img class="mr5" src="{{ asset('/web/themes/guido') }}/images/icons/icon4.svg" alt="icon4.svg"> Restourant</a></li>
								<li><a href="#"><img class="mr5" src="{{ asset('/web/themes/guido') }}/images/icons/icon5.svg" alt="icon5.svg"> Hotels</a></li>
							</ul>
						</div>
						<div class="sidebar_pricing_widget">
							<h4 class="title mb20">Price Range</h4>
							<ul class="mb0">
								<li><a href="#">Price: <span class="float-right heading-color">₹{{$property['0']->price_range1}} -- ₹{{$property['0']->price_range2}}</span></a></li>
								<li><a href="#">Own or work here? <span class="float-right text-thm">Claim Now!</span></a></li>
							</ul>
						</div>
						<div class="sidebar_author_widget">
							<h4 class="title mb25">Property Manger</h4>
							<div class="media">
								<img class="mr-3" src="{{ asset('/web/themes/guido') }}/images/team/author.png" alt="author.png">
								<div class="media-body">
							    	<h5 class="mt15 mb0">{{$partnername['0']->name}}</h5>
							    	<p class="mb0">{{$partnername['0']->phone}}</p>
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
								    	<input type="number" class="form-control" id="exampleInputName4" placeholder="Phone">
								    </div>
								</li>
								<li class="search_area">
		                            <div class="form-group">
		                                <textarea id="form_message" name="form_message" class="form-control required" rows="5" required="required" placeholder="Message"></textarea>
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
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra1.jpg" alt="ra1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="tag2 mb0">
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent1.svg" alt="agent1.svg"></a></div>
										<h4>Adventure High Ropes</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg" alt="icon3.svg"></a></li>
											<li class="list-inline-item"><a href="#">Outdoor Activities</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra2.jpg" alt="ra2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent2.svg" alt="agent2.svg"></a></div>
										<h4>Amrutha Lounge</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon4.svg" alt="icon4.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra3.jpg" alt="ra3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent3.svg" alt="agent3.svg"></a></div>
										<h4>The Waldorf Hilton</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon5.svg" alt="icon5.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra1.jpg" alt="ra1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="tag2 mb0">
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent1.svg" alt="agent1.svg"></a></div>
										<h4>Adventure High Ropes</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg" alt="icon3.svg"></a></li>
											<li class="list-inline-item"><a href="#">Outdoor Activities</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra2.jpg" alt="ra2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent2.svg" alt="agent2.svg"></a></div>
										<h4>Amrutha Lounge</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon4.svg" alt="icon4.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra3.jpg" alt="ra3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent3.svg" alt="agent3.svg"></a></div>
										<h4>The Waldorf Hilton</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon5.svg" alt="icon5.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra1.jpg" alt="ra1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="tag2 mb0">
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent1.svg" alt="agent1.svg"></a></div>
										<h4>Adventure High Ropes</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg" alt="icon3.svg"></a></li>
											<li class="list-inline-item"><a href="#">Outdoor Activities</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra2.jpg" alt="ra2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent2.svg" alt="agent2.svg"></a></div>
										<h4>Amrutha Lounge</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon4.svg" alt="icon4.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra3.jpg" alt="ra3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent3.svg" alt="agent3.svg"></a></div>
										<h4>The Waldorf Hilton</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon5.svg" alt="icon5.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra1.jpg" alt="ra1.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="tag2 mb0">
											<li class="list-inline-item"><a href="#">Featured</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent1.svg" alt="agent1.svg"></a></div>
										<h4>Adventure High Ropes</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon3.svg" alt="icon3.svg"></a></li>
											<li class="list-inline-item"><a href="#">Outdoor Activities</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra2.jpg" alt="ra2.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent2.svg" alt="agent2.svg"></a></div>
										<h4>{{$property['0']->name}}</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon4.svg" alt="icon4.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="feat_property">
								<div class="thumb">
									<img class="img-whp" src="{{ asset('/web/themes/guido') }}/images/listing/ra3.jpg" alt="ra3.jpg">
									<div class="thmb_cntnt">
										<ul class="tag mb0">
											<li class="list-inline-item"><a href="#">$$$$</a></li>
											<li class="list-inline-item"><a href="#">Open</a></li>
										</ul>
										<ul class="listing_reviews">
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white" href="#"><span class="fa fa-star"></span></a></li>
											<li class="list-inline-item"><a class="text-white total_review" href="#">(5 Review)</a></li>
										</ul>
									</div>
								</div>
								<div class="details">
									<div class="tc_content">
										<div class="badge_icon"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/agent3.svg" alt="agent3.svg"></a></div>
										<h4>The Waldorf Hilton</h4>
										<p>But I must explain to you how all this mistaken idea...</p>
										<ul class="prop_details mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-phone pr5"></span> +61-8181-123</a></li>
											<li class="list-inline-item"><a href="#"><span class="flaticon-pin pr5"></span> New York</a></li>
										</ul>
									</div>
									<div class="fp_footer">
										<ul class="fp_meta float-left mb0">
											<li class="list-inline-item"><a href="#"><img src="{{ asset('/web/themes/guido') }}/images/icons/icon5.svg" alt="icon5.svg"></a></li>
											<li class="list-inline-item"><a href="#">Restaurant</a></li>
										</ul>
										<ul class="fp_meta float-right mb0">
											<li class="list-inline-item"><a href="#"><span class="flaticon-zoom"></span></a></li>
											<li class="list-inline-item"><a class="icon" href="#"><span class="flaticon-love"></span></a></li>
										</ul>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<input type="hidden" name="lat" id="lat" value="{{$property['0']->lat}}">
	<input type="hidden" name="lan" id="lan" value="{{$property['0']->long}}">
@endsection
@section('extrajs')
<script src="{{ asset('/web/themes/guido') }}/js/isotop.js"></script>
<script src="{{ asset('/web/themes/guido') }}/js/wow.min.js"></script>
{{-- <script src="{{ asset('/web/themes/guido') }}/js/google-map-api.js"></script>
<script src="{{ asset('/web/themes/guido') }}/js/googlemaps1.js"></script> --}}
<script src="https://apis.mapmyindia.com/advancedmaps/api/f682c03c-ed96-49a8-9ac8-230693e8e228/map_sdk" defer async>
</script>
<script type="text/javascript">
  //=====================================MAP-MY-INDIA=====================
  var lng = document.getElementById('lan').value
  var lat = document.getElementById('lat').value
  var url_result;
  var marker;
  var rev_geocode_api_url =
    "https://apis.mapmyindia.com/advancedmaps/v1/f682c03c-ed96-49a8-9ac8-230693e8e228/rev_geocode?";
  window.onload = function () {
    document.getElementById('lat').value = lat;
    document.getElementById('lan').value = lng;
    var centre = [lat, lng];
    map = new MapmyIndia.Map('map-canvas', {
      center: centre,
      zoomControl: true,
      zoom: 15,
    });
    marker = new MapmyIndia.Marker({
      map: map,
      position: centre,
      icon: 'https://maps.mapmyindia.com/images/2.png',
      draggable: false,
    });
    map.setCenter(centre);
    map.setZoom(15);
    var region = 'ind';
    if (region != '') {
      region = "&region=" + region;
    }
  };
</script>
@endsection