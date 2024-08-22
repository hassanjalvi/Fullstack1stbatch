
@section('title', 'collection')
@extends('Frontend.layots.main')
@section('main-container')

		<section class="mobile-menu-inner mobile-menu-inner-two">
			<div class="mobile_accor_togo">
				<div class="mobile_accor_logo">
					<a href="index-2.html">
				<img src="assets/img/hm-two-logo.png" class="svg" alt="">
			</a>
				</div>
				<div class="close-menu">
					<span></span>
				</div>
			</div>
			<nav id="accordian">
				<ul class="accordion-menu">
					<li class="current_page_item">
						<a href="index-2.html" class="dropdownlink">Home</a>
						<ul class="submenuItems">
							<li><i class="flaticon-right-arrow-angle"></i><a href="index-2.html">Home One</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="index2.html">Home Two</a></li>
						</ul>
					</li>
					<li>
						<a href="supplement.html">Supplement</a>
					</li>
					<li>
						<a href="feature.html">Feature</a>
					</li>
					<li>
						<a href="collection.html" class="dropdownlink">Productlist</a>
						<ul class="submenuItems">
							<li><i class="flaticon-right-arrow-angle"></i><a href="collection.html">Productlist</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="collection-all.html">Product Sidebar</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="product-detail.html">Product Detail</a></li>
						</ul>
					</li>
					<li>
						<a href="ingredient.html">Ingredient</a>
					</li>
					<li>
						<a href="blog.html" class="dropdownlink">blog</a>
						<ul class="submenuItems">
							<li><i class="flaticon-right-arrow-angle"></i><a href="blog.html"> Blog</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="blog-details.html"> Blog details</a></li>
						</ul>
					</li>
					<li>
						<a href="contact.html" class="dropdownlink">Contact</a>
						<ul class="submenuItems">
							<li><i class="flaticon-right-arrow-angle"></i><a href="contact.html">Contact page</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="about.html">About us</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="privacy.html">Privacy</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="reset-pass.html">Reset Pass</a></li>
							<li><i class="flaticon-right-arrow-angle"></i><a href="faq.html">FAQ</a></li>
						</ul>
					</li>
				</ul>
			</nav>
			<form action="#" id="moble-search">
				<input type="text" placeholder="Search....">
				<button type="submit"><i class="fa fa-search"></i></button>
			</form>
			<ul class="footer-social-link">
				<li class="fb-bg"><a href="#"><i class="fab fa-facebook-f"></i></a></li>
				<li class="in-bg"><a href="#"><i class="fab fa-instagram"></i></a></li>
				<li class="tw-bg"><a href="#"><i class="fab fa-twitter"></i></a></li>
				<li class="gp-bg"><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
			</ul>
		</section>

		<!--=========================-->
		<!--=        Breadcrumb         =-->
		<!--=========================-->
		<section class="breadcrumb_area">
			<div class="vigo_container_two">
				<div class="page_header">
					<h1>Collection</h1>
				</div>
				<!-- /.page-header -->
			</div>
			<!-- /.vigo_container_two -->
		</section>
		<!-- /.breadcrumb_area -->

		<!--=========================-->
		<!--=        Product         =-->
		<!--=========================-->
		<section class="product_all_collection with-sidebar">
			<div class="vigo_container_two">
				<div class="product_all_collection_flex">
					<div class="product_all_collection_flex_item">
						<div class="product_sidebar">
							<section class="widget widget_search">
								<div class="search-form-product">
									<input type="search" id="search-form" class="search-field" placeholder="Search …" value="" name="s">
									<button type="submit" class="search-submit">
								<i class="fa fa-search"></i>
							</button>
								</div>
							</section>
							<section id="product-price" class="widget widget_price">
								<h3 class="widget_title">Filter by price</h3>
								<div class="price-filter-inner">
									<div class="price-filter">
										<span>Filter by price range</span>
										<div class="whc_range_slider_area">
											<div class="whc_range_plan">
												<div class="whc_range_item item1 active">
													$50
												</div>

												<div class="whc_range_item item2">
													$15000
												</div>
											</div>
											<div class="whc_range_control">
												<input type="range" min="0" max="50000">
											</div>
										</div>
									</div>
								</div>
							</section>
							<section class="widget widget_catergories">
								<h3 class="widget_title">Product Categories</h3>
								<ul class="widget_catgories">
									<li><a href="#">Abs Building Dose</a></li>
									<li><a href="#">Regular Suppliments</a></li>
									<li><a href="#">Heavy Suppliments</a></li>
									<li><a href="#">Products for Women</a></li>
									<li><a href="#">Under 18 Suppliments</a></li>
								</ul>
							</section>
						</div>
					</div>
					<div class="product_all_collection_flex_item_big">
						<div class="storefront-sorting">
							<form class="woocommerce-ordering">
								<div class="short text-right">
									<p>Sort By:</p>
									<select name="orderby" class="orderby">
								<option value="menu_order" selected="selected">A-Z Alphabetically</option>
								<option value="popularity">Sort by popularity</option>
								<option value="rating">Sort by average rating</option>
								<option value="date">Sort by newness</option>
								<option value="price">Sort by price: low to high</option>
								<option value="price-desc">Sort by price: high to low</option>
							</select>
								</div>
							</form>
						</div>
						<div class="woocommerce">
							<div class="row products">
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-one.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/relate-pd-two.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-three.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-four.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-one.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/relate-pd-two.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-three.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-four.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-one.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/relate-pd-two.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-three.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-four.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-one.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/relate-pd-two.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-three.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-four.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-one.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/relate-pd-two.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-three.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
								<div class="col-xl-3 col-sm-6 product">
									<div class="sn_related_product">
										<a href="#" class="woocommerce-LoopProduct-link">
											<div class="sn_pd_img product-thumb">
												<img src="media/images/banner-two/related-pd-four.png" alt="!!">
											</div>
											<div class="sn_pd_rating star-rating">
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
												<i class="far fa-star"></i>
											</div>
											<div class="sn_pd_detail">
												<h5 class="woocommerce-loop-product__title">Vaxin Regular (500mg), Mild Intake</h5>
												<div class="price">
													<ins>
												<span>$16.00</span>
											</ins>
													<del>
												<span>$20.00</span>
											</del>
												</div>
											</div>
										</a>
									</div>
								</div>
							</div>
							<nav class="blog_list_pagination">
								<ul class="blog_list_nav_links">
									<li><a href="#">1</a></li>
									<li><a href="#">2</a></li>
									<li><a href="#">3</a></li>
									<li><a href="#">4</a></li>
									<li><a href="#">5</a></li>
									<li><a href="#">6</a></li>
									<li><a href="#">
								<span>.</span>
								<span>.</span>
								<span>.</span>
								<span>.</span>
							</a></li>
									<li><a href="#">9</a></li>
								</ul>
								<ul class="blog_list_nav_links two">
									<li><a href="#" class="prev"><i class="fas fa-angle-double-left"></i> prev</a></li>
									<li><a href="#" class="next">next <i class="fas fa-angle-double-right"></i></a></li>
								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</section>


		<!--==========================-->
		<!--=        Footer         =-->
		<!--==========================-->
		

	</div>
	<!-- /#site -->

	<!-- Dependency Scripts -->
	<script src="dependencies/jquery/jquery.min.js"></script>
	<script src="dependencies/popper.js/popper.min.js"></script>
	<script src="dependencies/bootstrap/js/bootstrap.min.js"></script>
	<script src="dependencies/owl.carousel/js/owl.carousel.min.js"></script>
	<script src="dependencies/magnific-popup/js/jquery.magnific-popup.min.js"></script>
	<script src="dependencies/isotope-layout/js/isotope.pkgd.min.js"></script>
	<script src="dependencies/slick-carousel/js/slick.min.js"></script>
	<script src="dependencies/jquery.countdown/js/jquery.countdown.min.js"></script>
	<script src="dependencies/gmap3/gmap3.min.js"></script>
	<script src="dependencies/headroom/js/headroom.js"></script>
	<script src="dependencies/countUp.js/js/countUp.min.js"></script>
	<script src="dependencies/twitter-fetcher/js/twitterFetcher_min.js"></script>
	<script src="dependencies/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="dependencies/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="dependencies/aos/js/aos.js"></script>
	<script async src="../../../platform.twitter.com/widgets.js" charset="utf-8"></script>
	<script async src="../../../cdn.embedly.com/widgets/platform.js" charset="UTF-8"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBsBrMPsyNtpwKXPPpG54XwJXnyobfMAIc"></script>
	<script src="dependencies/rangeslider.js/js/rangeslider.min.js"></script>
	<script src="dependencies/waypoints/js/jquery.waypoints.min.js"></script>
	<!-- Site Scripts -->
	<script src="assets/js/middle.js"></script>
	<script src="assets/js/app.js"></script>


</body>


<!-- Mirrored from themeim.com/demo/gymer/collection-all.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 14 Aug 2024 11:11:31 GMT -->
</html>
@endsection