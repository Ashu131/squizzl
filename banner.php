<div class="banner-top">
	<div class="slider">
		<div class="callbacks_container">
			<ul class="rslides callbacks callbacks1" id="slider4">
				<li>
					<div class="w3layouts-banner-top">
						<div class="container">
							<div class="agileits-banner-info jarallax">
								<h3 class="agile-title">Best Magazine for kids<br>Learn and have Fun</h3>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top1">
						<div class="container">
							<div class="agileits-banner-info2 jarallax">
								<h3 class="agile-title">Read Squizzl to develop cognitive skills</h3>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top2">
						<div class="container">
							<div class="agileits-banner-info3 jarallax">
								<h3 class="agile-title">Monthly Children's Book Subscription</h3>
							</div>
						</div>
					</div>
				</li>
				<li>
					<div class="w3layouts-banner-top w3layouts-banner-top3">
						<div class="container">
							<div class="agileits-banner-info3 jarallax">
								<h3 class="agile-title">Subscribe to Squizzl<br> For Addictive puzzles</h3>
							</div>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="clearfix"> </div>
		<script src="js/responsiveslides.min.js"></script>
		<script>
					// You can also use "$(window).load(function() {"
					$(function () {
					// Slideshow 4
					$("#slider4").responsiveSlides({
						auto: true,
						pager:true,
						nav:false,
						speed: 500,
						namespace: "callbacks",
						before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
						$('.events').append("<li>after event fired.</li>");
						}
					});
				
					});
		</script>
		<!--banner Slider starts Here-->
	</div>
</div>