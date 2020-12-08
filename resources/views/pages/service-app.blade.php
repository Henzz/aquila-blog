@extends('layouts.app')

@section('content')

<head>

	<!-- Document Title
	============================================= -->
	<title>Mobile App Development Services</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Mobile App Development Services</h1>
				<span style="color: black;">We provide Amazing Solutions</span>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap">



				<div class="section">

					<div class="container clear-bottommargin clearfix">

						<div class="heading-block center">
							<h2>Features List.</h2>
							<span>We provide a wide array of Usable &amp; Flexible Features</span>
						</div>

						<div class="row">

							<div class="col-lg-4 bottommargin">
								<img data-animate="fadeInLeftBig" src="/acss/images/services/iphone.png" alt="iPhone" class="center-block">
							</div>

							<div class="col-lg-4 col-md-6 topmargin bottommargin">

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a href="#"><i class="icon-line-monitor"></i></a>
										</div>
										<h3>Responsive Layout</h3>
										<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize the browser to view the changes.</p>
									</div>

								</div>

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a href="#"><i class="icon-line-eye"></i></a>
										</div>
										<h3>Retina Ready Graphics</h3>
										<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all other graphics are optimized.</p>
									</div>

								</div>

								<div class="col_full nobottommargin">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a href="#"><i class="icon-line-power"></i></a>
										</div>
										<h3>Powerful Performance</h3>
										<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
									</div>

								</div>

							</div>

							<div class="col-lg-4 col-md-6 topmargin bottommargin" >

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">

										<div class="fbox-icon">
											<a href="#"><i class="icon-line-layers"></i></a>
										</div>
										<h3>Premium Sliders Included</h3>
										<p>Canvas included 20+ custom designed Slider Pages with Premium Sliders like Layer, Revolution, Swiper &amp; others.</p>
									</div>

								</div>

								<div class="col_full">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a href="#"><i class="icon-line-star"></i></a>
										</div>
										<h3>Unlimited Color Options</h3>
										<p>Change the Color Scheme of the Theme in a flash just by changing the 6-digit HEX code provided in the colors.php file.</p>
									</div>

								</div>

								<div class="col_full nobottommargin">

									<div class="feature-box fbox-plain fbox-small fbox-dark">
										<div class="fbox-icon">
											<a href="#"><i class="icon-line-anchor"></i></a>
										</div>
										<h3>CUSTOMIZABLE FONTS</h3>
										<p>Use any Font you like from Google Web Fonts, Typekit, or other Web Fonts. They will blend in perfectly.</p>
									</div>

								</div>

							</div>

						</div>

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

                <div class="container clearfix" style="margin-top: 30px;">

					<div class="col_one_third">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-crop i-alt"></i></a>
							</div>
							<h3>Premium Sliders Included<span class="subtitle">About 20+ Dedicated Slider Templates</span></h3>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-tint i-alt"></i></a>
							</div>
							<h3>Unlimited Color Options<span class="subtitle">16.7+ Million on your fingertips</span></h3>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-text-width i-alt"></i></a>
							</div>
							<h3>CUSTOMIZABLE FONTS<span class="subtitle">Unlimited Fonts &amp; Customizations</span></h3>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-ok i-alt"></i></a>
							</div>
							<h3>12+ Header Designs<span class="subtitle">Customizable Headers &amp; Menus</span></h3>
						</div>
					</div>

					<div class="col_one_third nobottommargin">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-thumbs-up i-alt"></i></a>
							</div>
							<h3>Awesome Mega menu<span class="subtitle">Stylish &amp; Simple Chunky Menus</span></h3>
						</div>
					</div>

					<div class="col_one_third nobottommargin col_last">
						<div class="feature-box fbox-center fbox-outline fbox-effect nobottomborder">
							<div class="fbox-icon">
								<a href="#"><i class="icon-eye i-alt"></i></a>
							</div>
							<h3>Retina Ready Graphics<span class="subtitle">Crystal Clear Images &amp; Icons</span></h3>
						</div>
					</div>

				</div>

				<div class="content-wrap" style ="margin-bottom: 100px;">
					<div class="promo promo-dark promo-flat promo-full topmargin footer-stick" style="background-color: #3399ff;">
						<div class="container clearfix">
							<h3>Call Us Today At +251 913609212 or Email Us At info@aquilaict.com</h3>
							<span>We strive to provide Our Customers with Top Notch Support to make their Theme Experience Wonderful</span>
							<a href="/contact-2" class="button button-xlarge button-rounded" style="margin-bottom: auto; background-color: #4d4d4d;">Get Intouch</a>
						</div>
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
