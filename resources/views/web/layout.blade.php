<!DOCTYPE html>
<html dir="ltr" lang="en-US">
<head>

	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<meta name="author" content="SemiColonWeb" />

	<!-- Stylesheets
	============================================= -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600..700&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/style.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/swiper.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/dark.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/font-icons.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}" type="text/css" />
	<link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}" type="text/css" />

	<!-- Bootstrap Switch CSS -->
	<link rel="stylesheet" href="{{ asset('frontend/css/components/bs-switches.css') }}" type="text/css" />

	<link rel="stylesheet" href="{{ asset('frontend/css/custom.css') }}" type="text/css" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link rel="stylesheet" href="{{ asset('frontend/css/colors.php?color=0C1CCC') }}" type="text/css" />

	<!-- Articles Demo Specific Stylesheet -->
	<link rel="stylesheet" href="{{ asset('frontend/demos/articles/articles.css') }}" type="text/css" />
	<!-- <link rel="stylesheet" href="{{ asset('frontend/demos/articles/css/fonts.css') }}" type="text/css" /> -->


	<!-- Document Title
	============================================= -->
	<title>Articles | Canvas</title>

</head>

<body class="stretched">

	<!-- Document Wrapper
	============================================= -->
	<div id="wrapper" class="clearfix">

		<!-- Header
		============================================= -->
		<header id="header" class="border-bottom-0">
			<div id="header-wrap">
				<div class="container">
					<div class="header-row">

						<!-- Logo
						============================================= -->
						<div id="">
							<a href="demo-articles.html" class="standard-logo" data-dark-logo="https://teraskampus.id/wp-content/uploads/2024/04/logo-perusahaan.png"><img src="https://teraskampus.id/wp-content/uploads/2024/04/logo-perusahaan.png" style="height:80px"></a>
						</div><!-- #logo end -->

						<div class="header-misc">

							<!-- Top Search
							============================================= -->
							<div id="top-search" class="header-misc-icon">
								<a href="#" id="top-search-trigger"><i class="icon-line-search"></i><i class="icon-line-cross"></i></a>
							</div><!-- #top-search end -->

						</div>

						<div id="primary-menu-trigger">
							<svg class="svg-trigger" viewBox="0 0 100 100"><path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path><path d="m 30,50 h 40"></path><path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path></svg>
						</div>

						<!-- Primary Navigation
						============================================= -->
						<nav class="primary-menu">

							<ul class="menu-container">
								<li class="menu-item"><a href="demo-articles-about.html" class="menu-link ls0"><div>Home</div></a></li>
								<li class="menu-item"><a href="demo-articles-about.html" class="menu-link ls0"><div>About us</div></a></li>
								<li class="menu-item"><a href="demo-articles-books.html" class="menu-link ls0"><div>Catalog</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Buku Ajar</div></a></li>
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Monograf</div></a></li>
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Referensi</div></a></li>
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Novel</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="demo-articles-books.html" class="menu-link ls0"><div>Journal & Proceeding</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Journal</div></a></li>
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Proceeding</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="demo-articles-books.html" class="menu-link ls0"><div>Conference & Workshop</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Conference</div></a></li>
										<li class="menu-item"><a href="demo-articles-single.html" class="menu-link ls0"><div>Workshop</div></a></li>
									</ul>
								</li>
								<li class="menu-item"><a href="#" class="menu-link ls0" data-scrollto="#footer" data-highlight="yellow" data-speed="1200"><div>Author & Affiliation</div></a></li>
								<li class="menu-item"><a href="#" class="menu-link ls0" data-scrollto="#footer" data-highlight="yellow" data-speed="1200"><div>Term & Condition</div></a></li>
								<li class="menu-item"><a href="#" class="menu-link ls0" data-scrollto="#footer" data-highlight="yellow" data-speed="1200"><div>Contact Us</div></a></li>
							</ul>

						</nav><!-- #primary-menu end -->

						<form class="top-search-form" action="search.html" method="get">
							<input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter.." autocomplete="off">
						</form>

					</div>
				</div>
			</div>
		</header><!-- #header end -->

		<!-- Content
		============================================= -->
		@yield('content')
		<!-- #content end -->

		<!-- Footer
		============================================= -->
		<footer id="footer" class="border-0">

			<div class="container clearfix">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap row clearfix">

					<div class="col-md-4 col-sm-6">
						<div class="widget clearfix">

							<div class="d-flex align-items-center mb-4">
								<img src="demos/articles/images/logo-footer.jpg" height="40" alt="Image">
								<h4 class="nott ls0 mb-0 font-body ms-2">canvas</h4>
							</div>

							<div class="d-flex clearfix">
								<div class="pe-4 ps-1">
									<i class="icon-building2 h3"></i>
								</div>
								<div class="flex-grow-1">
									<address>
										<abbr title="address"><strong>Headquarters:</strong><br></abbr>
										795 Folsom Ave, Suite 600<br>
										San Francisco, CA 94107<br>
									</address>
								</div>
							</div>
							<div class="d-flex clearfix">
								<div class="pe-4 ps-1">
									<i class="icon-call h3"></i>
								</div>
								<div class="flex-grow-1">
									<div class="bottommargin-sm">
										<abbr title="Phone Number"><strong>Phone:</strong></abbr> (1) 8547 632521<br>
										<abbr title="Fax"><strong>Fax:</strong></abbr> (1) 11 4752 1433<br>
									</div>
								</div>
							</div>
							<div class="d-flex align-items-center clearfix">
								<div class="pe-4 ps-1">
									<i class="icon-envelope21 h3 mb-0"></i>
								</div>
								<div class="flex-grow-1">
									<abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com
								</div>
							</div>

							<div class="mt-4 clearfix">
								<a href="https://facebook.com/semicolonweb" class="social-icon si-small si-rounded si-colored si-facebook" title="Facebook" target="_blank">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>
								<a href="https://twitter.com/__semicolon" class="social-icon ms-1 si-small si-rounded si-colored si-twitter" title="Twitter" target="_blank">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>
								<a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-github" title="Github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>
								<a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-pinterest" title="Pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>
								<a href="#" class="social-icon ms-1 si-small si-rounded si-colored si-forrst" title="Forrst">
									<i class="icon-forrst"></i>
									<i class="icon-forrst"></i>
								</a>
							</div>

						</div>
					</div>

					<div class="col-md-4 col-sm-6  mt-5 mt-sm-0">
						<div class="widget widget_links clearfix">

							<div class="line mb-5 mt-2 d-block d-sm-none"></div>

							<h4 class="font-body fw-bold ls0">Popular Authors</h4>

							<div class="posts-sm row col-mb-30" id="post-list-footer">
								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="#"><img src="demos/articles/images/authors/1.jpg" alt="Author"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="font-body"><a href="#">Nathaneal Down</a></h4>
												<small>Published 2,615 Books</small>
											</div>
										</div>
									</div>
								</div>

								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="#"><img src="demos/articles/images/authors/2.jpg" alt="Author"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="font-body"><a href="#">Bailey Wonger</a></h4>
												<small>Published 2,174 Books</small>
											</div>
										</div>
									</div>
								</div>

								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="#"><img src="demos/articles/images/authors/3.jpg" alt="Author"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="font-body"><a href="#">Hanson Deck</a></h4>
												<small>Published 1,187 Books</small>
											</div>
										</div>
									</div>
								</div>
							</div>

						</div>
					</div>

					<div class="col-md-4 col-sm-6 mt-5 mt-md-0">

						<div id="q-contact" class="widget quick-contact-widget form-widget clearfix">

							<div class="line mb-5 mt-2 d-block d-md-none"></div>

							<h4 class="highlight-me font-body fw-bold ls0">Contact Us</h4>
							<div class="form-result"></div>
							<form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">
								<div class="form-process">
									<div class="css3-spinner">
										<div class="css3-spinner-scaler"></div>
									</div>
								</div>

								<input type="text" class="required sm-form-control border-form-control input-block-level" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Full Name" />
								<input type="text" class="required sm-form-control border-form-control email input-block-level" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="Email Address" />
								<textarea class="required sm-form-control border-form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Message"></textarea>
								<input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
								<input type="hidden" name="prefix" value="quick-contact-form-">
								<button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="button button-small button-black nott ls0 mt-3 ms-0" value="submit">Send Email</button>
							</form>

						</div>
					</div>

				</div><!-- .footer-widgets-wrap end -->

			</div>

			<div class="line m-0"></div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row align-items-center">
						<div class="col-sm-6">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.
						</div>

						<div class="col-sm-6 mt-4 mt-sm-0">
							<div class="float-none float-sm-right clearfix">
								<a href="#" class="social-icon si-small si-borderless si-facebook">
									<i class="icon-facebook"></i>
									<i class="icon-facebook"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-twitter">
									<i class="icon-twitter"></i>
									<i class="icon-twitter"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-gplus">
									<i class="icon-gplus"></i>
									<i class="icon-gplus"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-pinterest">
									<i class="icon-pinterest"></i>
									<i class="icon-pinterest"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-vimeo">
									<i class="icon-vimeo"></i>
									<i class="icon-vimeo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-github">
									<i class="icon-github"></i>
									<i class="icon-github"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-yahoo">
									<i class="icon-yahoo"></i>
									<i class="icon-yahoo"></i>
								</a>

								<a href="#" class="social-icon si-small si-borderless si-linkedin">
									<i class="icon-linkedin"></i>
									<i class="icon-linkedin"></i>
								</a>
							</div>
						</div>
					</div>

				</div>

			</div><!-- #copyrights end -->

		</footer><!-- #footer end -->

	</div><!-- #wrapper end -->

	<!-- Switcher
	============================================= -->
	<div class="mode-switcher">
		<div class="pts-text center"><span class="tdark">Dark</span><span class="tlight">Light</span></div>
		<div class="pts-switcher">
			<div class="switch">
				<input id="switch-toggle-mode" class="switch-toggle switch-toggle-round" type="checkbox">
				<label for="switch-toggle-mode"></label>
			</div>
		</div>
	</div>

	<!-- Go To Top
	============================================= -->
	<div id="gotoTop" class="icon-angle-up"></div>

	<!-- JavaScripts
	============================================= -->
	<script src="{{ asset('frontend/js/jquery.js') }}"></script>
	<script src="{{ asset('frontend/js/plugins.min.js') }}"></script>

	<!-- Footer Scripts
	============================================= -->
	<script src="{{ asset('frontend/js/functions.js') }}"></script>

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