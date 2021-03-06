<footer id="fh5co-footer" role="contentinfo" style="background-image: url(images/img_bg_4.jpg);">
	<div class="overlay"></div>
		<div class="container">
			<div class="row row-pb-md">
				<div class="col-md-3 fh5co-widget">	
					<div class="fh5co-contact-info">
						<h3>Contact Information</h3>
						<ul >
							<li class="address" id="info_footer">Ecole Biscuiterie, <br> Niary Tally</li>
							<li class="phone "><a id="info_footer" href="tel://1234567920">(+221) 00 000 00 00 </a></li>
							<li class="email" ><a id="info_footer" href="mailto:info@yoursite.com">empro@gmail.com</a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learning</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Course</a></li>
						<li><a href="#">Blog</a></li>
						<li><a href="#">Contact</a></li>
						<li><a href="#">Terms</a></li>
						<li><a href="#">Meetups</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Learn &amp; Grow</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Blog</a></li>
						<li><a href="#">Privacy</a></li>
						<li><a href="#">Testimonials</a></li>
						<li><a href="#">Handbook</a></li>
						<li><a href="#">Held Desk</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Engage us</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Marketing</a></li>
						<li><a href="#">Visual Assistant</a></li>
						<li><a href="#">System Analysis</a></li>
						<li><a href="#">Advertise</a></li>
					</ul>
				</div>

				<div class="col-md-2 col-sm-4 col-xs-6 col-md-push-1 fh5co-widget">
					<h3>Legal</h3>
					<ul class="fh5co-footer-links">
						<li><a href="#">Find Designers</a></li>
						<li><a href="#">Find Developers</a></li>
						<li><a href="#">Teams</a></li>
						<li><a href="#">Advertise</a></li>
						<li><a href="#">API</a></li>
					</ul>
				</div>
			</div>

			<div class="row copyright">
				<div class="col-md-12 text-center">
					<p>
						<small class="block">&copy; 2016 Free HTML5. All Rights Reserved.</small> 
						<small class="block">Designed by <a href="http://freehtml5.co/" target="_blank">FreeHTML5.co</a> Demo Images: <a href="http://unsplash.co/" target="_blank">Unsplash</a> &amp; <a href="https://www.pexels.com/" target="_blank">Pexels</a></small>
					</p>
				</div>
			</div>
		</div>
	</div>
</footer>
  

<div class="gototop js-top">
	<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
</div>

<!-- jQuery -->
<script src="{{asset('user/js/jquery.min.js')}}"></script>
<!-- jQuery Easing -->
<script src="{{asset('user/js/jquery.easing.1.3.js')}}"></script>
<!-- Bootstrap -->
<script src="{{asset('user/js/bootstrap.min.js')}}"></script>
<!-- Waypoints -->
<script src="{{asset('user/js/jquery.waypoints.min.js')}}"></script>
<!-- Stellar Parallax -->
<script src="{{asset('user/js/jquery.stellar.min.js')}}"></script>
<!-- Carousel -->
<script src="{{asset('user/js/owl.carousel.min.js')}}"></script>
<!-- Flexslider -->
<script src="{{asset('user/js/jquery.flexslider-min.js')}}"></script>
<!-- countTo -->
<script src="{{asset('user/js/jquery.countTo.js')}}"></script>
<!-- Magnific Popup -->
<script src="{{asset('user/js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('user/js/magnific-popup-options.js')}}"></script>
<!-- Count Down -->
<script src="{{asset('user/js/simplyCountdown.js')}}"></script>
<!-- Main -->
<script src="{{asset('user/js/main.js')}}"></script>
<script src="{{asset('user/js/user.js')}}"></script>
<script>
var d = new Date(new Date().getTime() + 1000 * 120 * 120 * 2000);

// default example
simplyCountdown('.simply-countdown-one', {
	year: d.getFullYear(),
	month: d.getMonth() + 1,
	day: d.getDate()
});

//jQuery example
$('#simply-countdown-losange').simplyCountdown({
	year: d.getFullYear(),
	month: d.getMonth() + 1,
	day: d.getDate(),
	enableUtc: false
});
</script>