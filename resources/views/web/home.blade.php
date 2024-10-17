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
	<title>News Demo | Canvas</title>

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
						<a href="demo-news.html" class="standard-logo"><img class="mx-auto" src="https://teraskampus.id/wp-content/uploads/2024/04/logo-perusahaan.png" alt="Canvas Logo"></a>
						<a href="demo-news.html" class="retina-logo"><img class="mx-auto" src="https://teraskampus.id/wp-content/uploads/2024/04/logo-perusahaan.png" alt="Canvas Logo"></a>
					</div><!-- #logo end -->

					<div class="w-100 d-block d-md-none"></div>

					<div class="col-12 col-sm-6 col-md-4 justify-content-center justify-content-sm-start d-flex order-md-1 mb-4 mb-sm-0">
						<a href="https://facebook.com/semiColonWeb" class="social-icon si-small si-rounded si-dark si-mini si-facebook mb-0">
							<i class="icon-facebook"></i>
							<i class="icon-facebook"></i>
						</a>
						<a href="https://twitter.com/__semicolon" class="social-icon si-small si-rounded si-dark si-mini si-twitter mb-0">
							<i class="icon-twitter"></i>
							<i class="icon-twitter"></i>
						</a>
						<a href="https://instagram.com/semicolonweb" class="social-icon si-small si-rounded si-dark si-mini si-instagram mb-0">
							<i class="icon-instagram"></i>
							<i class="icon-instagram"></i>
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

							<ul class="menu-container">
								<li class="menu-item current menu-color-home"><a class="menu-link" href="demo-news.html"><div>Home</div></a></li>
								<li class="menu-item menu-color-travel"><a class="menu-link" href="demo-news-category.html"><div>About us</div></a></li>
								<li class="menu-item menu-color-market  mega-menu mega-menu-small"><a class="menu-link" href="demo-news-category.html"><div>Catalog</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Buku Ajar</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Monograf</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Referensi</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Novel</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-market  mega-menu mega-menu-small"><a class="menu-link" href="demo-news-category.html"><div>Journal & Proceeding</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Journal</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Proceeding</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-market  mega-menu mega-menu-small"><a class="menu-link" href="demo-news-category.html"><div>Conference & Workshop</div></a>
									<div class="mega-menu-content border-top-0 mega-menu-style-2" style="width: 200px">
										<div class="container">
											<div class="row">
												<ul class="sub-menu-container">
													<li class="menu-item mega-menu-title">
														<ul class="sub-menu-container">
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Conference</div></a>
															</li>
															<li class="menu-item">
																<a class="menu-link" href="header-light.html"><div>Workshop</div></a>
															</li>
														</ul>
													</li>
												</ul>
											</div>
										</div>
									</div>
								</li>
								<li class="menu-item menu-color-fashion"><a class="menu-link" href="demo-news-category.html"><div>Author & Affiliation</div></a></li>
								<li class="menu-item menu-color-sports"><a class="menu-link" href="demo-news-category.html"><div>Term & Condition</div></a></li>
								<li class="menu-item menu-color-food"><a class="menu-link" href="demo-news-category.html"><div>Contact Us</div></a></li>
							</ul>

							<!-- Mobile Menu
							============================================= -->
							<ul class="menu-container mobile-primary-menu">
								<li class="menu-item current menu-color-home"><a class="menu-link" href="demo-news.html"><div>Home</div></a></li>
								<li class="menu-item menu-color-travel"><a class="menu-link" href="demo-news-category.html"><div>Travel</div></a></li>
								<li class="menu-item menu-color-lifestyle"><a class="menu-link" href="demo-news-category.html"><div>Lifestyle</div></a></li>
								<li class="menu-item menu-color-tech"><a class="menu-link" href="demo-news-category.html"><div>Tech</div></a></li>
								<li class="menu-item menu-color-fashion"><a class="menu-link" href="demo-news-category.html"><div>Fashion</div></a></li>
								<li class="menu-item menu-color-sports"><a class="menu-link" href="demo-news-category.html"><div>Sports</div></a></li>
								<li class="menu-item menu-color-food"><a class="menu-link" href="demo-news-category.html"><div>Food</div></a></li>
								<li class="menu-item menu-color-market"><a class="menu-link" href="demo-news-category.html"><div>More</div></a>
									<ul class="sub-menu-container">
										<li class="menu-item"><a class="menu-link" href="#"><div>Header</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="header-light.html"><div>Light Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-dark.html"><div>Dark Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-transparent.html"><div>Transparent</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-semi-transparent.html"><div>Semi Transparent</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent.html"><div>Light Version</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-semi-transparent-dark.html"><div>Dark Version</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-left.html"><div>Left Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-left.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-left-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-side-right.html"><div>Right Side Header</div></a>
													<ul class="sub-menu-container">
														<li class="menu-item">
															<a class="menu-link" href="header-side-right.html"><div>Fixed Position</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open.html"><div>OnClick Open</div></a>
														</li>
														<li class="menu-item">
															<a class="menu-link" href="header-side-right-open-push.html"><div>Push Content</div></a>
														</li>
													</ul>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="header-floating.html"><div>Floating Version</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="static-sticky.html"><div>Static Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="responsive-sticky.html"><div>Responsive Sticky</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="logo-changer.html"><div>Alternate Logos</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="alternate-mobile-menu.html"><div>Alternate Mobile Menu</div></a>
												</li>
											</ul>
										</li>
									</ul>
									<ul class="sub-menu-container">
										<li class="menu-item mega-menu-title"><a class="menu-link" href="#"><div>Layouts</div></a>
											<ul class="sub-menu-container">
												<li class="menu-item">
													<a class="menu-link" href="blog-single.html"><div>Default Layout</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="blog-single-left-sidebar.html"><div>Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="blog-single-both-sidebar.html"><div>Both Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="both-left-sidebar.html"><div>Both Left Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="both-right-sidebar.html"><div>Both Right Sidebar</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="blog-single-full.html"><div>Full Width</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="blog-single-small.html"><div>Small Image</div></a>
												</li>
												<li class="menu-item">
													<a class="menu-link" href="blog-single-split-right-sidebar.html"><div>Split Layout</div></a>
												</li>
											</ul>
										</li>
									</ul>
								</li>
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

		<!-- Slider
		============================================= -->
		<section id="slider" class="slider-element revslider-wrap h-auto">

		<div class="slider-inner">
				<!--
				#################################
					- THEMEPUNCH BANNER -
				#################################
				-->
				<div id="rev_slider_k_fullwidth_wrapper" class="rev_slider_wrapper fullwidth-container"  style="padding:0px;">
					<!-- START REVOLUTION SLIDER 5.1.4 fullwidth mode -->
					<div id="rev_slider_k_fullwidth" class="rev_slider fullwidthbanner" style="display:none;" data-version="5.1.4">
						<ul>
							<!-- SLIDE  -->
														<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="https://silahkandlhk.com/upload/slider/1723048431.php7" data-delay="7000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="https://silahkandlhk.com/upload/slider/1723048431.php7"  alt="kenburns6" >
								<!-- LAYERS -->
							</li>
														<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="https://silahkandlhk.com/upload/slider/1698388554.jpg" data-delay="7000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="https://silahkandlhk.com/upload/slider/1698388554.jpg"  alt="kenburns6" >
								<!-- LAYERS -->
							</li>
														<li data-transition="fade" data-slotamount="1" data-masterspeed="1500" data-thumb="https://silahkandlhk.com/upload/slider/1698389081.jpg" data-delay="7000"  data-saveperformance="off"  data-title="Unlimited Possibilities">
								<!-- MAIN IMAGE -->
								<img src="https://silahkandlhk.com/upload/slider/1698389081.jpg"  alt="kenburns6" >
								<!-- LAYERS -->
							</li>
														
						</ul>
					</div>
				</div><!-- END REVOLUTION SLIDER -->
			</div>

		</section>

		<!-- Content
		============================================= -->
		<section id="content">
			<div class="content-wrap">
				<div class="container clearfix">

					<div class="row clearfix">

						<!-- Posts Area
						============================================= -->
						<div class="col-lg-8">

							<!-- Tab Menu
							============================================= -->
							<nav class="navbar navbar-expand-lg navbar-light p-0">
								<h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Berita Terbaru</h4>
								<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarToggler1" aria-controls="navbarToggler1" aria-expanded="false" aria-label="Toggle navigation">
									<i class="icon-line-menu"></i>
								</button>

							</nav>

							<div class="line line-xs line-dark"></div>

							<!-- Tab Content
							============================================= -->
							<div class="tab-content" id="nav-tabContent">
								<!-- Tab Content 1
								============================================= -->
								<div class="tab-pane fade show active" id="nav-outdoor" role="tabpanel" aria-labelledby="nav-outdoor-tab">
									<div class="row col-mb-30 mb-0">
										<div class="col-lg-6">
											<!-- Post Article -->
											<div class="posts-md">
												<div class="entry">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/travel/3.jpg') }}" alt="Image 3"></a>
														<div class="entry-categories"><a href="demo-news-category.html" class="bg-travel">Travel</a></div>
													</div>
													<div class="entry-title nott">
														<h3 class="mb-2"><a href="demo-news-single.html">How I Improved My Travel In One Easy Lesson</a></h3>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">John Doe</a></li>
															<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
														</ul>
													</div>
													<div class="entry-content clearfix">
														<p>Asperiores, tenetur, blanditiis, quaerat odit ex exercitationem pariatur quibusdam veritatis quisquam laboriosam esse beatae hic perferendis. Lorem ipsum dolor sit amet.</p>
													</div>
												</div>
											</div>
										</div>
										<div class="col-lg-6">

											<div class="posts-sm row col-mb-30">
												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/travel/small/1.jpg') }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">Rules not to Follow about Travel</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">John Doe</a></li>
																	<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/travel/small/2.jpg') }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">Can You Pass The Travel Test?</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">John Doe</a></li>
																	<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/travel/small/4.jpg') }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">Cheaper/Faster Travel than You Ever Imagined</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">John Doe</a></li>
																	<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/fashion/small/2.jpg') }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">Believe In Your Travel Skills But Never Stop Improving</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">John Doe</a></li>
																	<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>

												<div class="entry col-12">
													<div class="grid-inner row align-items-center g-0">
														<div class="col-auto">
															<div class="entry-image">
																<a href="demo-news-single.html"><img src="{{ asset('frontend/demos/news/images/posts/market/small/3.jpg') }}" alt="Image"></a>
															</div>
														</div>
														<div class="col ps-3">
															<div class="entry-title">
																<h4><a href="demo-news-single.html">Why Most People Will Never Be Great At Travel</a></h4>
															</div>
															<div class="entry-meta">
																<ul>
																	<li><span>by</span> <a href="#">John Doe</a></li>
																	<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
																</ul>
															</div>
														</div>
													</div>
												</div>
											</div>

										</div>
									</div>
								</div>
							</div><!-- Tab End -->

							<!-- Ad
							============================================= -->
							<a href="https://themeforest.net/item/canvas-the-multipurpose-html5-template/9228123"><img src="demos/news/images/ad/728x90.jpg" width="728" alt="Ad" class="aligncenter mb-5"></a>

						</div>

						<!-- Top Sidebar Area
						============================================= -->
						<div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
							<div class="sticky-sidebar">
								
								<div class="widget clearfix">
									<h4 class="mb-2 ls1 text-uppercase fw-bold">Buku Terbaru</h4>
									<div class="line line-xs line-home"></div>

									<div class="posts-sm row col-mb-30">
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="demos/news/images/posts/fashion/small/2.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="demo-news-single.html">UK government weighs Tesla's Model.</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">John Doe</a></li>
															<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- Post Article -->
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="demos/news/images/posts/travel/small/3.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="demo-news-single.html">MIT's new robot glove can give you extra fingers.</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">John Doe</a></li>
															<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- Post Article -->
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="demos/news/images/posts/sports/small/1.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="demo-news-single.html">You can now listen to headphones through your hoodie.</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">John Doe</a></li>
															<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
										<!-- Post Article -->
										<div class="entry col-12">
											<div class="grid-inner row align-items-center g-0">
												<div class="col-auto">
													<div class="entry-image">
														<a href="demo-news-single.html"><img src="demos/news/images/posts/fashion/small/4.jpg" alt="Image"></a>
													</div>
												</div>
												<div class="col ps-3">
													<div class="entry-title">
														<h4 class="fw-semibold"><a href="demo-news-single.html">How would you change Kobo's Aura HD e-reader?</a></h4>
													</div>
													<div class="entry-meta">
														<ul>
															<li><span>by</span> <a href="#">John Doe</a></li>
															<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
														</ul>
													</div>
												</div>
											</div>
										</div>
									</div>

								</div>
								
							</div>
						</div> <!-- Sidebar End -->
					</div>
				</div> <!-- Container End -->

			</div>
		</section><!-- #content end -->

		<section id="content">
			<div class="content-wrap pb-0 clearfix">
			<div class="section m-0 section-scroller" style="padding: 100px 0">
					<div class="container center">
						<div class="heading-block border-bottom-0 mx-auto" style="max-width: 820px">
							<h2 class="nott ls0 fw-normal">Katalog Buku</h2>
							<a href="demo-articles-books.html" class="button button-large nott px-5 ms-0 mt-4 clearfix">View All</a>
						</div>
					</div>
					<div class="swiper_wrapper customjs h-auto" style="padding: 50px 0 80px;">
						<div class="swiper-container swiper-parent swiper-scroller">
							<div class="swiper-wrapper h-auto">

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/1/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Yanagi Canvas</a></h4>
													<p class="mb-3 d-none d-sm-block">Proactively empower flexible partnerships rather than ethical products. Assertively cultivate 2.0 ROI before standardized processes.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$50.00</del> $42.00</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/2/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$39.99</del> $29.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center justify-content-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/3/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$29.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/4/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Woodfire Pizza</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$21.49</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/2/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">My Father is a Hero</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$60.00</del> $49.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/6/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3">Harry Potter Series</h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$11.49</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- Add Scroll Bar -->
							<div class="swiper-scrollbar"></div>
							<div class="slider-arrow-left slider-arrow-left-1"><i class="icon-angle-left"></i></div>
							<div class="slider-arrow-right slider-arrow-right-1"><i class="icon-angle-right"></i></div>
						</div>

					</div>
				</div>

		
			</div>
		</section><!-- #content end -->

		<section id="content">
			<div class="pb-0 clearfix">
			<div class="section m-0 section-scroller" style="background-color: unset;padding: 100px 0">
					<div class="container center">
						<div class="heading-block border-bottom-0 mx-auto" style="max-width: 820px">
							<h2 class="nott ls0 fw-normal">Jurnal dan Prosiding</h2>
							<a href="demo-articles-books.html" class="button button-large nott px-5 ms-0 mt-4 clearfix">View All</a>
						</div>
					</div>
					<div class="swiper_wrapper customjs h-auto" style="padding: 50px 0 80px;">
						<div class="swiper-container swiper-parent swiper-scroller">
							<div class="swiper-wrapper h-auto">

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/1/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Yanagi Canvas</a></h4>
													<p class="mb-3 d-none d-sm-block">Proactively empower flexible partnerships rather than ethical products. Assertively cultivate 2.0 ROI before standardized processes.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$50.00</del> $42.00</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/2/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$39.99</del> $29.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center justify-content-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/3/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$29.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/4/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Woodfire Pizza</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$21.49</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/2/1.png') }}" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">My Father is a Hero</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix"><del>$60.00</del> $49.99</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="{{ asset('frontend/demos/articles/images/articles/6/1.png') }}" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3">Harry Potter Series</h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<span class="article-price fw-bold ms-1 clearfix">$11.49</span>
													<a href="#" class="button button-small button-dark ls0 shadow-none nott ms-0 mt-4 clearfix"><i class="icon-shopping-cart1"></i>Add to Cart</a>
												</div>
											</div>
										</div>
									</div>
								</div>

							</div>
							<!-- Add Scroll Bar -->
							<div class="swiper-scrollbar"></div>
							<div class="slider-arrow-left slider-arrow-left-1"><i class="icon-angle-left"></i></div>
							<div class="slider-arrow-right slider-arrow-right-1"><i class="icon-angle-right"></i></div>
						</div>

					</div>
				</div>

		
			</div>
		</section><!-- #content end -->

		<section id="content">
			
		<div class="section mb-0">
					<div class="container clearfix">

						<div class="heading-block center">
							<h3>Supported <span>by</span></h3>
						</div>


						
			<div class="pb-0 clearfix">
			
			<div id="oc-clients" class="section bg-transparent mt-0 owl-carousel owl-carousel-full image-carousel footer-stick carousel-widget" data-margin="80" data-loop="true" data-nav="false" data-autoplay="5000" data-pagi="false" data-items-xs="2" data-items-sm="3" data-items-md="4" data-items-lg="5" data-items-xl="6">
	
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/1.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/2.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/3.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/4.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/5.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/6.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/7.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/8.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/9.png') }}" alt="Clients"></a></div>
	<div class="oc-item"><a href="#"><img src="{{ asset('frontend/images/clients/10.png') }}" alt="Clients"></a></div>
	
	</div>
			
	
			
				</div>
					</div>
				</div>
		</section><!-- #content end -->


		<!-- Footer
		============================================= -->
		<footer id="footer" class="dark" style="background-color: #1f2024;">

			<div class="container">

				<!-- Footer Widgets
				============================================= -->
				<div class="footer-widgets-wrap row clearfix">

					<div class="col-lg-4 col-sm-6 mb-5 mb-lg-0">
						<!-- Footer Widget 1
						============================================= -->
						<div class="widget clearfix">
							<h4 class="mb-3 mb-sm-4">Recent Posts</h4>
							<div class="posts-sm row col-mb-30" id="post-list-footer">
								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="demo-news-single.html"><img src="demos/news/images/posts/travel/small/1.jpg" alt="Image"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="fw-semibold"><a href="demo-news-single.html" class="text-white">UK government weighs Tesla's Model.</a></h4>
											</div>
											<div class="entry-meta">
												<ul>
													<li><span>by</span> <a href="#">John Doe</a></li>
													<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="demo-news-single.html"><img src="demos/news/images/posts/sports/small/2.jpg" alt="Image"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="fw-semibold"><a href="demo-news-single.html" class="text-white">UK government weighs Tesla's Model.</a></h4>
											</div>
											<div class="entry-meta">
												<ul>
													<li><span>by</span> <a href="#">John Doe</a></li>
													<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>

								<div class="entry col-12">
									<div class="grid-inner row align-items-center g-0">
										<div class="col-auto">
											<div class="entry-image">
												<a href="demo-news-single.html"><img src="demos/news/images/posts/market/small/3.jpg" alt="Image"></a>
											</div>
										</div>
										<div class="col ps-3">
											<div class="entry-title">
												<h4 class="fw-semibold"><a href="demo-news-single.html" class="text-white">Why market Is No Friend To Small Business</a></h4>
											</div>
											<div class="entry-meta">
												<ul>
													<li><span>by</span> <a href="#">John Doe</a></li>
													<li><i class="icon-time"></i><a href="#">11 Mar 2021</a></li>
												</ul>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>

					<!-- Footer Widget 2
						============================================= -->
					<div class="col-lg-2 col-sm-6 mb-5 mb-lg-0">
						<h4 class="mb-3 mb-sm-4">Tag Cloud</h4>
						<div class="tagcloud">
							<a href="#">general</a>
							<a href="#">videos</a>
							<a href="#">music</a>
							<a href="#">media</a>
							<a href="#">photography</a>
							<a href="#">parallax</a>
							<a href="#">ecommerce</a>
							<a href="#">terms</a>
							<a href="#">coupons</a>
							<a href="#">modern</a>
							<a href="#">magazine</a>
							<a href="#">bootstrap</a>
							<a href="#">news</a>
							<a href="#">blog</a>
							<a href="#">wordpress</a>
						</div>
					</div>

					<!-- Footer Widget 3
					============================================= -->
					<div class="col-lg-3 col-sm-6 mb-5 mb-sm-0">
						<div class="widget widget_links clearfix">
							<h4 class="mb-3 mb-sm-4">Blogroll</h4>
							<ul>
								<li><a href="https://codex.wordpress.org/">Documentation</a></li>
								<li><a href="https://wordpress.org/support/forum/requests-and-feedback">Feedback</a></li>
								<li><a href="https://wordpress.org/extend/plugins/">Plugins</a></li>
								<li><a href="https://wordpress.org/support/">Support Forums</a></li>
								<li><a href="https://wordpress.org/extend/themes/">Themes</a></li>
								<li><a href="https://wordpress.org/news/">Canvas Blog</a></li>
								<li><a href="https://planet.wordpress.org/">Customer Reviews</a></li>
								<li><a href="https://planet.wordpress.org/">Get Licence</a></li>
							</ul>
						</div>
					</div>

					<!-- Footer Widget 4
					============================================= -->
					<div class="col-lg-3 col-sm-6 mb-0">
						<div class="widget widget_links clearfix">
							<h4 class="mb-3 mb-sm-4">Download in Mobile</h4>
							<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus beatae esse iure est, quam libero!</p>
							<a href="#" class="button button-light text-dark w-100 text-center bg-white nott ls0 button-rounded button-xlarge ms-0"><i class="icon-apple"></i>App Store</a>
							<a href="#" class="button button-light text-dark w-100 text-center bg-white nott ls0 button-rounded button-xlarge ms-0"><i class="icon-googleplay"></i>Google Play</a>
						</div>
					</div>

				</div>

			</div>

			<!-- Copyrights
			============================================= -->
			<div id="copyrights">

				<div class="container clearfix">

					<div class="row justify-content-center">
						<div class="col-md-6 align-self-center">
							Copyrights &copy; 2020 All Rights Reserved by Canvas Inc.<br>
							<div class="copyright-links"><a href="#">Terms of Use</a> / <a href="#">Privacy Policy</a></div>
						</div>

						<div class="col-md-6 align-self-center">
							<div class="copyrights-menu float-end copyright-links m-0 clearfix">
								<a href="#">Home</a>/<a href="#">About</a>/<a href="#">Features</a>/<a href="#">Portfolio</a>/<a href="#">FAQs</a>/<a href="#">Contact</a>
							</div>
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