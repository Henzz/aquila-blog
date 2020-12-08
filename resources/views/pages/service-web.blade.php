@extends('layouts.app')

@section('content')

<head>

	<!-- Document Title
	============================================= -->
	<title>Website Development &amp; E-commerse Services</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Page Title
		============================================= -->
		<section id="page-title">

			<div class="container clearfix">
				<h1>Website Development &amp; E-commerse</h1>
				<ol class="breadcrumb">
					<li class="breadcrumb-item"><a href="/">Home</a></li>
					<li class="breadcrumb-item"><a href="#">Pages</a></li>
					<li class="breadcrumb-item active" aria-current="page">Services</li>
				</ol>
			</div>

		</section><!-- #page-title end -->

		<!-- Content
		============================================= -->
		<div class="heading-block center container clearfix">
							<h2></h2>
							<span>Today, creating an attractive web design is of utmost importance. The design of your website will play a vital role in how users will perceive your brand. We offer services and solutions that can put your business on top of the list.</span>
						</div>

		<div class="container clearfix">
					<div id="side-navigation">

						<div class="col_one_third">

							<ul class="sidenav">
								<li class="ui-tabs-active"><a href="#snav-content1"><i class="icon-screen"></i>Brand Creation and Digital Promotion<i class="icon-chevron-right"></i></a></li>
								<li><a href="#snav-content2"><i class="icon-magic"></i>Design And Development<i class="icon-chevron-right"></i></a></li>
								<li><a href="#snav-content3"><i class="icon-tint"></i>Software Project Research and Modeling<i class="icon-chevron-right"></i></a></li>

							</ul>

						</div>

						<div class="col_two_third col_last">

							<div id="snav-content1">
								<h3>Brand Creation and Digital Promotion</h3>
								<img class="alignright img-responsive" src="/acss/images/landing/responsive.png" alt="">
								<p>Fully Brand your new system with the latest Graphics Designing Concepts and Softwares. Using the latest trends and digital promotion.</p>
							</div>

							<div id="snav-content2">
								<h3>Design And Development</h3>
								<p>In Design and Development sector we have a long time experience developing different kinds of System Design and Development.</p>
							</div>

							<div class="clearfix" id="snav-content3">
								<h3>Software Project Research and Modeling</h3>
							   	<p>We do researches for software development projects and provide professional documentation that can be used in large project management. We also provide professional consultation on software project development life cycle.
								</p>
							</div>



						</div>

					</div>

				</div>


        <div class="content-wrap">
            <div class="container clearfix">
                <div class="stretch nobottommargin">
                    @foreach($post as $posts)
                        <div class="">
                            {!! $posts["body"] !!}
                            <div style="width: 100vw; height: 100%;" />
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

		<section id="content">

			<div class="content-wrap">

				<div class="container clearfix">

					<div id="section-features" class="heading-block title-center page-section" style="margin-bottom: 60px;">
						<h2>Features Overview</h2>
						<span>Some of the features that are gonna blow your mind off</span>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn">
								<a href="#"><img src="/acss/images/icons/features/responsive.png" alt="Responsive Layout"></a>
							</div>
							<h3>Responsive Layout</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="200">
								<a href="#"><img src="/acss/images/icons/features/retina.png" alt="Retina Graphics"></a>
							</div>
							<h3>Retina Graphics</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all other graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="400">
								<a href="#"><img src="/acss/images/icons/features/performance.png" alt="Powerful Performance"></a>
							</div>
							<h3>Powerful Performance</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="600">
								<a href="#"><img src="/acss/images/icons/features/flag.png" alt="Responsive Layout"></a>
							</div>
							<h3>Endless Possibilities</h3>
							<p>You have complete easy control over each &amp; every element that provides endless customization possibilities.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="800">
								<a href="#"><img src="/acss/images/icons/features/tick.png" alt="Retina Graphics"></a>
							</div>
							<h3>Light &amp; Dark Scheme</h3>
							<p>Change your Website's Primary Scheme instantly by simply adding the dark class to the body.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1000">
								<a href="#"><img src="/acss/images/icons/features/tools.png" alt="Powerful Performance"></a>
							</div>
							<h3>Customizable Fonts</h3>
							<p>Use any Font you like from Google Web Fonts, Typekit, or other Web Fonts. They will blend in perfectly.</p>
						</div>
					</div>

					<div class="clear"></div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1200">
								<a href="#"><img src="/acss/images/icons/features/map.png" alt="Responsive Layout"></a>
							</div>
							<h3>Responsive Layout</h3>
							<p>Powerful Layout with Responsive functionality that can be adapted to any screen size. Resize browser to view.</p>
						</div>
					</div>

					<div class="col_one_third">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1400">
								<a href="#"><img src="/acss/images/icons/features/seo.png" alt="Retina Graphics"></a>
							</div>
							<h3>Retina Graphics</h3>
							<p>Looks beautiful &amp; ultra-sharp on Retina Screen Displays. Retina Icons, Fonts &amp; all other graphics are optimized.</p>
						</div>
					</div>

					<div class="col_one_third col_last">
						<div class="feature-box fbox-plain">
							<div class="fbox-icon" data-animate="bounceIn" data-delay="1600">
								<a href="#"><img src="/acss/images/icons/features/support.png" alt="Powerful Performance"></a>
							</div>
							<h3>Powerful Performance</h3>
							<p>Canvas includes tons of optimized code that are completely customizable and deliver unmatched fast performance.</p>
						</div>
					</div>

					<div class="clear"></div>

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
