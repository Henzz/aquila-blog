@extends('layouts.app')

@section('content')

<head>

	<!-- Document Title
	============================================= -->
	<title>Portfolio - Website Development</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Portfolio - Website Development</h1>
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
					<bold>Look at some of the stuff we cooked: </bold>
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
						<ul id="portfolio-filter" class="portfolio-filter clearfix" data-container="#portfolio">

							<li class="activeFilter"><a href="#" data-filter="*">Show All</a></li>
							<li><a href="#" data-filter=".pf-icons">E-commerce</a></li>
							<li><a href="#" data-filter=".pf-illustrations">Responsive Websites</a></li>

						</ul><!-- #portfolio-filter end -->

						<div id="portfolio-shuffle" class="portfolio-shuffle" data-container="#portfolio">
							<i class="icon-random"></i>
						</div>

						<div class="clear"></div>

						<!-- Portfolio Items
						============================================= -->
						<div id="portfolio" class="portfolio portfolio-1 grid-container clearfix">

							<article class="portfolio-item pf-illustrations alt clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/0.0_movet.png" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/0.1_movet.png" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/0.2_movet.png" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/0.3_movet.png" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/0.4_movet.png" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/0.0_movet.png" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/0.1_movet.png" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/0.2_movet.png" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/0.3_movet.png" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/0.4_movet.png" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="https://my.move.et/en" target="_blank">MoveEt</a></h3>
									<p>This our Responsive Website Blog.</p>
									<a href="https://my.move.et/en" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/1.0 Nektar.jpg" alt="Nektar"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/1.1 Nektar.jpg" alt="Nektar"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/1.2 Nektar.jpg" alt="Nektar"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/1.3 Nektar.jpg" alt="Nektar"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/1.0 Nektar.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/1.1 Nektar.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/1.2 Nektar.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/1.3 Nektar.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="https://nektarcoffee.com" target="_blank">Nektar Coffee</a></h3>
									<p>The website we developed for our customers and currently online.</p>
									<a href="https://nektarcoffee.com" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons alt clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/6.0 maldivespromotion.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/6.1 maldivespromotion.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/6.2 maldivespromotion.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/6.3 maldivespromotion.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/6.0 maldivespromotion.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/6.1 maldivespromotion.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/6.2 maldivespromotion.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/6.3 maldivespromotion.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="http://maldivespromotion.com" target="_blank">Maldives Promotion</a></h3>
									<p>The website we developed for our customers and currently online.</p>
									<a href="http://maldivespromotion.com" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-illustrations clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/7.0 wodametal.jpg" alt="Website"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/7.1 wodametal.jpg" alt="Website"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/7.2 wodametal.jpg" alt="Website"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/7.3 wodametal.jpg" alt="Website"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/7.0 wodametal.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/7.1 wodametal.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/7.2 wodametal.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/7.3 wodametal.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="https://www.wodametal.com/" target="_blank">Woda Metals</a></h3>
									<p>Responsive web design (RWD) is an approach to web design that makes web pages render well on a variety of devices and windows or screen sizes. we Design and develop the necessary across all devices to ensure usability and satisfaction.</p>
									<a href="https://www.wodametal.com/" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons alt clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/4.0 Sell&Buy.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/4.1 Sell&Buy.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/4.2 Sell&Buy.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/4.3 Sell&Buy.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/4.0 Sell&Buy.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/4.1 Sell&Buy.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/4.2 Sell&Buy.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/4.3 Sell&Buy.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="https://sellandbuyaddis.com" target="_blank">Sell and Buy Addis</a></h3>
									<p>E-commerce (electronic commerce) is the activity of electronically buying or selling products on online services or over the Internet. The website we developed for our customers and currently online.</p>
									<a href="https://sellandbuyaddis.com" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/3.0 Niat.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/3.1 Niat.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/3.2 Niat.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/3.0 Niat.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/3.1 Niat.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/3.2 Niat.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="http://niatproducts.com" target="_blank">Niat Products</a></h3>
									<p>The website we developed for our customers and currently online.</p>
									<a href="http://niatproducts.com" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons alt clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/2.0 Ahadu.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/2.1 Ahadu.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/2.2 Ahadu.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/2.3 Ahadu.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/2.4 Ahadu.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/2.0 Ahadu.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/2.1 Ahadu.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/2.2 Ahadu.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/2.3 Ahadu.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/2.4 Ahadu.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="http://ahadustore.com" target="_blank">Ahadu Store</a></h3>
									<p>The website we developed for our customers and currently online.</p>
									<a href="http://ahadustore.com" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
								</div>
							</article>

							<article class="portfolio-item pf-icons clearfix">
								<div class="portfolio-image">
									<div class="fslider" data-arrows="false" data-speed="400" data-pause="4000">
										<div class="flexslider">
											<div class="slider-wrap">
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/5.0 covenantministriesethiopia.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/5.1 covenantministriesethiopia.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/5.2 covenantministriesethiopia.jpg" alt="Morning Dew"></a></div>
												<div class="slide"><a href="portfolio-single-gallery.html"><img src="/acss/images/portfolio/1/New_Added/5.3 covenantministriesethiopia.jpg" alt="Morning Dew"></a></div>
											</div>
										</div>
									</div>
									<div class="portfolio-overlay" data-lightbox="gallery">
										<a href="images/portfolio/1/New_Added/5.0 covenantministriesethiopia.jpg" class="center-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
										<a href="images/portfolio/1/New_Added/5.1 covenantministriesethiopia.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/5.2 covenantministriesethiopia.jpg" class="hidden" data-lightbox="gallery-item"></a>
										<a href="images/portfolio/1/New_Added/5.3 covenantministriesethiopia.jpg" class="hidden" data-lightbox="gallery-item"></a>
									</div>
								</div>
								<div class="portfolio-desc">
									<h3><a href="http://covenantministriesethiopia.org" target="_blank">Covenant Ministries Ethiopia</a></h3>
									<p>The website we developed for our customers and currently online.</p>
									<a href="http://covenantministriesethiopia.org" class="button button-3d noleftmargin" target="_blank">Launch Website</a>
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
                    <div class="col-sm-14">
                        @foreach ($post as $posts)
                            <div class="">
                                {!! $posts['body'] !!}
                                <hr>
                            </div>
                        @endforeach
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
