@php
	$setting = \App\Helpers\Helpers::setting();
	$related_links = \App\Helpers\Helpers::related_links();
@endphp
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link href="https://fonts.googleapis.com/css2?family=Roboto+Slab:wght@400;600;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/one-page/css/et-line.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/components/bs-switches.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<!-- Theme Color Stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend/css/colors.php?color=FF8600') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/demos/news/css/fonts.css') }}" type="text/css" />

	<!-- News Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend/demos/news/news.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/demos/articles/articles.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/demos/articles/css/fonts.css') }}" type="text/css" />
	<!-- / -->

	<!-- SLIDER REVOLUTION 5.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/include/rs-plugin/css/settings.css') }}" media="screen" />
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/include/rs-plugin/css/layers.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('frontend/include/rs-plugin/css/navigation.css') }}">

	<!-- Document Title
	============================================= -->
	<title>{{ __($setting->application_name) }}</title>
	<link rel="icon" type="image/x-icon" href="{{ asset('upload/setting/'.$setting->small_icon) }}"/>

	<style>
		/* Revolution Slider Styles */
		.hesperiden .tp-tab { border-bottom: 0; }
		.hesperiden .tp-tab:hover,
		.hesperiden .tp-tab.selected { background-color: #E5E5E5; }

	</style>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="header-size-sm" data-sticky-shrink="false">
			<div class="container">
				<div class="header-row justify-content-between">

					<!-- Logo
					============================================= -->
					<div id="logo" class="col-auto ms-auto ms-mb-0 me-mb-0 order-md-2">
						<a href="demo-news.html" class="standard-logo"><img class="mx-auto" src="{{ asset('upload/setting/'.$setting->large_icon) }}" alt="Canvas Logo"></a>
						<a href="demo-news.html" class="retina-logo"><img class="mx-auto" src="{{ asset('upload/setting/'.$setting->large_icon) }}" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<div class="w-100 d-block d-md-none"></div>

					<div class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0">
						<a href="{{ $setting->fb }}" target="_blank" class="social-icon si-small si-rounded si-dark si-mini si-facebook mb-0">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="{{ $setting->ig }}" target="_blank" class="social-icon si-small si-rounded si-dark si-mini si-instagram mb-0">
							<i class="icon-instagram"></i>
							<i class="icon-instagram"></i>
						</a>
						<a href="{{ $setting->tiktok }}" target="_blank" class="social-icon si-small si-rounded si-dark si-mini si-instagram mb-0">
							<i class="icon-tiktok"></i>
							<i class="icon-tiktok"></i>
						</a>
						<a href="{{ $setting->youtube }}" target="_blank" class="social-icon si-small si-rounded si-dark si-mini si-instagram mb-0">
							<i class="icon-youtube"></i>
							<i class="icon-youtube"></i>
						</a>
					</div>

					<div class="col-12 col-sm-6 col-md-4 order-md-3 mb-4 mb-md-0">
						<ul class="nav align-items-center justify-content-center justify-content-sm-end">
							<li class="nav-item">
							</li>
							<li class="nav-item">
								<div class="date-today text-uppercase badge bg-dark rounded-pill py-2 px-3 fw-medium"></div>
							</li>
						</ul>
					</div>

				</div>
			</div>

			<div id="header-wrap" class="border-top border-f5">
				<div class="container">
					<div class="header-row justify-content-between flex-row-reverse flex-lg-row">


						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu with-arrows">

							<ul class="menu-container" >
								<li class="menu-item current menu-color-home"><a class="menu-link" href="{{ url('/') }}"><div style="font-size: 12px;">Home</div></a></li>
								<li class="menu-item menu-color-travel"><a class="menu-link" href="{{ url('page-about') }}"><div style="font-size: 12px;">About us</div></a></li>
								<li class="menu-item menu-color-lifestyle"><a class="menu-link" href="{{ url('page-publishing-process') }}"><div style="font-size: 12px;">Publishing Process</div></a></li>
								<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Catalog</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-1') }}"><div>Buku Ajar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-2') }}"><div>Monograf</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-3') }}"><div>Referensi</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-4') }}"><div>Novel</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-fashion  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Journal & Proceeding</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-journal') }}"><div style="font-size: 12px;">Journal</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-proceeding') }}"><div style="font-size: 12px;">Proceeding</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-market  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Conference & Workshop</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-conference') }}"><div style="font-size: 12px;">Conference</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-workshop') }}"><div style="font-size: 12px;">Workshop</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-fashion"><a class="menu-link" href="{{ url('page-author-and-affiliation') }}"><div style="font-size: 12px;">Author & Affiliation</div></a></li>
								<li class="menu-item menu-color-sports"><a class="menu-link" href="{{ url('page-term-and-condition') }}"><div style="font-size: 12px;">Term & Condition</div></a></li>
								<li class="menu-item menu-color-food"><a class="menu-link" href="{{ url('page-contact') }}"><div style="font-size: 12px;">Contact Us</div></a></li>
							</ul>

							<!-- Mobile Menu
							============================================= -->
							<ul class="menu-container mobile-primary-menu">
							<li class="menu-item current menu-color-home"><a class="menu-link" href="{{ url('/') }}"><div style="font-size: 12px;">Home</div></a></li>
								<li class="menu-item menu-color-travel"><a class="menu-link" href="{{ url('page-about') }}"><div style="font-size: 12px;">About us</div></a></li>
								<li class="menu-item menu-color-lifestyle"><a class="menu-link" href="{{ url('page-publishing-process') }}"><div style="font-size: 12px;">Publishing Process</div></a></li>
								<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Catalog</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-1') }}"><div>Buku Ajar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-2') }}"><div>Monograf</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-3') }}"><div>Referensi</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-catalog-4') }}"><div>Novel</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-fashion  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Journal & Proceeding</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-journal') }}"><div style="font-size: 12px;">Journal</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-proceeding') }}"><div style="font-size: 12px;">Proceeding</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-market  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Conference & Workshop</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-conference') }}"><div style="font-size: 12px;">Conference</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-workshop') }}"><div style="font-size: 12px;">Workshop</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-fashion"><a class="menu-link" href="{{ url('page-author-and-affiliation') }}"><div style="font-size: 12px;">Author & Affiliation</div></a></li>
								<li class="menu-item menu-color-sports"><a class="menu-link" href="{{ url('page-term-and-condition') }}"><div style="font-size: 12px;">Term & Condition</div></a></li>
								<li class="menu-item menu-color-food"><a class="menu-link" href="{{ url('page-contact') }}"><div style="font-size: 12px;">Contact Us</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
			<div class="header-wrap-clone"></div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		@yield('content')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #00BCD4;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap row clearfix">

					<div class="col-lg-8 col-sm-6 mb-5 mb-lg-0">
						<!-- Footer Widget 1
						============================================= -->
						<div class="widget clearfix">
							
						<address>
							<strong>Alamat:</strong><br>{{ $setting->address }}{{ $setting->address }}<br><br>
							<strong>Telepon / Whatsapp: </strong><br>{{ $setting->phone }}<br><br>
							<strong>Email: </strong><br>{{ $setting->email }}
						</address>
						</div>
					</div>

					<!-- Footer Widget 3
					============================================= -->
					<div class="col-lg-4 col-sm-6 mb-5 mb-sm-0">
						<div class="widget widget_links clearfix">
							<h4 class="mb-3 mb-sm-4">Link Terkait</h4>
							<ul>
								@foreach($related_links as $v)
									<li><a href="{{ $v->url }}" target="_blank">{{ $v->name }}</a></li>
								@endforeach
							</ul>
						</div>
					</div>

					<!-- Footer Widget 4
					============================================= -->
					{{--<div class="col-lg-3 col-sm-6 mb-0">
						<div class="widget widget_links clearfix">
							<h4 class="mb-3 mb-sm-4">Download in Mobile</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae esse iure est, quam libero!</p>
							<a href="#" class="button button-light text-dark w-100 text-center bg-white nott ls0 button-rounded button-xlarge ms-0"><i class="icon-apple"></i>App Store</a>
							<a href="#" class="button button-light text-dark w-100 text-center bg-white nott ls0 button-rounded button-xlarge ms-0"><i class="icon-googleplay"></i>Google Play</a>
						</div>
					</div>--}}

				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row justify-content-center">
						<div class="col-md-12 align-self-center">
							Copyrights &copy; 2024 All Rights Reserved by Teras Kampus. <br>
							{{--<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>--}}
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins.min.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins.infinitescroll.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('frontend/js/functions.js') }}"></script>

	<!-- SLIDER REVOLUTION 5.x SCRIPTS  -->
	<script src="{{ asset('frontend/include/rs-plugin/js/jquery.themepunch.tools.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/jquery.themepunch.revolution.min.js') }}"></script>

	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.actions.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.carousel.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.kenburn.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.layeranimation.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.migration.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.navigation.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.parallax.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.slideanims.min.js') }}"></script>
	<script src="{{ asset('frontend/include/rs-plugin/js/extensions/revolution.extension.video.min.js') }}"></script>

	<script>
		var tpj=jQuery;
		tpj.noConflict();
		var $ = jQuery.noConflict();


		tpj(document).ready(function() {
			var apiRevoSlider = tpj('#rev_slider_k_fullwidth').show().revolution(
			{
				sliderType:"standard",
				sliderLayout:"fullwidth",
				delay:9000,
				navigation: {
					arrows:{enable:true}
				},
				responsiveLevels:[1240,1024,778,480],
				visibilityLevels:[1240,1024,778,480],
				gridwidth:[1240,1024,778,480],
				gridheight:[600,768,960,720],
			});

			apiRevoSlider.on("revolution.slide.onloaded",function (e) {
				setTimeout( function(){ SEMICOLON.slider.sliderDimensions(); }, 400 );
			});

			apiRevoSlider.on("revolution.slide.onchange",function (e,data) {
				SEMICOLON.slider.revolutionSliderMenu();
			});
		});
	</script>
	<script>
		jQuery(window).on( 'load', function(){
		    var swiper = new Swiper('.swiper-scroller', {
		    	slidesPerView: 'auto',
		    	spaceBetween: 50,
				freeMode: true,
				grabCursor: true,
				navigation: {
				    nextEl: '.slider-arrow-right-1',
				    prevEl: '.slider-arrow-left-1',
				},
				scrollbar: {
				el: '.swiper-scrollbar',
				},
				mousewheel: true,
				breakpoints: {
			        768: {
			          spaceBetween: 20,
			        },
			        576: {
			          spaceBetween: 15,
			        }
			      }
		    });
		});

		jQuery(document).ready( function($){
			function modeSwitcher( elementCheck, elementParent ) {
				if( elementCheck.filter(':checked').length > 0 ) {
					elementParent.addClass('dark');
					$('.mode-switcher').toggleClass('pts-switch-active');
				} else {
					elementParent.removeClass('dark');
					$('.mode-switcher').toggleClass('pts-switch-active', false);
				}
			}

			$('.pts-switcher').each( function(){
				var element = $(this),
					elementCheck = element.find(':checkbox'),
					elementParent = $('body');

				modeSwitcher( elementCheck, elementParent );

				elementCheck.on( 'change', function(){
					modeSwitcher( elementCheck, elementParent );
				});
			});
		});
	</script>
</body>
</html>