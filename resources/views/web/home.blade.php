@extends('web.layout')
@section('content')
	
    <!-- Slider
		============================================= -->
		<section id="slider" class="slider-element swiper_wrapper min-vh-0">
			<div class="slider-inner">
				<div class="swiper-container swiper-parent">
					<div class="swiper-wrapper">

						<div class="swiper-slide" style="background-color: aliceblue;">
							<div class="container">
								<div class="row align-items-center mt-5">
									<div class="col-xl-6 pe-0 pe-xl-5 col-md-5 col-sm-11 col-12 mb-5 mb-lg-0">
										<div class="heading-block border-bottom-0 mb-4">
											<h2 class="fw-bold ls0 nott">Rasakan Kebersamaan Setiap Publikasi Anda</h2>
										</div>
										<p>Sedang mencari solusi tempat publikasi untuk penelitian dan pengabdian kepada masyarakat?
                                        Kami hadir untuk menjawab semua kebutuhan artikel anda.</p>
										<a href="#" class="button button-large nott ms-0"><i class="icon-shopping-cart1"></i> Ayo Submit</a>
									</div>
									<div class="col-xl-2 col-md-3 col-4 parallax" data-0="transform: translateY(0px);" data-600="transform: translateY(-30px);">
										<img src="{{ asset('frontend/demos/articles/images/articles/1/1.png') }}" alt="Image" class="rounded faster" data-animate="fadeInLeft">
										{{--<div class="card mt-3 d-none d-sm-block faster" data-animate="fadeInLeft" data-delay="100">
											<div class="card-body rounded bg-color dark">
												<h4 class="mb-2 font-body">Demo Heading</h4>
												<p class="mb-0">Sunt, laborum, nemo. Aperiam. Lorem ipsum dolor sit consectetur adipisicing elit.</p>
											</div>
										</div>--}}
									</div>
									<div class="col-xl-2 col-md-2 col-4 p-0 parallax" data-0="transform: translateY(0);" data-600="transform: translateY(20px);">
										<img src="{{ asset('frontend/demos/articles/images/articles/1/4.png') }}" alt="Image" class="faster rounded" data-animate="fadeInLeft" data-delay="200">
										<img src="{{ asset('frontend/demos/articles/images/articles/1/2.png') }}" alt="Image" class="faster rounded mt-3" data-animate="fadeInLeft" data-delay="300">
									</div>
									<div class="col-xl-2 col-md-2 col-4 parallax" data-0="transform: translateY(0px);" data-600="transform: translateY(-20px);">
										<img src="{{ asset('frontend/demos/articles/images/articles/1/3.png') }}" alt="Image" class="faster rounded" data-animate="fadeInLeft" data-delay="400">
										<img src="{{ asset('frontend/demos/articles/images/articles/1/5.png') }}" alt="Image" class="faster rounded mt-3" data-animate="fadeInLeft" data-delay="500">
									</div>
								</div>
							</div>
						</div>

						<div class="swiper-slide" style="background-color: aliceblue;">
							<div class="container">
								<div class="row align-items-center mt-5">
									<div class="col-xl-6 pe-0 pe-xl-5 col-md-6 col-sm-11 col-12 mb-5 mb-lg-0">
										<div class="heading-block border-bottom-0 mb-4">
											<h2 class="fw-bold ls0 nott">Rasakan Kebersamaan Setiap Publikasi Anda</h2>
										</div>
										<p>Sedang mencari solusi tempat publikasi untuk penelitian dan pengabdian kepada masyarakat?
                                        Kami hadir untuk menjawab semua kebutuhan artikel anda.</p>
                                        {{--<div class="article-info bottommargin-sm d-flex align-items-center justify-content-between">
											<div class="rating-stars ms-1"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i></div>
											<h5>by: <a href="#">Hans Down</a></h5>
											<span class="article-price fw-bold ms-1"><del>$60.00</del> $49.99</span>
										</div>--}}
										<a href="#" class="button button-large nott ms-0"><i class="icon-shopping-cart1"></i> Ayo Submit</a>
									</div>
									<div class="col-xl-3 col-md-3 col-6 parallax" data-0="transform: translateY(0px);" data-600="transform: translateY(-30px);">
										<img src="{{ asset('frontend/demos/articles/images/articles/2/1.png') }}" alt="Image" class="rounded" data-animate="faster fadeInLeft">
										{{--<div class="card mt-3" data-animate="faster fadeInLeft" data-delay="100">
											<div class="card-body rounded bg-color dark">
												<h4 class="mb-2 font-body">Demo Heading</h4>
												<p class="mb-0">Sunt, laborum, nemo. Aperiam. Lorem ipsum dolor sit consectetur adipisicing elit.</p>
											</div>
										</div>--}}
									</div>
									<div class="col-xl-3 col-md-3 col-6 p-0 parallax" data-0="transform: translateY(0);" data-600="transform: translateY(40px);">
										<img src="{{ asset('frontend/demos/articles/images/articles/2/2.png') }}" alt="Image" class="rounded" data-animate="faster fadeInLeft" data-delay="200">
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="slider-arrow-left"><i class="icon-angle-left"></i></div>
					<div class="slider-arrow-right"><i class="icon-angle-right"></i></div>
				</div>
			</div>
		</section>

		<!-- Content
		============================================= -->
		<section id="content">

			<div class="content-wrap pb-0 clearfix">

            <div class="row clearfix">

<!-- Posts Area
============================================= -->
<div class="col-lg-8">

    <!-- Tab Menu
    ============================================= -->
    <nav class="navbar navbar-expand-lg navbar-light p-0" data-animate="fadeInUp" data-delay="100">
        <h4 class="mb-0 pe-2 ls1 text-uppercase fw-bold">Berita Terbaru</h4>
    </nav>

    <div class="line line-xs line-dark" data-animate="fadeInUp" data-delay="100"></div>

    <!-- Articles
    ============================================= -->
    <div class="row col-mb-50 mb-0">
            <div class="col-md-6 mt-4" data-animate="fadeInUp" data-delay="100">
                <!-- Post Article -->
                <div class="posts-md">
                    <div class="entry">
                        <div class="entry-image">
                            <a href="demo-news-single.html"><img src="" alt="Image 3"></a>
                            <!-- <div class="entry-categories"><a href="demo-news-category.html" class="bg-lifestyle">lifestyle</a></div> -->
                        </div>
                        <div class="entry-title title-sm nott">
                            <h3 class="mb-2"><a href="demo-news-single.html">aa</a></h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-user"></i><a href="#">sss</a></li>
                                <li><i class="icon-calendar3"></i><a href="#">ccc</a></li>
                            </ul>
                        </div>
                        <div class="entry-content clearfix">
                            <p class="mb-0">aa</p>
                        </div>
                    </div>
                </div>
            </div>
    </div>

    <div class="posts-sm row col-mb-30">
            <div class="entry col-md-6">
                <!-- Post Article -->
                <div class="grid-inner row align-items-center no-gutter" data-animate="fadeInUp" data-delay="100">
                    <div class="col-auto">
                        <div class="entry-image">
                            <a href="demo-news-single.html"><img src="" alt="Image"></a>
                        </div>
                    </div>
                    <div class="col ps-3">
                        <div class="entry-title">
                            <h4 class="fw-medium"><a href="demo-news-single.html">yyy</a></h4>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-user"></i><a href="#">aaa</a></li>
                                <li><i class="icon-calendar3"></i><a href="#">ttt</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
    </div>
</div>

<!-- Top Sidebar Area
============================================= -->
{{--<div class="col-lg-4 sticky-sidebar-wrap mt-5 mt-lg-0">
    <div class="sticky-sidebar">
        <!-- Sidebar Widget 1
        ============================================= -->
        <div class="widget clearfix">
            <h4 class="mb-2 ls1 text-uppercase fw-bold" data-animate="fadeInUp" data-delay="100">Informasi</h4>
            <div class="line line-xs line-market" data-animate="fadeInUp" data-delay="100"></div>
            <div class="oc-item" data-animate="fadeInUp" data-delay="400">
                <div class="entry">
                    <div class="entry-image">
                        <div class="fslider" data-arrows="true" data-lightbox="gallery" data-lightbox="gallery" data-speed="400" data-arrows="true" data-thumbs="true" data-easing="easeOutQuad">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    @foreach($information as $v)
                                    <div class="slide" data-thumb="{{ asset('upload/information/'.$v->image) }}">
                                        <a href="{{ asset('upload/information/'.$v->image) }}" data-lightbox="gallery-item"><img src="{{ asset('upload/information/'.$v->image) }}" alt="Standard Post with Gallery"></a>
                                    </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>--}}
</div>

				<div class="section m-0 section-scroller" style="padding: 100px 0">
					<div class="container center">
						<span class="before-heading font-body">Most Popular</span>
						<div class="heading-block border-bottom-0 mx-auto" style="max-width: 820px">
							<h2 class="nott ls0 fw-normal">Rapidiously pontificate tactical information visa installed base platforms.</h2>
							<a href="demo-articles-books.html" class="button button-large nott px-5 ms-0 mt-4 clearfix">View All</a>
						</div>
					</div>
					<div class="swiper_wrapper customjs h-auto" style="padding: 50px 0 80px;">
						<div class="swiper-container swiper-parent swiper-scroller">
							<div class="swiper-wrapper h-auto">

								<div class="swiper-slide">
									<div class="row m-auto align-items-center">
										<div class="col-md-6 p-0">
											<img src="demos/articles/images/articles/1/1.png" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Yanagi Canvas</a></h4>
													<p class="mb-3 d-none d-sm-block">Proactively empower flexible partnerships rather than ethical products. Assertively cultivate 2.0 ROI before standardized processes.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-half-full"></i></div>
														<h5>by: <a href="#">Samuel Serif</a></h5>
													</div>
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
											<img src="demos/articles/images/articles/2/1.png" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i></div>
														<h5>by: <a href="#">Parsley Montana</a></h5>
													</div>
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
											<img src="demos/articles/images/articles/3/1.png" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Learn English</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i></div>
														<h5>by: <a href="#">Fig Nelson</a></h5>
													</div>
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
											<img src="demos/articles/images/articles/4/1.png" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">Woodfire Pizza</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i></div>
														<h5>by: <a href="#">Norman Gordon</a></h5>
													</div>
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
											<img src="demos/articles/images/articles/2/1.png" alt="Image">
											<div class="sale-flash badge bg-color text-light p-2">Sale!</div>
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3"><a href="#">My Father is a Hero</a></h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star-empty"></i></div>
														<h5>by: <a href="#">Hans Down</a></h5>
													</div>
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
											<img src="demos/articles/images/articles/6/1.png" alt="Image">
										</div>
										<div class="col-md-6 p-0">
											<div class="card">
												<div class="card-body py-4">
													<h4 class="mb-3">Harry Potter Series</h4>
													<p class="mb-3 d-none d-sm-block">Continually impact viral web-readiness before client-focused value. Phosfluor brand global action items via principle-centered ideas.</p>
													<div class="article-info mb-3 d-flex align-items-center">
														<div class="rating-stars me-3"><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i><i class="icon-star3"></i></div>
														<h5>by: <a href="#">Norman Gordon</a></h5>
													</div>
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

				<div class="section section-about m-0" style="padding: 120px 0; background: url('demos/articles/images/dots-1.png') 100% 0 no-repeat / 40%;">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<h4 class="mb-0"><span class="badge bg-secondary font-body">About Us</span></h4>
								<div class="heading-block">
									<h2 class="fw-normal ls0 nott mb-3 font-primary">Objectively network user friendly quality with world-class bandwidth. </h2>
								</div>
								<p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for change. Proactively communicate standardized paradigms through proactive.</p>
								<a href="#" class="button button-large ls0 nott ms-0 mt-2 clearfix">Learn More</a>
							</div>
							<div class="col-md-6 offset-0 offset-md-1 mt-5 mt-md-0">
								<div class="circle-border">
									<div class="feature-content">
										<div class="d-flex align-items-center justify-content-between h-100">
											<div>
												<div class="circle-inner">
													<div>
														<div class="counter mb-0 fw-normal font-body text-primary"><span class="font-body" data-from="1" data-to="7" data-refresh-interval="10" data-speed="2000"></span>K+</div>
														<h5 class="mt-1 text-muted mb-0 font-body ls0">Books</h5>
													</div>
												</div>
											</div>

											<div class="d-flex h-100 flex-column justify-content-between">
												<div class="circle-inner">
													<div>
														<div class="counter mb-0 fw-normal font-body text-info"><span class="font-body" data-from="1" data-to="3" data-refresh-interval="200" data-speed="23000"></span>K+</div>
														<h5 class="mt-1 text-muted mb-0 font-body ls0">Authors</h5>
													</div>
												</div>
												<div class="circle-inner">
													<div>
														<div class="counter mb-0 fw-normal font-body text-danger"><span class="font-body" data-from="1" data-to="1240" data-refresh-interval="50" data-speed="2100"></span></div>
														<h5 class="mt-1 text-muted mb-0 font-body ls0">Published</h5>
													</div>
												</div>
												<div class="circle-inner">
													<div>
														<div class="counter mb-0 fw-normal font-body text-warning"><span class="font-body" data-from="1" data-to="3" data-refresh-interval="100" data-speed="2400"></span>K+</div>
														<h5 class="mt-1 text-muted mb-0 font-body ls0">Members</h5>
													</div>
												</div>
											</div>

											<div>
												<div class="circle-inner">
													<div>
														<div class="counter mb-0 fw-normal font-body color"><span class="font-body" data-from="1" data-to="220" data-refresh-interval="100" data-speed="2400"></span></div>
														<h5 class="mt-1 text-muted mb-0 font-body ls0">Free Items</h5>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<div class="section bg-transparent">
					<div class="container">
						<div class="heading-block mb-4 border-bottom-0">
							<h2 class="fw-normal ls0 nott mb-0">Authors of the week</h2>
						</div>
						<div class="row align-items-center">

							<div class="col-lg-3 col-sm-6">
								<img src="demos/articles/images/author.jpg" alt="Image">
							</div>

							<div class="col-lg-4 col-sm-6 mt-3 mt-sm-0">
								<div class="heading-block">
									<h2 class="fw-bold ls0 mb-0 font-body">Samuel Serif</h2>
									<span class="text-muted">Writer, London</span>
								</div>
								<p class="mb-0">Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for scenarios and compelling results change.</p>
							</div>

							<div class="col-lg-5 mt-5 mt-lg-0">
								<h4 class="mb-3 fw-normal font-body">Popular Books of <a href="#">Samuel Serif</a></h4>
								<div id="oc-images" class="owl-carousel image-carousel carousel-widget" data-margin="20" data-nav="true" data-pagi="true" data-items-xs="2" data-items-sm="3" data-items-md="3" data-items-lg="2" data-items-xl="2">

									<div class="oc-item">
										<a href="#"><img src="demos/articles/images/articles/1/1.png" alt="Image 1"></a>
									</div>
									<div class="oc-item">
										<a href="#"><img src="demos/articles/images/articles/1/2.png" alt="Image 2"></a>
									</div>
									<div class="oc-item">
										<a href="#"><img src="demos/articles/images/articles/2/1.png" alt="Image 3"></a>
									</div>
									<div class="oc-item">
										<a href="#"><img src="demos/articles/images/articles/4/1.png" alt="Image 4"></a>
									</div>
									<div class="oc-item">
										<a href="#"><img src="demos/articles/images/articles/6/1.png" alt="Image 5"></a>
									</div>

								</div>
							</div>

						</div>
					</div>
				</div>

				<div class="section mb-0 p-md-0">
					<div class="container">
						<div class="row align-items-center justify-content-between">

							<div class="col-lg-5 col-md-5 col-sm-6">
								<div class="heading-block border-bottom-0">
									<h2 class="fw-normal ls0 nott mb-0 font-primary" style="font-size: 44px; line-height: 1.3">Available for your smartphone.</h2>
								</div>
								<p>Progressively strategize just in time scenarios and compelling results. Intrinsicly parallel task extensive systems whereas distinctive catalysts for scenarios and compelling results change.</p>
								<div>
									<a href="#"><img src="demos/articles/images/appstore.png" alt="Image" height="54" class="mt-3"></a>
									<a href="#"><img src="demos/articles/images/googleplay.png" alt="Image"  class="ms-xl-3 ms-lg-1 mt-3 ms-0 " height="54"></a>
								</div>
							</div>

							<div class="col-lg-6 col-md-7 col-sm-6 mt-5 mt-sm-0">
								<div class="d-none d-lg-flex">
									<img src="demos/articles/images/iphone-1.png" class="fast" alt="Image" style="height: 600px" data-animate="fadeInDown">
									<img src="demos/articles/images/iphone-2.png" class="fast" alt="Image" style="height: 600px" data-animate="fadeInUp">
								</div>
								<img src="demos/articles/images/iphone.png" alt="Image" class="d-block d-lg-none px-5 px-sm-0 p-md-5">
							</div>

						</div>
					</div>
				</div>
			</div>
		</section><!-- #content end -->

@endsection
