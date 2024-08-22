@section('title', 'sign-in')
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
		<section class="sign-up-area sign-in-area">
			<div class="sign-up-section-title">
				<h4>Sign in</h4>
				<span>Log In To Your Account</span>
			</div>

			<div class="sign-in-inner">
				<div class="sign-up-form">
					<form action="#">
						<p class="sign-up-single-input">
							<label>FIRST NAME*</label>
							<input type="text">
						</p>
						<p class="sign-up-single-input">
							<label>Password*</label>
							<input type="text">
						</p>
						<p class="sign-up-single-button">
							<input type="submit" value="Sign in">
						</p>
					</form>
				</div>


				<div class="sign-up-social">
					<p>Or, Sign Up with social media</p>
					<div class="sign-up-social-item">
						<a href="#">
					<i class="fab fa-facebook-f"></i>
					<span>Facebook</span>
				</a>
						<a href="#">
					<i class="fab fa-google-plus-g"></i>
					<span>Google Plus</span>
				</a>
						<a href="#">
					<i class="fab fa-twitter"></i>
					<span>Twitter</span>
				</a>
					</div>
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