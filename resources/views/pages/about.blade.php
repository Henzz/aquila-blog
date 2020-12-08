@extends('layouts.app')

@section('content')

	<head>
		<!-- Document Title
		============================================= -->
		<title>About Us</title>
	</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Page Title
			============================================= -->
			<section id="page-title" class="page-title-parallax page-title-dark" style="padding: 248px 0; background-image: url('/acss/images/about/20200903_134145.jpg'); background-size: cover; background-position: center center;" data-bottom-top="background-position:0px 400px;" data-top-bottom="background-position:0px -200px;">

				<div class="container clearfix">
					<h1 style="color:black !important;">About Us</h1>
					<span style="color:black;">We are proud to tell you that our company offers <br>
						many great and professional services.
					</span>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="index.html">Home</a></li>
						<li class="breadcrumb-item"><a href="#">Pages</a></li>
						<li class="breadcrumb-item active" aria-current="page">About Us</li>
					</ol>
				</div>

			</section><!-- #page-title end -->

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

						<div class="col_one_third">

							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4>Why choose <span>Us</span>.</h4>
							</div>

							<p>We have highly skilled engineers with excellent technical knowledge and experience in using the latest software standards. We have built a large pool of knowledge that we apply to deliver solutions that meet the client's needs, expectations, and budget. </p>

						</div>

						<div class="col_one_third">

							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4>Our <span>Mission</span>.</h4>
							</div>

							<p>We always refine our crafts to produce infrastructure, Software Development Services, and Application Services to solve our client's problems. </p>

						</div>

						<div class="col_one_third col_last">

							<div class="heading-block fancy-title nobottomborder title-bottom-border">
								<h4>What we <span>Do</span>.</h4>
							</div>

							<p>We engage in a wide variety of technology in the ICT sector. Everything we do compliments each other to produce a robust system with rich features. </p>

						</div>

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
