@extends('layouts.app')

@section('content')

	<head>
		<!-- Document Title
		============================================= -->
		
		<title>Contact Us</title>
	</head>

	<body class="stretched">

		<!-- Document Wrapper
		============================================= -->
		<div id="wrapper" class="clearfix">

			<!-- Page Title
			============================================= -->
			<section id="page-title">

				<div class="container clearfix">
					<h1>Contact</h1>
					<span>Get in Touch with Us</span>
					<ol class="breadcrumb">
						<li class="breadcrumb-item"><a href="/index">Home</a></li>
						<li class="breadcrumb-item active" aria-current="page">Contact</li>
					</ol>
				</div>

			</section><!-- #page-title end -->

			<!-- Content
			============================================= -->
			<section id="content">

				<div class="content-wrap">

					<div class="container clearfix">

						<!-- Contact Form
						============================================= -->
						<div class="col_half">

							<div class="fancy-title title-dotted-border">
								<h3>Send us an Email</h3>
							</div>

							<div class="form-widget">

								<div class="form-result"></div>

								<form class="nobottommargin" id="contactform" name="contactform" action="https://formspree.io/Kaleb@aquilaict.com" method="post">

									<div class="col_one_third">
										<label for="name">Name <small>*</small></label>
										<input type="text" id="name" name="Name" value="" class="sm-form-control required" />
									</div>

									<div class="col_one_third">
										<label for="email">Email <small>*</small></label>
										<input type="email" id="email" name="Email" value="" class="required email sm-form-control" />
									</div>

									<div class="col_one_third col_last">
										<label for="phone">Phone</label>
										<input type="text" id="phone" name="Phone" value="" class="sm-form-control" />
									</div>

									<div class="clear"></div>

									<div class="col_two_third">
										<label for="subject">Subject <small>*</small></label>
										<input type="text" id="subject" name="Subject" value="" class="required sm-form-control" />
									</div>

									<div class="col_one_third col_last">
										<label for="service">Services</label>
										<select id="service" name="Service" class="sm-form-control">
											<option value="">-- Select One --</option>
											<option value="Wordpress">Website Development</option>
											<option value="Wordpress">IOT and Security System Supply</option>
											<option value="Wordpress">Mobile App Development</option>
											<option value="PHP / MySQL">Digital Marketing and SEO</option>
											<option value="HTML5 / CSS3">Enterprise System Development</option>
											<option value="Graphic Design">Domain Name and Hosting</option>
										</select>
									</div>

									<div class="clear"></div>

									<div class="col_full">
										<label for="message">Message <small>*</small></label>
										<textarea class="required sm-form-control" id="message" name="Message" rows="6" cols="30"></textarea>
									</div>

									<div class="col_full">
										<button name="Submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d nomargin">Submit Comment</button>
									</div>

								</form>
							
							</div>

						</div><!-- Contact Form End -->

						<!-- Google Map
						============================================= -->
						<div class="col_half col_last">

							<section id="google-map" class="gmap" style="height: 410px;"></section>

						</div><!-- Google Map End -->

						<div class="clear"></div>

						<!-- Contact Info
						============================================= -->
						<div class="row clear-bottommargin">

							<div class="col-lg-3 col-md-6 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-map-marker2"></i></a>
									</div>
									<h3>Our Headquarters<span class="subtitle">Addis Ababa, Ethiopia</span></h3>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-phone3"></i></a>
									</div>
									<h3>Speak to Us<span class="subtitle"> (+251) 913 609212</span></h3>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-skype2"></i></a>
									</div>
									<h3>Make a Video Call<span class="subtitle">aquilaictsolution</span></h3>
								</div>
							</div>

							<div class="col-lg-3 col-md-6 bottommargin clearfix">
								<div class="feature-box fbox-center fbox-bg fbox-plain">
									<div class="fbox-icon">
										<a href="#"><i class="icon-twitter2"></i></a>
									</div>
									<h3>Follow on Twitter</h3>
								</div>
							</div>

						</div><!-- Contact Info End -->

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

		<script src="https://maps.google.com/maps/api/js?key=AIzaSyBdQX16CnexZnYYFaVXFJazB9NW870C5L4"></script>
		<script src="/acss/js/jquery.gmap.js"></script>

		<script>

			jQuery('#google-map').gMap({
				address: 'Addis Ababa, Ethiopia',
				maptype: 'ROADMAP',
				zoom: 14,
				markers: [
					{
						address: "Addis Ababa, Ethiopia",
						html: '<div style="width: 300px;"><h4 style="margin-bottom: 8px;">Hi, we\'re <span>Aquila</span></h4><p class="nobottommargin">Our mission is to <strong>equip</strong> your business and become a <strong>Success</strong>.</p></div>',
						icon: {
							image: "images/icons/map-icon-red.png",
							iconsize: [32, 39],
							iconanchor: [32,39]
						}
					}
				],
				doubleclickzoom: false,
				controls: {
					panControl: true,
					zoomControl: true,
					mapTypeControl: true,
					scaleControl: false,
					streetViewControl: false,
					overviewMapControl: false
				}
			});

		</script>
		<!--Start of Tawk.to Script-->
		<script type="text/javascript">
		var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
		(function(){
		var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
		s1.async=true;
		s1.src='https://embed.tawk.to/5ec1093b967ae56c521a8c61/default';
		s1.charset='UTF-8';
		s1.setAttribute('crossorigin','*');
		s0.parentNode.insertBefore(s1,s0);
		})();
		</script>
		<!--End of Tawk.to Script-->
	
	</body>

@endsection