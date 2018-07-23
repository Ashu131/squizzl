<script src="js/owl.carousel.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		$("#owl-demo").owlCarousel({
		autoPlay: true, //Set AutoPlay to 3 seconds
		items :3,
		itemsDesktop : [640,2],
		itemsDesktopSmall : [414,1],
		navigation : true,
		// THIS IS THE NEW PART
			afterAction: function(el){
				//remove class active
				this
				.$owlItems
				.removeClass('active')
				//add class active
				this
				.$owlItems //owl internal $ object containing items
				.eq(this.currentItem + 1)
				.addClass('active')
				}
		// END NEW PART
		});
	});
</script>
<div class="w3_agileits-footer">
	<div class="container-fluid">
		<div class="col-md-8 col-sm-12 wthree-footer-left">
			<div class="navbar-header page-scroll">
				<h2><a class="navbar-brand" href="/"><img class="img-responsive" src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="Magazine for kids in India - Squizzl"></a></h2>
			</div>
			<div class="list-footer">
				<ul class="footer-nav">
					<li class="hidden"><a class="page-scroll" href="#page-top"></a>	</li>
					<li><a class="page-scroll scroll" href="#home">Home</a></li>
					<li><a class="page-scroll scroll" href="#about">About</a></li>
					<li><a class="page-scroll scroll" href="#gallery">Locations</a></li>
					<li><a class="page-scroll scroll" href="#packages">Packages</a></li>
					<li><a class="page-scroll " href="/blog" >Blog</a></li>
					<li><a class="page-scroll scroll" href="#testimonials">Testimonials</a></li>
					<li><a class="page-scroll scroll" href="#contact">Contact</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-4 col-sm-12 wthree-footer-right">
			<div class="agile-social-icons">
				<ul>
					<li><a target="_blank" href="https://www.facebook.com/squizzlworld/" class="fa fa-facebook" aria-hidden="true"></a></li>
					<li><a target="_blank" href="https://www.linkedin.com/in/squizzl-magazine-ab4705155/" class="fa fa-linkedin" aria-hidden="true"></a></li>
					<li><a target="_blank" href="https://twitter.com/Squizzl1" class="fa fa-twitter" aria-hidden="true"></a></li>
					<li><a target="_blank" href="https://www.instagram.com/Squizzlworld/" class="fa fa-instagram" aria-hidden="true"></a></li>
				</ul>
			</div>
			<div class="w3-mail">
				<ul>
					<li><span class="fa fa-envelope icon" aria-hidden="true"></span><a href="mailto:squizzlworld@gmail.com">squizzlworld@gmail.com</a></li>
					<li><span class="fa fa-phone" aria-hidden="true"></span><p>+91-9953260467</p></li>
				</ul>
			</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>

<!-- copyright -->
<div class="copyright">
	<p>&copy; <?php echo date('Y') ?> Designed &amp; Developed by:-  </p><a href="https://www.yocreativ.com/" target="_blank"> <span> YoCreativ </span></a>
</div>
<!-- //copyright -->

<!--//footer -->
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
$(window).load(function(){
$('#carousel').flexslider({
animation: "slide",
controlNav: false,
animationLoop: true,
slideshow: false,
itemWidth: 102,
itemMargin: 5,
asNavFor: '#slider'
});
$('#slider').flexslider({
animation: "slide",
controlNav: false,
animationLoop: true,
slideshow: true,
sync: "#carousel",
start: function(slider){
$('body').removeClass('loading');
}
});
});
</script>
<!-- //FlexSlider -->
<!-- Tour-Locations-JavaScript -->
<script src="js/classie.js"></script>
<script src="js/helper.js"></script>
<script src="js/grid3d.js"></script>
<script>
	new grid3D( document.getElementById( 'grid3d' ) );
</script>
<!-- //Tour-Locations-JavaScript -->
<script src="js/jarallax.js"></script>
<script type="text/javascript">
	/* init Jarallax */
	$('.jarallax').jarallax({
		speed: 0.5,
		imgWidth: 1366,
		imgHeight: 768
	})
</script><!-- //js -->
<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- here starts scrolling icon -->
<script type="text/javascript">
	$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear'
			};
		*/
								
		$().UItoTop({ easingType: 'easeOutQuart' });
							
		});
</script>
<!-- start-smoth-scrolling -->
<script  src="js/move-top.js"></script>
<script  src="js/easing.js"></script>
<script>
	jQuery(document).ready(function($) {
				$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<script src="js/jquery.validate.js"></script>
<script src="js/form-validation.js"></script>
<!-- /ends-smoth-scrolling -->
<!-- //here ends scrolling icon -->
</body>
</html>