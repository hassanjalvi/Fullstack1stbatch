@section('title', 'sign-up')
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
		<!--=        Navbar         =-->
		<!--=========================-->
		<section class="sign-up-area">
			<span class="contact-box-shape"></span>
			
			<!-- Display success message -->
		
			
			<!-- Display error message -->
			
		
			<div class="sign-up-section-title">
				@if ($message = Session::get('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert" style="background-color:#3ad82e">
                            <strong>Success!</strong> {{ $message }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
				<h4>REGISTER</h4>
				<span>Create Your Account Now!</span>
			</div>
		
			<div class="sign-up-inner">
				<div class="sign-up-form">
					<form action="{{url('/register/user')}}" method="POST">
						@csrf
						<p class="sign-up-single-input">
							<label> NAME</label>
							<input type="text" name="name" >
							@if ($errors->has('name'))
                                    <span class="text-danger">
                                        {{$errors->first('name')}}
                                    </span>
                                @endif
						</p>
						<p class="sign-up-single-input">
							<label>EMAIL ADDRESS</label>
							<input type="text" name="email">
							@if ($errors->has('email'))
							<span class="text-danger">
								{{$errors->first('email')}}
							</span>
						@endif
						</p>
		
						<p class="sign-up-single-input">
							<label>PASSWORD</label>
							<input type="password" name="password">
							@if ($errors->has('password'))
							<span class="text-danger">
								{{$errors->first('password')}}
							</span>
						@endif
						</p>
		
						<p class="sign-up-single-input">
							<label>CONFIRM PASSWORD</label>
							<input type="password" name="password_confirmation">
							@if ($errors->has('password_confirmation'))
							<span class="text-danger">
								{{$errors->first('password_confirmation')}}
							</span>
						@endif
						</p>
		
						<p class="sign-up-single-button" style="margin-right:200px;">
							<input type="submit" value="CREATE MY ACCOUNT">
						</p>
						<br><br><br>
						<p class="sign-up-single-checkbox">
							<label>
								<input type="checkbox">
								Sign up to get our weekly updates & offers. We do not spam.
							</label>
							Already have an account? <a href="{{ url('/signin') }}">Sign In</a>
						</p>
					</form>
				</div>
			</div>
		</section>
		

		<!--==========================-->
		<!--=        footer2         =-->
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
</html>
@endsection