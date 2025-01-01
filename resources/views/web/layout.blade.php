@php
	$setting = \App\Helpers\Helpers::setting();
	$related_links = \App\Helpers\Helpers::related_links();
	$count_cart = \App\Helpers\Helpers::count_cart();
	$cart = \App\Helpers\Helpers::cart();
@endphp
<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" />
	
	<link rel="stylesheet" href="{{ asset('app.css')}}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('add.css')}}" type="text/css" />
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
	<link rel="stylesheet" href="{{ asset('frontend/css/colors.php?color=2196F8') }}" type="text/css" />
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

		<div class="bdgcontent">
			<div class="floatmenu">
				<div class="row col-md-12 col-lg-12">
					<div class="col-md-6 col-lg-6">
						<div class="floatmenu__wrap">
							<ul>
								<!-- <li><a href="" target="_blank" style="background: #c5223a;"><img src="{{ asset('lapor.png')}}" alt="img"></a></li> -->
								<!-- <li><a href="" rel="nofollow" target="_blank" style="background: #002b56;"><img src="{{ asset('facebook.png')}}" alt="img"></a></li> -->
								<!-- <li><a href="" style="background: #503b39;"><img src="{{ asset('youtube.png')}}"></a></li> -->
								<li><a href="{{ $setting->whatsapp }}" rel="nofollow" target="_blank" style="background: #2a7721;"><img src="{{ asset('whatsapp.png')}}" alt="img"></a></li>
							</ul>
						</div>
					</div>
					<div class="col-md-6 col-lg-6">
						<div class="floatmenu__wrap">
							<ul>
								<!-- <li><a href="#" target="_blank" style="background: #2196f3;"><img src="{{ asset('call.png')}}" alt="img"></a></li> -->
								<!-- <li><a href="" style="background: #b31985;"><img src="{{ asset('instagram.png')}}"></a></li> -->
								<!-- <li><a href="https://wa.me/08114038411" rel="nofollow" target="_blank" style="background: #2a7721;"><img src="{{ asset('whatsapp.png')}}" alt="img"></a></li> -->
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Header
		============================================= -->
		<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="logo">
							<a href="index.html" class="standard-logo" data-dark-logo="{{ asset('upload/setting/'.$setting->large_icon) }}"><img src="{{ asset('upload/setting/'.$setting->large_icon) }}" alt="Canvas Logo"></a>
							<a href="index.html" class="retina-logo" data-dark-logo="{{ asset('upload/setting/'.$setting->large_icon) }}"><img src="{{ asset('upload/setting/'.$setting->large_icon) }}" alt="Canvas Logo"></a>
						</div><!-- #logo end -->

						
						<div class="header-misc">

							<!-- Top Cart
							============================================= -->
							<div id="top-cart" class="">
								<a href="#" id="top-cart-trigger" style="color: #607D8B;"><i class="icon-line-bag"></i><span class="top-cart-number" id="count_cart">{{ $count_cart }}</span></a>
								<div class="top-cart-content">
									<div class="top-cart-title">
										<h4>Keranjang Belanja</h4>
									</div>
									<div class="top-cart-items">
									<div id="top-cart-content">
										@php $total = 0 ; @endphp
										@foreach($cart as $v)
										<div class="top-cart-item">
											<div class="top-cart-item-image">
												
												@if($v->catalog->type=="textbook")
													<a href="#"><img src="{{ url('upload/textbook/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
												@elseif($v->catalog->type=="monograph")
													<a href="#"><img src="{{ url('upload/monograph/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
												@elseif($title=="reference")
													<a href="#"><img src="{{ url('upload/reference/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
												@else
													<a href="#"><img src="{{ url('upload/novel/'.$v->catalog->cover) }}" alt="Blue Round-Neck Tshirt" /></a>
												@endif
												
											</div>
											<div class="top-cart-item-desc">
												<div class="top-cart-item-desc-title">
													<a href="#">{{ $v->catalog->name }}</a>
													<span class="top-cart-item-price d-block">Rp. {{ number_format($v->catalog->selling_price, 0, ',', '.') }}</span>
												</div>
												<div class="top-cart-item-quantity">x {{ number_format($v->qty, 0, ',', '.') }}</div>
											</div>
										</div>
										@php $total = $total + ($v->qty * $v->selling_price) ; @endphp
										@endforeach
									</div>
									</div>
									<div class="top-cart-action">
										<span class="top-checkout-price" id="top-checkout-price">Rp. {{ number_format($total, 0, ',', '.') }}</span>
										<a href="#" class="button button-3d button-small m-0">View Cart</a>
									</div>
								</div>
								
							</div><!-- #top-cart end -->

							@if(Auth::user())
							<nav class="primary-menu">
								<ul class="menu-container" >
									@if(Auth::user()->photo)
										<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><img src="{{ asset('upload/photo/'.Auth::user()->photo)}}" width=30px height="30px" style="border-radius: 50%;"></a>
									@else
										<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><img src="{{ asset('profile.png')}}" width=30px height="30px" style="border-radius: 50%;margin-left:10px;margin-top:-10px"></a>
									@endif
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
											<div class="container">
												<div class="row">
													<ul class="sub-menu-container">
														<li class="menu-item mega-menu-title">
															<ul class="sub-menu-container">
																<li class="menu-item">
																	<a class="menu-link" href="{{ url('page-textbook') }}"><div>Akun</div></a>
																</li>
																<li class="menu-item">
																	<a class="menu-link" href=""  onclick="event.preventDefault();document.getElementById('logout-form').submit();" ><div>Sign Out</div>
																		<form id="logout-form" action="{{ url('web-logout') }}" method="POST" style="display: none;">
																			@csrf
																		</form>
																	</a>
																</li>
															</ul>
														</li>
													</ul>
												</div>
											</div>
										</div>
									</li>
								</ul>
							</nav>
							@endif
						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

						<ul class="menu-container" >
								<li class="menu-item current menu-color-tech"><a class="menu-link" href="{{ url('/') }}"><div style="font-size: 12px;">Home</div></a></li>
								<li class="menu-item menu-color-tech"><a class="menu-link" href="{{ url('page-about') }}"><div style="font-size: 12px;">About us</div></a></li>
								<li class="menu-item menu-color-tech"><a class="menu-link" href="{{ url('page-publishing-process') }}"><div style="font-size: 12px;">Publishing Process</div></a></li>
								<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;">Book</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-textbook') }}"><div>Buku Ajar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-monograph') }}"><div>Monograf</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-reference') }}"><div>Referensi</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="{{ url('page-novel') }}"><div>Novel</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;"><center>Journal<br> & Proceeding</center></div></a>
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
								<li class="menu-item menu-color-tech  mega-menu mega-menu-small"><a class="menu-link" href="#"><div style="font-size: 12px;"><center>Conference <br> & Workshop</center></div></a>
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
								<li class="menu-item menu-color-tech"><a class="menu-link" href="{{ url('page-author-and-affiliation') }}"><div style="font-size: 12px;"><center>Author <br> & Affiliation</center></div></a></li>
								<li class="menu-item menu-color-tech"><a class="menu-link" href="{{ url('page-term-and-condition') }}"><div style="font-size: 12px;"><center>Term <br> & Condition</center></div></a></li>
								<li class="menu-item menu-color-tech"><a class="menu-link" href="{{ url('page-contact') }}"><div style="font-size: 12px;">Contact Us</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->


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
		<footer id="footer" class="dark" style="background-color: #3d3d3d;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap row clearfix">

					<div class="col-lg-6 col-sm-6 mb-5 mb-lg-0">
						<!-- Footer Widget 1
						============================================= -->
						<div class="widget clearfix" data-animate="fadeInUp" data-delay="100">
							
						<address>
							<strong>Alamat:</strong><br>{{ $setting->address }}{{ $setting->address }}<br><br>
							<strong>Telepon / Whatsapp: </strong><br>{{ $setting->phone }}<br><br>
							<strong>Email: </strong><br>{{ $setting->email }}
						</address>
						</div>
					</div>

					<!-- Footer Widget 3
					============================================= -->
					<div class="col-lg-3 col-sm-6 mb-5 mb-sm-0" data-animate="fadeInUp" data-delay="300">
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
					<div class="col-lg-3 col-sm-6 mb-0">
						<div class="widget widget_links clearfix "data-animate="fadeInUp" data-delay="600">
							<h4 class="mb-3 mb-sm-4">Media Sosial</h4>
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
						
						<div id="histats_counter" style="padding-top:20px" data-animate="fadeInUp" data-delay="600"></div>
					</div>

				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row justify-content-center" data-animate="fadeInUp" data-delay="300">
						<div class="col-md-12 align-self-center">
							Copyrights &copy; 2024 All Rights Reserved By Teras Kampus. <br>
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
	@if(
	Request::segment(1)!="page-conference"
	&& Request::segment(1)!="page-workshop"
	)
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	@endif
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
	
<!-- Histats.com  START  (aync)-->
<script type="text/javascript">var _Hasync= _Hasync|| [];
_Hasync.push(['Histats.start', '1,4908527,4,408,270,55,00011111']);
_Hasync.push(['Histats.fasi', '1']);
_Hasync.push(['Histats.track_hits', '']);
(function() {
var hs = document.createElement('script'); hs.type = 'text/javascript'; hs.async = true;
hs.src = ('//s10.histats.com/js15_as.js');
(document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(hs);
})();</script>
<noscript><a href="/" target="_blank"><img  src="//sstatic1.histats.com/0.gif?4908527&101" alt="" border="0"></a></noscript>
<!-- Histats.com  END  -->  
</body>
</html>