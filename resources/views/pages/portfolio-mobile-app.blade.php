@extends('layouts.app')

@section('content')

<head>

	<!-- Document Title
	============================================= -->
	<title>Portfolio - Mobile App Development</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Portfolio - Mobile App Development</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item active" aria-current="page">Portfolio</li>
				</ol>
			</div>
		</section><!-- #page-title end -->
		<!-- Content
		============================================= -->
		<section id="page-title">
			<div class="container clearfix" style="margin-top: 10px; font-size: 16px;">
				<p>
					<bold>We developed both in Android and IOS Apps. Below are some of Mobile App Developed: </bold>
				</p>
			</div>
		</section>

		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">
					<!-- Post Content
					============================================= -->
					<div class="postcontent nobottommargin">

						<!-- Portfolio Filter
						============================================= -->

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-1 grid-container clearfix">

							<article class="portfolio-item clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/E-CommerceApp.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="/acss/images/portfolio/1/New_Added/Videos/App mockup by Aquila ICT Solution.mp4" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#" target="_blank">E-commerce</a></h3>
									<p>E-commerce (electronic commerce) is the activity of electronically buying or selling products on online services or over the Internet. We develop the applications according to your needs on your Android or IOS devices.</p>
								</div>
							</article>

							<article class="portfolio-item alt clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/Transportation.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="/acss/images/portfolio/1/New_Added/Videos/Temari Bet demo by Aquila ICT Solution.mp4" class="center-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="#" target="_blank">Mobile App Transportation</a></h3>
									<p>E-commerce (electronic commerce) is the activity of electronically buying or selling products on online services or over the Internet. We develop the applications according to your needs on your Android or IOS devices.</p>
								</div>
							</article>

						</div><!-- #portfolio end -->

					</div><!-- .postcontent end -->

					<!-- Sidebar
					============================================= -->
					<div class="sidebar nobottommargin col_last">
						<div class="sidebar-widgets-wrap" style="margin-bottom: 60px;">

							<div class="widget quick-contact-widget form-widget clearfix">

								<h4>Quick Contact</h4>
								<div class="form-result"></div>
								<form class="quick-contact-form nobottommargin" id="quick-contact-form" name="quick-contact-form" action="https://formspree.io/Kaleb@aquilaict.com" method="post">

									<div class="form-process"></div>

									<input type="text" class="required sm-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
									<input type="text" class="required sm-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
									<textarea class="required sm-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
									<input type="text" class="hidden" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
									<input type="hidden" name="prefix" value="quick-contact-form-">
									<button name="quick-contact-form-submit" type="submit" id="quick-contact-form-submit" tabindex="5" value="Submit" class="button button-small button-3d nomargin">Submit Email</button>
								</form>

							</div>

						</div>
					</div><!-- .sidebar end -->

				</div>

			</div>

            <div class="content-wrap">
                <div class="container clearfix">
                    <div class="stretch nobottommargin">
                        <h1>This a new post for the page.</h1>
                    </div>
                </div>
            </div>

		</section><!-- #content end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- External JavaScripts
	============================================= -->
	<script src="/acss/js/jquery.js"></script>
	<script src="/acss/js/plugins.js"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="/acss/js/functions.js"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="/acss/include/rs-plugin/js/jquery.themepunch.tools.min.js"></script>
	<script src="/acss/include/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
	<script src="/acss/include/rs-plugin/js/addons/revolution.addon.typewriter.min.js"></script>
	<!-- SLIDER REVOLUTION EXTENSIONS  -->
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.actions.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.migration.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js"></script>
	<script src="/acss/include/rs-plugin/js/extensions/revolution.extension.video.min.js"></script>

	<!-- ADD-ONS JS FILES -->
	<script>
		var revapi126,
		tpj;
	(function() {
	if (!/loaded|interactive|complete/.test(document.readyState)) document.addEventListener("DOMContentLoaded",onLoad)
		else
	onLoad();

	function onLoad() {
		if (tpj===undefined) {
		tpj = jQuery;

		if("off" == "on") tpj.noConflict();
		}
			if(tpj("#rev_slider_126_1").revolution == undefined){
				revslider_showDoubleJqueryError("#rev_slider_126_1");
			}else{
				revapi126 = tpj("#rev_slider_126_1").show().revolution({
					sliderType:"hero",
					jsFileLocation:"include/rs-plugin/js/",
					sliderLayout:"fullscreen",
					dottedOverlay:"none",
					delay:9000,
					navigation: {
					},
					responsiveLevels:[1240,1024,778,480],
					visibilityLevels:[1240,1024,778,480],
					gridwidth:[1240,1024,778,480],
					gridheight:[868,768,960,720],
					lazyType:"none",
					parallax: {
						type:"mouse",
						origo:"slidercenter",
						speed:400,
					  speedbg:0,
					  speedls:0,
						levels:[1,2,3,4,5,30,35,40,45,46,47,48,49,50,51,55],
					},
					shadow:0,
					spinner:"spinner0",
					autoHeight:"off",
					fullScreenAutoWidth:"off",
					fullScreenAlignForce:"off",
					fullScreenOffsetContainer: "",
					fullScreenOffset: "60px",
					disableProgressBar:"on",
					hideThumbsOnMobile:"off",
					hideSliderAtLimit:0,
					hideCaptionAtLimit:0,
					hideAllCaptionAtLilmit:0,
					debugMode:false,
					fallbacks: {
						simplifyAll:"off",
						disableFocusListener:false,
					}
				});
			}; /* END OF revapi call */

			RsTypewriterAddOn(tpj, revapi126);
			}; /* END OF ON LOAD FUNCTION */
		}()); /* END OF WRAPPING FUNCTION */
	</script>

</body>

@endsection